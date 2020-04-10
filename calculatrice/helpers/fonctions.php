<?php
//Tester si un nombre est vide
function  isEmpty($nbre,$sms=null){
    if(empty($nbre)){
        if($sms==null){
            $sms="Le Nombre  est Obligatoire";
        }
        return $sms;

       }
}
function  isNumeric($nbre,$sms=null){
    if(is_numeric($nbre)){
        if($sms==null){
            $sms="Le Nombre  doit etre un Numerique";
        }
        return $sms;

       }
}

?>