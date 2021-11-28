<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<title class="titrePage">Connexion au service</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php

require "secu/secuConnexion.php";

if(isset($_POST['patient'])){
	header('Location:patient.php');
}
if(isset($_POST['medecin'])){
	header('Location:index.php');
}
if(isset($_POST['rdv'])){
	header('Location:index.php');
}
?>

<body>
	<h3 class="nomPop">Gestion administrateur</h3>
	
	<form action="" method="POST">
	
	<input type="submit" name="deco"  value="Deconnexion"/>
	<input type="submit" name="patient"  value="Patient"/>
	<input type="submit" name="medecin"  value="Medecin"/>
	<input type="submit" name="rdv"  value="Rdv"/>
	
	</form>
	

</body>
</html>
