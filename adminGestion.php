<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<title class="titrePage">Gestion admin</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<?php

require "secu/secuConnexion.php";


?>

<body>
	

	

<ul class="nav nav-pills nav-justified">
    <li class="nav-item">
        <a class="nav-link active" href="patient/patient.php"> patient</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="medecin/medecin.php"> medecin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="rdv/afficherRdv.php"> rdv</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="stats/stats.php"> stats</a>
    </li>

    <form method="POST">
        <div class="form-group">
            <button type="submit" name="deco"  class="btn btn-primary" value="Deconnexion" >Deconnexion</button>
        </div>
    </form>
</ul>
</body>
</html>
