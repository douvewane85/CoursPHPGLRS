<?php
 abstract class Manager{
      //  $pdo=null connexion Fermée
      //$pdo contient la chaine de connexion
       private  $pdo=null;
       //Classe d'encapsulation des données récuperer lors d'une requete Select 
       protected $className;
   
      private   function getConnexion(){
        try{
           //Scenerio nominal
           if($this->pdo==null){
            $this->pdo = new PDO('mysql:host=localhost;dbname=glrs_figure', 'root','');
            //Activer les erreurs
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
            //Activer le Mode Recuperation sous la forme d'un tableau Associatif
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

          }
        }catch(Exception $ex ){
          //Scenerio Exception
              die("Verifier les Parametres de Conexion".$ex->getMessage());
        }
      
      }

      private   function CloseConnexion(){
                 if($this->pdo!=null) {
                  $this->pdo=null;
                 } 
         }

    public function ExecuteSelect($sql){
            $this->getConnexion();
             $query=$this->pdo->query($sql);
             $data=[];
             while($row=$query->fetch()){
              $data[]=new $this->className($row);
             }
             $this->closeConnexion();
             return $data;

    }
    public function ExecuteUpdate($sql){
         $this->getConnexion();
         //$nbreLigne represente le nombre de ligne modifiée par la requete
          $nbreLigne = $this->pdo->exec($sql);
       $this->closeConnexion();
      return  $nbreLigne;

    }
 
    public abstract function create($data);
    public abstract function update($data);
    public abstract function delete($id);
    public abstract function findAll();
    public abstract function findById($id);

  }
?>