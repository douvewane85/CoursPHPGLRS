<?php
  class Carre{
     
           //Attributs Instances
            private $longueur; 
          //Attributs classe ou Attributs static
            private static $unite;
          

            //Constructeur => methode instance concrete
              public  function __construct($longueur=null){
                        if($longueur!=null){
                          $this->longueur=$longueur;
                        }
                       
              }
               
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
                public function demiPerimetre(){
                     return $this->longueur *2;
                }
                public function perimetre(){
                  return $this->demiPerimetre()*2;

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