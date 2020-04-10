<!--
   1) Saisir la longueur et largeur d'un Rectangle à partir d'un formulaire
         Longueur et Largueur doivent etre numeric(entier,reel)
         Longueur positif
         Largeur positif
         Longueur> Largeur

   2)Traitements=>U.C
      -Caluler le Dp
      -Calculer le P
      -Calculer la S
      -Calculer la Diagonale


      //Premire Heure
         1-Afficher les erreurs
         2-Garder les Bonnes Valeurs et effacer les Mauvaises Valeurs
         3-Session => $_SESSION
            //Ouvrir session_start()
            //Fermer la Session session_destroy()
            // $_SESSION est un tableau Associatif

      //Deuxieme Heure

      //POO en PHP=>Rectangle
         1-Classe(Concrete ou Abstraite ou Interface)
            a)Attribut(Instance ou Classe)
            a)Methode(Instance ou Classe)
         2-Objet

         //Nommination
           Classe => MaClasse
           methode=> maMethode
           attribut=> monattribut

 -->
 <?php
    require_once("validation.php");
    require_once("rectangleController.php");
$errors=[];
$resultat=[];
$longueur="";
$largeur="";

//Ouvrir session_start()
   session_start();
   if(!isset($_SESSION['id'])){
    $_SESSION['id']=0;
   }

   ///session_destroy();

    if( isset($_POST['btn_submit'])){

        if($_POST['btn_submit']==="calcul"){
        $longueur=$_POST['longueur'];
        $largeur=$_POST['largeur'];
         $result=is_empty($longueur);
         if($result!==true){
            $errors['longueur']= $result;

         }

         $result=is_empty($largeur);
         if($result!==true){
            $errors['largeur']= $result;

         }
         if(count($errors)===0){
            $result=compare( $longueur,$largeur);
            if( $result===true){
                      $resultat["demi_perimetre"]=demi_perimetre($longueur,$largeur);
                      $resultat["perimetre"]=perimetre($longueur,$largeur);
                      $resultat["surface"]=surface($longueur,$largeur);
                      $resultat["diagonale"]=diagonale($longueur,$largeur);
                      $id= $_SESSION['id'];
                      $id++;
                      $_SESSION["Resultat".$id]=$resultat;
                      $_SESSION['id']=$id;



            }else{
                $errors=$result;
            }
         }

            if(isset($errors['longueur'])){
                $longueur="";
            }
            if(isset($errors['largeur'])){
                $largeur="";
            }

        }else{
            session_destroy();
        }
    }


 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

         <div class="container mt-5">

         <?php if(isset($errors['all'])){
             $largeur="";
             $longueur="";

         ?>
         <div class="alert alert-danger col-4">
             <strong>Erreur</strong> <?php echo $errors['all'];?>
         </div>
        <?php
        }
        ?>
             <form method="post" action="">
                 <div class="form-group row">
                     <label for="inputName" class="col-sm-1-12 col-form-label">Longueur</label>
                     <div class="col-6 ml-2">
                         <input type="text" class="form-control" name="longueur" value="<?=$longueur?>" id="inputName" placeholder="">
                     </div>
            <?php if(isset($errors['longueur'])){


            ?>
                     <div class="alert alert-danger col-4">
                         <strong>Erreur</strong> <?php echo $errors['longueur'];?>
                     </div>
             <?php
            }
            ?>

                 </div>
                 <div class="form-group row">
                     <label for="inputName" class="col-sm-1-12 col-form-label">Largeur</label>
                     <div class="col-6 ml-3">
                         <input type="text" class="form-control" name="largeur" value="<?=$largeur?>" id="inputName" placeholder="">
                     </div>

                     <?php if(isset($errors['largeur'])){

                    ?>
                    <div class="alert alert-danger col-4">
                        <strong>Erreur</strong> <?=$errors['largeur'];?>
                    </div>
                 <?php
                 }
                ?>
                 </div>

                 <div class="form-group row">
                     <div class="offset-sm-2 col-sm-2">
                         <button type="submit" name="btn_submit" value="calcul" class="btn btn-primary">Calculer</button>
                     </div>
                     <div class="col-sm-2">
                         <button type="submit" name="btn_submit" value="reinitialisation" class="btn btn-secondary">Reinitialiser</button>
                     </div>
                 </div>
             </form>
         </div>
<?php
      if( isset($_POST['btn_submit']) && $_POST['btn_submit']==="calcul" && count($errors)===0) {
?>
        <table class="table container table-bordered">
            <thead>
                <tr>
                    <th>Demi-Perimetre</th>
                    <th>Preimetre</th>
                    <th>Surface</th>
                    <th>Diagonale</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($_SESSION as  $resultat) {

            ?>
                <tr>
                    <td scope="row"><?=$resultat["demi_perimetre"]?></td>
                    <td><?=$resultat["perimetre"]?></td>
                    <td><?=$resultat["surface"]?></td>
                    <td><?=$resultat["diagonale"]?></td>
                </tr>

                <?php
                }
                ?>

            </tbody>
        </table>

    <?php
       }
 ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>