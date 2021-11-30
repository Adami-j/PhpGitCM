<?php

require("connect.php");
$errorMessage = '';
require("recUser.php");
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
