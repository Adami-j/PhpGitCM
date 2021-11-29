<?php

require("connect.php");
require("recUser.php");

if(isset($_POST['retour'])){
	header("Location: adminGestion.php");
}

if(isset($_POST['ajout'])){
	header("Location: adminGestion.php");
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
<form action="" method="POST">
	
	<input type="submit" name="retour"  value="retour"/>
	<input type="submit" name="ajout"  value="ajout"/>
<form>
<body class="p-3 mb-2 bg-info text-dark">
	 <h3 id="nomPop">Affichage des rendez vous</h3>
		
	<thead  class="thead-light">
    <tr >
      <th scope="col">NumeroSecu</th>
      <th scope="col">dateRdv</th>
      <th scope="col">HeureRdv</th>
      <th scope="col">id_Medecin</th>
    </tr>
  </thead>
  

	<?php
		$sql= "SELECT NumeroSecu, dateRdv, HeureRdv, id_Medecin from consulter";
		$req = $conn ->query($sql);
		while ($row= $req ->fetch()){
		?>	
	
	<tbody >
		<tr>
			<th scope=row><?php echo $row['NumeroSecu'];?> </th>
		  <td><?php echo $row['dateRdv'];?></td>
		  <td><?php echo $row['HeureRdv'];?></td>
		  <td><?php echo $row['id_Medecin'];?></td>
		  <td><a href="modifierRdv.php?id=<?php echo $exec[''];?>">modifier</a></td>
		  <td><a href="supprRdv.php?id=<?php echo $exec[''];?>">supprimer</a></td>
		   <td><a href="http://localhost/PhpGitCM/patient/modifRef.php?id=<?php echo $exec['id_patient'];?>">medecin référent </a></td>
		</tr>
			
	  </tbody>
		<?php }?>

</body>
</html>
