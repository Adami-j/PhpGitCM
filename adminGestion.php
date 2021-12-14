<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<title class="titrePage">Connexion au service</title>
	<link rel="stylesheet" href="style.css">
	
	
</head>
<?php

require "secu/secuConnexion.php";
echo "Bonjour ".$_SESSION['login']." il est actuellement ";
date_default_timezone_set('EUROPE/Paris');
$date=date("H:i");
	echo $date;


if(isset($_POST['patient'])){
	header('Location:patient/patient.php');
}
if(isset($_POST['medecin'])){
	header('Location:medecin/medecin.php');
}
if(isset($_POST['rdv'])){
	header('Location: rdv/afficherRdv.php');
}

if(isset($_POST['stat'])){
	header('Location: stats/stats.php');
}
?>

<body>
	<h3 class="nomPop">Gestion administrateur</h3>
	
	<form action="" method="POST">

	<input type="submit" name="deco"  value="Deconnexion"/>
	<input type="submit" name="patient"  value="Patient"/>
	<input type="submit" name="medecin"  value="Medecin"/>
	<input type="submit" name="rdv"  value="Rdv"/>
	<input type="submit" name="stat"  value="Statistiques"/>
	</form>
	

</body>
</html>
