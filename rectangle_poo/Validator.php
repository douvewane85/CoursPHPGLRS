<?php
class Validator {
    
    private $errors=[];

    public function getErrors(){
         $this->errors;
    }

    public function is_valid(){
       return count($this->errors)===0;
    }

 // Longueur et Largueur doivent etre numeric(entier,reel)
 public function is_number($nombre,$key,$errorMessage="Veuiller saisir un nombre"){
    if(!is_numeric($nombre)){
        $this->errors[$key]= $errorMessage;
    }
}

/*
  Longueur positif
  Largeur positif
*/
public function is_positif($nombre,$key,$errorMessage="Veuiller saisir un nombre positif"){
                 is_number($nombre,$key);
                   if($this->is_valid()){
                      if($nombre<=0){
                        $this->errors[$key]= $errorMessage;
                      }
                    }
                   
}

/**
*   Longueur> Largeur
*/
//compare()
//Nbre1 =>plus grand
//Nbre2 =>plus petit
public function compare($nbre1,$nbre2,$errorMessage="Longueur doit superieur à la Largeur"){
   $result1=is_positif($nbre1);

   $result2=is_positif($nbre2);
   $error=[];
   if($result1!==true){
      $error['longueur']= $result1;
   }
   if($result2!==true){
      $error['largeur']= $result2;
   }
   if(count($error)==0){
           if($nbre1>$nbre2){
                 return true;
           }else{
              $error['all']=$errorMessage;
           }
   }
   return $error;

}

    public function  is_empty($nbre,$key,$sms=null){
    if(empty($nbre)){
        if($sms==null){
            $sms="Le Nombre  est Obligatoire";
        }
        $this->errors[$key]= $sms;

        }
    }
}

?>