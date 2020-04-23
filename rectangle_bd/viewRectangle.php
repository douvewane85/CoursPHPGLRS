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


   ///session_destroy();

    if( isset($_POST['btn_submit'])){

        if($_POST['btn_submit']==="calcul"){

        $validator=new Validator();

        $longueur=$_POST['longueur'];
        $largeur=$_POST['largeur'];

          $validator->is_empty($longueur,'longueur');
          $validator->is_empty($largeur,'largeur');
         
         if($validator->is_valid()){
            $validator->compare($longueur,$largeur,'longueur','largeur');
            if($validator->is_valid()){
                    /* 
                     $rectangle=new Rectangle();
                     $rectangle->setLongueur($longueur);
                     $rectangle->setLargeur($largeur);
                     */   
                      $rectangle=new Rectangle($longueur,$largeur);
                      $id= $_SESSION['id'];
                      $id++;
                      $_SESSION["Resultat".$id]=$rectangle;
                    
                      $_SESSION['id']=$id;

            }
         }
         $errors=$validator->getErrors();

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
                foreach ($_SESSION as $key=> $rectangle) {
                    if($key!=="id")  {
            ?>
                <tr>
                    <td scope="row"><?=$rectangle->demiPerimetre()?></td>
                    <td><?=$rectangle->perimetre()?></td>
                    <td><?=$rectangle->surface()?></td>
                    <td><?=$rectangle->diagonale()?></td>
                </tr>

                <?php
                }
                }
                ?>

            </tbody>
        </table>

    <?php
       }
 ?>
