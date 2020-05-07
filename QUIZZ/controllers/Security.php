<?php
   
  class Security extends Controller {

    public function __construct(){
        $this->dirname="security"; 
    }

    public function index(){
       $this->layout="layout_connexion";
       $this->views="connexion";
       $this->render();
      
    }
    public function seConnecter(){
            echo 1; 
       /* $manager=new UserManager();
        $user=null;
        $user= $manager->getUserByLoginAndPwd($_POST['login'],$_POST['pwd']);
     */
    }

    public function seDeconnecter(){
         echo 0; 
    }
    public function creerUtlisateur(){
        
    }

   }
