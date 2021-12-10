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
 
?>


<?php 



	  $sql="INSERT INTO `consulter`(`id_patient`, `dateRdv`, `heureRdv`, `Id_Medecin`, `duree`) VALUES ('2','2021-12-17','16:00','2','');";
	  $conn->exec($sql);
	  ?>

</head>
<body><form method="POST">
	<input type="date" id="start" name="trip-start" value= min="2018-01-01" max="2018-12-31">
>
	  <select>
		<option></option>
	  <select>
	</form>
</body>
</html>