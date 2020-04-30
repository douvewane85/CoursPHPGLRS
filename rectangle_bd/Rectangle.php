<?php

//Un Rectangle est une Figure
//Un rectangle herite d'une Figure
//Rectangle est une classe Fille de Figure

  class Rectangle extends Figure{
     
           //Attributs Instances
            private $largeur; 
          //Attributs classe ou Attributs static

            //Constructeur => methode instance concrete
              public  function __construct($longueur=null,$largeur=null){
                        if($longueur!=null){
                          $this->longueur=$longueur;
                        }
                        if($largeur!=null){
                          $this->largeur=$largeur;
                        }
              }
              public function hydrate($row){
                
              }
              //Getters  methodes instances concretes
           
              public function getLargeur(){
                return $this->largeur;
             }
             //setters  methodes instances concretes
              public function setLargeur($largeur){
                 $this->largeur=$largeur;
              }
             
              //Getters Setters  methodes static concretes
            

              //metiers=>UC
              //Redefinition
                public function demiPerimetre(){
                     return $this->longueur + $this->largeur;
                }
              
                public function surface(){
                  return $this->longueur * $this->largeur;
                }
                public function diagonale(){
                  return sqrt(pow($this->longueur,2)+pow($this->largeur,2));
                }
              
  }
/*
  //Access Classe  ::
  //Objet          ->
Rectangle::setUnite("m");

  //Objets
  $rect1=new Rectangle();
  //$rect1.longueur => erreur encapsulation
  //Setters
  $rect1->setLongueur(1200000);
  $rect1->setLargeur(120000);
  //Getters
 echo "Longueur ".  $rect1->getLongueur()."" .$rect1->getUnite()."  <br>";
 echo "Largeur ". $rect1->getLargeur()."" .$rect1->getUnite()."<br>";


  $rect2=new Rectangle();
 //Setters
 $rect2->setLongueur(1200002);
 $rect2->setLargeur(120002);
 //Getters
echo "Longueur".  $rect2->getLongueur()."" .$rect2->getUnite(). "<br>";
echo "Largeur". $rect2->getLargeur()."" .$rect2->getUnite()."<br>";
*/

?>