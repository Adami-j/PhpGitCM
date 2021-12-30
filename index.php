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
	 <link rel="stylesheet" href="style.css">
</head>

<body>
<style>

</style>


<div class="container">
    <h1 class="page-header text-center apie_m_cga"> Cabinet medical</h1>
    <hr>
    <form action="" method="POST" >
    <div class="row justify-content-center ">
        <div class="form-group col-md-3 col-md-offset-7 align-center text-center" >
            <br>
            <input type="text" name="login" value="" placeholder="Login" class="form-control mx-sm-3 text-center">
            <br>
            <input type="password" name="password" value="" placeholder="password" class="form-control mx-sm-3 text-center">
            <br>
            <button type="submit" name="envoyer"  value="Se connecter" class="btn btn-primary btn-lg">Login</button>
            <?php
            if(!empty($errorMessage)) {
                echo $errorMessage . ", veuillez recommencer";
            }
            ?>
        </div>
    </div>
    <br>
</div>

</body>
</html>
