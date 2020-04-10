<?php
  function calculatrice($nbre1,$nbre2,$op){

    switch ($op) {
        case '+':
            $resultat="$nbre1+$nbre2=".($nbre1+$nbre2);
            break;
         case '/':
            if($nbre2!=0){
                $resultat="$nbre1/$nbre2=".($nbre1/$nbre2);
            }else{
                $resultat="Divison Impossibe";
            }

                break;
        default:
            # code...
            break;
    }
    return $resultat;
  }
?>