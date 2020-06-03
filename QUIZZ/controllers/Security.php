<?php
   
  class Security extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();

        $this->dirname="security";
        $this->layout="layout_connexion"; 
      
       
    }

   public function loadViewInscription(){
      $this->views="inscription";
      $this->render();  
   }
    public function index(){
       $this->views="connexion";
       $this->render();
      
    }
    public function seConnecter(){
     
      //extract permet d'extraire les valeurs d'un tableau associatif sur ces clés
       if(isset($_POST['btn_connexion'])){
          //Passer par le Formulaire de Connexion
            extract($_POST);
            $this->validator->is_empty($login,'login',"Login Obligatoire");
            $this->validator->is_empty($password,'password',"Password Obligatoire");
         if($this->validator->is_valid()) {
            //Connexion a la Base Donnée
            $this->manager=new UserManager();
            $user=null;
            $user=$this->manager->getUserByLoginAndPwd($login,$password);
             if(!empty($user)) {
                //Login et Mot de Passe Correct
                    $this->data['userConnect']=$user;
                   
                      if($user->getProfil()==="admin"){
                        $this->layout="layout_admin";
                        $this->views="inscription";
                        $this->render();
                      }else{
                         die("Joueur");
                      }
                      
                   
                  
             }else{
                  //Login ou Mot de Passe InCorrect
                        $this->data['err_login']="Login ou Mot de Passe Incorect";
                        $this->views="connexion";
                        $this->render();
             }
           
         }else{
            //Champs non remplis=>Erreur
            $erreurs= $this->validator->getErrors();
            $this->data['erreurs']=$erreurs;
            $this->views="connexion";
            $this->render();
         }

       }else{
          //Passer par URL
          $this->views="connexion";
          $this->render();
       }
       

       
    }

    public function seDeconnecter(){
         echo 0; 
    }
    public function creerUtlisateur(){
        


    }




   }
