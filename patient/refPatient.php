<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>modification patient</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php
	require "secuConnexion.php";
	require "connect.php";
	$id=$_GET['id'];
	
	$req = "DELETE FROM patient WHERE id_patient='$id'";
	
	header('Location:patient.php');
	
  ?>
</head>
	<body>
		
		
		
	</body>
</html>
