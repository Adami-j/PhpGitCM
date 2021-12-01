<?php

require "..\..\PhpGitCM\secu\secuConnexion.php";
    require "..\..\PhpGitCM\connect.php";

if(isset($_POST['retour'])){
	header("Location: ..\..\PhpGitCM\adminGestion.php");
}

if(isset($_POST['ajout'])){
	header("Location: ajouterRdv.php");
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
	<table>
	<thead  class="table">
    <tr >
      <th scope="col">idPatient</th>
      <th scope="col">dateRdv</th>
      <th scope="col">HeureRdv</th>
      <th scope="col">id_Medecin</th>
	  <th scope="col">duree</th>
    </tr>
  </thead>
   <?php
		$sql= "SELECT id_patient, dateRdv, HeureRdv, id_Medecin, duree from consulter ORDER BY dateRdv DESC;";
		$req = $conn ->query($sql);
		while ($row= $req ->fetch()){
		?>	
        <tbody>
          <tr >
            <td><?php echo $row['id_patient'];?></td>
            <td><?php echo $row['dateRdv'];?></td>
            <td><?php echo $row['HeureRdv'];?></td>
			<td><?php echo $row['id_Medecin'];?></td>
			<td><?php echo $row['duree'];?></td>
			<td><a href="modifierRdv.php?dateRdv=<?php echo $row['dateRdv'];?>&amp;idp=<?php echo $row['id_patient'];?>&amp;heureRdv=<?php echo $row['HeureRdv'];?>">modifier</a></td>
		  <td><a href="supprRdv.php?dateRdv=<?php echo $row['dateRdv'];?>&amp;idp=<?php echo $row['id_patient'];?>&amp;heureRdv=<?php echo $row['HeureRdv'];?>">supprimer</a></td>
		   
		   
          </tr>
        </tbody>
		<?php }?>
      </table>
	
</body>
</html>
