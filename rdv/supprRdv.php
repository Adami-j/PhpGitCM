<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>modification patient</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php
	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$idp=$_GET['idp'];
	$dateRdv=$_GET['dateRdv'];
	$heureRdv=$_GET['heureRdv'];
	
	$req = "DELETE FROM consulter WHERE id_patient='$idp'AND dateRdv='$dateRdv' AND heureRdv='$heureRdv'";
	$conn->exec($req);
	header('Location:afficherRdv.php');
  ?>
</head>
	<body>
		
		
		
	</body>
</html>
