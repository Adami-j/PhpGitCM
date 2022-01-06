<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
    require "..\..\PhpGitCM\secu\secuConnexion.php";
    require "..\..\PhpGitCM\connect.php";
    require "..\..\PhpGitCM\menu.php";
    date_default_timezone_set('Europe/Paris');

    if(isset($_POST['valider'])) {
        # and isset($_POST['id_Medecin']) and  isset($_POST['id_patient']) and  isset($_POST['drdv']) and  isset($_POST['horaire'])
        $idM = $_POST['id_Medecin'];
        $idP = $_POST['pat'];
        $drdv = $_POST['drdv'];
        $hrdv = $_POST['horaire'];
        $duree = $_POST['duree'];
        $sql = "INSERT INTO `consulter`(`id_patient`, `dateRdv`, `heureRdv`, `Id_Medecin`, `duree`) VALUES ('$idP','$drdv','$hrdv','$idM','$duree')";
        $conn->exec($sql);
        var_dump($sql);
    }

    $rechercheRdv = "SELECT * from consulter where  ";
    ?>




</head>
<body>



<div class="needs-validation" novalidate>

    <form action=""  method="POST" >
        <div class="row">

            <div class="form-group col-md-3 mb-3">

                <label for="drdv">Date du rdv</label>

                <input class="form-select" type="date" id="start" name="drdv" value="" min="<?php date('m-d-Y');?>">

            </div>

            <div class="col-md-3 mb-3 ">
                <label for="hrdf">heure du rdv</label>
                <select class="form-select" name="horaire" default="">
                    <?php  $i=7;
                    while($i<20){?>
                        <option value="<?php echo $i;?>:00"><?php echo $i;?>:00</option>
                        <option value="<?php echo $i;?>:30"><?php echo $i;?>:30</option>
                        <?php $i=$i+1; }?>
                </select>

            </div>
            <div class="col-md-3 mb-3 ">
                <label for="duree">durée du rdv</label>
                <select name="duree" class="form-select">
                    <option value="00:10:00">
                        10
                    </option>
                    <option value="00:20:00">
                        20
                    </option>
                    <option value="00:30:00">
                        30
                    </option>
                </select>



            </div>
            <div class="col-md-6 mb-3">
                <label for="prenom">Médecin</label>
                <select class="form-select" name="id_Medecin">
                    <?php

                    $donneesM=$conn->query("SELECT nom, prenom , id_Medecin FROM medecin");
                    while ($exec = $donneesM->fetch() ){

                        ?>
                        <option value="<?php echo $exec['id_Medecin']?>">
                            <?php echo $exec['nom']." ".$exec['prenom']?>
                        </option>
                        <?php
                    }
                    ?>
                </select>


            </div>

            <div class="col-md-6 mb-3">
                <label for="prenom">Patient</label>
                <select class="form-select" name="patient">
                    <?php
                    $donneesP=$conn->query("SELECT nom, prenom, id_patient FROM patient");
                    while ($execP = $donneesP->fetch() ){

                        ?>
                        <option value="<?php echo $execP['id_patient']?>">
                            <?php echo $execP['nom']." ".$execP['prenom']?>
                        </option>
                        <?php
                    }

                    ?>
                </select>

            </div>


            <div class="form-group ">
                <input type="submit"  id="envoi" class="btn btn-outline-success" name="valider" value="Envoyer">
                <input type="submit" id="retour" class="btn btn-outline-danger" name="retour" value="Retour" >


            </div>
        </div>
    </form>
</body>
</html>