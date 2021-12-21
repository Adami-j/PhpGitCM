
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

function ajout(){

    require "..\..\PhpGitCM\connect.php";
    $idM = $_POST['id_Medecin'];
    $idP = $_POST['pat'];
    $drdv = $_POST['drdv'];
    $hrdv = $_POST['horaire'];
    $duree = $_POST['duree'];
    $sqlEx = "SELECT count(*) as existance from consulter WHERE $idM=Id_Medecin AND '$drdv'=dateRdv and $hrdv=heureRdv ;";
    var_dump($sqlEx);
    $result = $conn->query($sqlEx);
    $res= $result['existance'];
    if($res=1){
        echo "rdv déjà pris veuillez recommencer ";

    }else{$sql = "INSERT INTO `consulter`(`id_patient`, `dateRdv`, `heureRdv`, `Id_Medecin`, `duree`) VALUES ('$idP','$drdv','$hrdv','$idM','$duree')";
        $conn->exec($sql);


        header("Location : afficherRdv.php");}


}


if(isset($_POST['valider']) and isset($_POST['drdv']) ) {


    ajout();


}
if (isset($_POST['retour'])) {
    header("Location: ..\..\PhpGitCM\\rdv\afficherRdv.php");
}
 
?>

<form  method="POST">
    <input type="submit" name="retour"  value="retour"/>
</form>
</head>
<body>
<form method="POST">
	<input type="date" id="start" name="drdv" value="" min="<?php date('m-d-Y');?>">

	  <select name="horaire">
          <?php  $i=7;
          while($i<20){?>
		<option value="<?php echo $i;?>:00"><?php echo $i;?>:00</option>
          <option value="<?php echo $i;?>:30"><?php echo $i;?>:30</option>
          <?php $i=$i+1; }?>
	  </select>



              <select name="id_Medecin">
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

    <select name="duree">
        <option value="10:00">
            10
        </option>
        <option value="20:00">
            20
        </option>
        <option value="30:00">
            30
        </option>
    </select> 

        <select name="pat">
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


    <input type="submit" id="valider" name="valider">
	</form>
</body>
</html>