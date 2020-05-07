<?php
class Router{
     private $ctrl;

   public   function  getRoute(){
       //Chargement automatique de toutes classes => autoloading
      try{
           //Autoloading
            spl_autoload_register(function ($className) {
             $pathLibs= "libs/".$className . '.php';
             $pathControllers= "controllers/".$className . '.php';
             $pathModels= "models/".$className . '.php';
           
             if(file_exists($pathLibs)){
                 require_once $pathLibs;   
             }elseif(file_exists($pathModels)){
                  require_once  $pathModels;  
             }
                           
            });
     
            if(isset($_GET['url'])){
               //=>transforme une chaine en tableau suivant un delimiteur   
               $url= explode ("/",$_GET['url']);
               $ctrlClass=ucfirst( $url[0]);
               $pathControllers="controllers/". $ctrlClass. '.php';
               if(file_exists($pathControllers)){
                     require_once($pathControllers);
                     $this->ctrl=new $ctrlClass() ;
                    if(method_exists($this->ctrl,$url[1])){
                          $this->ctrl->{$url[1]}();
                    }else{
                        require_once "controllers/Errors.php";
                        $this->ctrl=new Errors();
                        $this->ctrl->showError("Cette Methode n'existe pas"); 
                    }
               }else{
                  require_once "controllers/Errors.php";
                  $this->ctrl=new Errors();
                  $this->ctrl->showError("Ce controller n'existe pas");
               }
              
            }else{
                  //Page Par defaut
                  require_once "controllers/Security.php";
                  $this->ctrl=new Security();
                  $this->ctrl->index();

            }

      } catch(Exception $ex){
            require_once "controllers/Error.php";
            $this->ctrl=new Error();
            $this->ctrl->showError($ex->getMessage());
      }
       

   }





}