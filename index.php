<?php

require("connect.php");
$errorMessage = '';
	
if(!isset($_SESSION['login']) AND !isset($_SESSION['password'])){
	session_start();
	if(isset($_POST['envoyer'])){
		if(isset($_POST['login']) AND isset($_POST['password'])){
			if(!empty($_POST['login']) AND !empty($_POST['password'])){
				$_SESSION['login']= $_POST['login'];
				$_SESSION['password']= $_POST['password'];			
				
				$result = $conn->query("SELECT COUNT(*) as total FROM utilisateurc WHERE login ='".$_SESSION['login']."' AND password='".$_SESSION['password']."';");
				
				$donnees = $result->fetch();
				$result->closeCursor();
				$id =  $donnees['total'];
				if($id==1){
					header('Location:adminGestion.php');
				}else{
					$errorMessage = 'Le login ou le password est erroné';
				}
		}
	}
}
}
?>








<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title class="titrePage">Connexion au service</title>
	// <link rel="stylesheet" href="style.css">
</head>

<body>
	<h3 id="nomPop">Connexion</h3>
	
	<form action="" method="POST" id ="container">
	Login : <input type="text" name="login" value=""/></br>
	Password : <input type="password" name="password" value=""/></br></br>
	<input type="submit" name="envoyer"  value="Se connecter"/>
	
	<?php 
		if(!empty($errorMessage)){
			echo $errorMessage.", veuillez recommencer";
			
		}
	?>

</body>
</html>
