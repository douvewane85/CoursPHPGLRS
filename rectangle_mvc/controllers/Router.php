<?php
  class Router{
      private $controller;
      private $view;
      private static  $controllerFile="./controllers/";
      

      public function getRoute(){
          try{
              spl_autoload_register(function($class){
                  require_once('models/'.$class.".php");
              });
              $url="";
             
              if(isset($_GET['url'])){

                $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL)); 
                 $controllerClass=ucfirst(strtolower($url[0]))."Controller";
                 self::$controllerFile.= $controllerClass.".php";
                 if(file_exists(self::$controllerFile)){
                    require_once(self::$controllerFile);
                    $this->controller=new $controllerClass($url);
                
                 }  else{
                    throw new Exception("Page Introuvable")  ;
                 }

              }else{
                self::$controllerFile.= "FigureController.php";
                require_once(self::$controllerFile);
                $this->controller=new FigureController($url);
              }


          }catch(Exception $e){
                 $errorMessage=$e->getMessage();
                 require_once("./views/viewError.php");
          }
      }

  }

?>