<?php
//Regles
   //1) Encapsulation  =>gerer la portéé des attributs et Methodes d'une Classe
            //Portéé
               //private => acces limité a la Classe
               //public => acces illimité
               //protected => acces illimité

//github //creer un compte
//git //installer

  class Rectangle{
      //Attributs  doivent etre à private
          //Instance=> spécifique à un objet de la classe
            private $longueur;
            private $largeur;

          //Classe=> partagé  à l'ensemble des objets de la classe
            private static $unite;

      //Methodes   doivent etre à public

          //Instance
               //concrete=> dont on connait la définition
                  //constructeurs => Construire un Objet
              public  function __construct(){

              }
                  //getter/setters
                      //getters => accesseurs
              public function getLongueur(){
                  return $this->longueur;
              }
              public function getLargeur(){
                return $this->largeur;
            }
              //setters => mutateurs=> modifier la valeur d'un attribut
              public function setLargeur($largeur){
                 $this->largeur=$largeur;
            }
            public function setLongueur($longueur){
                 $this->longueur=$longueur;
            }

                  //metiers=>UC
                public function demiPerimetre($longueur,$largeur){

                }
                public function perimetre($longueur,$largeur){

                }
                public function surface($longueur,$largeur){

                }
                public function diagonale($longueur,$largeur){

                }
               //astraite => dont on ne connait pas encore sa défition
                //metiers=>UC

          //Classe
               //concrete
                  //getter/setters
                   //metiers=>UC
               //astraite
                //metiers=>UC
  }
?>