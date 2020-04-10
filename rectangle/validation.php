<?php
 /*




 */


 // Longueur et Largueur doivent etre numeric(entier,reel)
 function is_number($nombre,$errorMessage="Veuiller saisir un nombre"){
      if(is_numeric($nombre)){
         return true;
      }else{
          return $errorMessage;
      }
 }

 /*
    Longueur positif
    Largeur positif
 */
 function is_positif($nombre,$errorMessage="Veuiller saisir un nombre positif"){
     //is_number($nombre)==true  => is_number($nombre)
       $result=is_number($nombre);
        //entier !0=>true 0=>false
        //chaine "ccc"=>true ""=>false

                    if($result===true){
                        if($nombre>0){
                            return true;
                        }else{
                            return $errorMessage;

                        }


                     }else{
                         return $result;
                     }
 }

 /**
  *   Longueur> Largeur
  */
 //compare()
//Nbre1 =>plus grand
//Nbre2 =>plus petit
 function compare($nbre1,$nbre2,$errorMessage="Longueur doit superieur à la Largeur"){
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

 function  is_empty($nbre,$sms=null){
    if(empty($nbre)){
        if($sms==null){
            $sms="Le Nombre  est Obligatoire";
        }
        return $sms;

       }else{
           return true;
       }
}

?>