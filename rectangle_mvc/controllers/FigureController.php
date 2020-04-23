<?php

   class FigureController{
        private $view;

        public function __construct($url){
           if(isset($url) && count($url)>1){
              throw new Exception("Page Introuvable");
           }else{

           }

        }

        


   }

?>