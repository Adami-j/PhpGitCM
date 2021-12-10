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
<style>

</style>

	<div class="container text-center">
		<h3  id="nomPop" class="titre">Connexion</h3>
		<form action="" method="POST" >
		</br>
		<div  class="form-group">
		<input type="text" name="login" value="" placeholder="Login" class=".flex-item"/>
		</div></br>
		
		<div class="form-group">
			<input type="password" name="password" value="" placeholder="password" class=".flex-item"  />
			
		</div></br>
		<div >
		<input type="submit" name="envoyer"  value="Se connecter" class=".flex-item"/>
            <input type="submit" name="nouveauC"  value="S'inscrire" class=".flex-item"/>
		</div></br>
		</form>
		<?php 
			if(!empty($errorMessage)) {
                echo $errorMessage . ", veuillez recommencer";
            }
		?>
	</div>
</body>
</html>
