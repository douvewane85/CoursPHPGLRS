<?php
//Figure est la Classe Mere de Carre et de Rectangle
//Figure est un généralisation de Carre et  de Rectangle
   require_once("./IManager.php");
   abstract class Figure implements IManager{
    //Attributs Instances
      protected $longueur; 
      protected $id;
    //Attributs classe ou Attributs static
     protected static $unite;


       //Getters  methodes instances concretes
       public function getLongueur(){
        return $this->longueur;
       }
  
   //setters  methodes instances concretes
  
    public function setLongueur($longueur){
       $this->longueur=$longueur;
     }
    //Getters Setters  methodes static concretes
    public static function getUnite(){
         return self::$unite;
    }
    public static function setUnite($unite){
         self::$unite=$unite;
    }

   //metiers=>UC
    public abstract function demiPerimetre();
    public function perimetre(){
      return $this->demiPerimetre()*2;

    }
    public abstract function surface();
    public abstract function diagonale();
    
}
    // $fig=new Figure();//Impossible car Figure est une classe Abstraite
?>