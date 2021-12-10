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
	
	date_default_timezone_set('Europe/Paris');

    if(isset($_POST['valider']) and isset($_POST['id_Medecin']) and  isset($_POST['id_patient']) and  isset($_POST['drdv']) and  isset($_POST['horaire'])){
        $sql="INSERT INTO `consulter`(`id_patient`, `dateRdv`, `heureRdv`, `Id_Medecin`, `duree`) VALUES ()";
        $idM=$_POST['id_Medecin'];
        $idP=$_POST['id_patient'];
        $drdv=$_POST['drdv'];
        $hrdv=$_POST['horaire'];
        $conn->exec($sql);
    }
 
?>




</head>
<body><form method="POST">
	<input type="date" id="start" name="drdv" value= min="2018-01-01" max="2018-12-31">

	  <select name="horaire">
          <?php  $i=7;
          while($i<20){?>
		<option value="<?php echo $i;?>:00"><?php echo $i;?>:00</option>
          <option value="<?php echo $i;?>:30"><?php echo $i;?>:30</option>
          <?php $i=$i+1; }?>
	  </select>

          <?php

          $donneesM=$conn->query("SELECT nom, prenom , id_Medecin FROM medecin");
          while ($exec = $donneesM->fetch() ){

              ?>

              <select>
                  <option value="<?php echo $exec['id_Medecin']?>">
                      <?php echo $exec['nom']." ".$exec['prenom']?>
                  </option>
              </select>
    <?php
    }

    ?>
    <select>
        <option value="10">
            10
        </option>
        <option value="20">
            20
        </option>
        <option value="30">
            30
        </option>
    </select>
    <?php


    $donneesP=$conn->query("SELECT nom, prenom, id_patient FROM patient");
    while ($execP = $donneesP->fetch() ){

        ?>

        <select>
                  <option value="<?php echo $execP['id_patient']?>">
                      <?php echo $execP['nom']." ".$execP['prenom']?>
                  </option>
              </select>

              <?php
          }

          ?>
    <input type="submit" id="valider" name="valider">
	</form>
</body>
</html>