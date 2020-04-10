<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
<?php
require_once("./helpers/fonctions.php");
require_once("./controllers/base.php");
$errors=[];
$resultat="";
    if(isset($_POST['btn_submit'])){
        //Alternances
 //1-Champs vides
        define("NBRE1","nbre1");
        define("NBRE2","nbre2");
        //PI=3.14
        define('PI',3.14);

        $errors[]=isEmpty($_POST[NBRE1]);
        $errors[]=isEmpty($_POST[NBRE2],"Nombre2 Obligatoire");
        $errors[]=isEmpty($_POST['op'],"Veuillez Selectionner un Operateur");
        //2-Pas Numerique
        $errors[]=isNumeric($_POST[NBRE1]);
        $errors[]=isNumeric($_POST[NBRE2]);
        //Nominal
        if(count($errors)==0){
            $nbre1=$_POST[NBRE1];
            $nbre2=$_POST[NBRE2];
            $op=$_POST['op'];
           $resultat=calculatrice($nbre1,$nbre2,$op);

        }



    }else{
        $errors[]="Veuillez cliquer sur le Bouton";
    }
?>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Boottrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="card m-5">

      <div class="card-body">
          <h4 class="card-title text-center">Calculatice</h4>
          <p class="card-text ">
                <div class="col-3"></div>
                <div class="col-6 pl-5">
                <form action="" method="post">

                        <div class="form-group">
                        <label for="">Nombre1</label>
                        <input type="text" class="form-control" name="nbre1" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group">
                        <label for="">Nombre2</label>
                        <input type="text" class="form-control" name="nbre2" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                        <label for="">Operateur</label>
                        <select class="form-control" name="op" id="">
                            <option value="">Selectionner un Operateur</option>
                            <option value="+">Addition</option>
                            <option value="/">Division</option>
                        </select>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" value="envoie" name="btn_submit" class="btn btn-primary float-right">Calculer</button>
                            </div>
                        </div>

                        </form>

                </div>
                <div class="col-3"></div>
          </p>
      </div>
  </div>

<div class="card text-left ml-5">

  <div class="card-body">
    <h4 class="card-title">Resultat:<?=$resultat;?> </h4>

  </div>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>