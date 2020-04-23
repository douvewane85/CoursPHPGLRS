<?php
//Un Carre est une Figure
//Un Carre herite d'une Figure
//Carre est une classe Fille de Figure
//Carre est une specialisation de Figure
  class Carre extends Figure{


            //Constructeur => methode instance concrete
              public  function __construct($longueur=null){
                        if($longueur!=null){
                          $this->longueur=$longueur;
                        }
                       
              }
               
              //metiers=>UC
              //Redefinition
                public function demiPerimetre(){
                     return $this->longueur *2;
                }
               
                public function surface(){
                  return $this->longueur * $this->longueur;
                }
                public function diagonale(){
                  return sqrt(pow($this->longueur,2)+pow($this->longueur,2));
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