
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title class="titrePage">Connexion au service</title>
	<link rel="stylesheet" href="style.css">
</head>

<?php
	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";

if(isset($_POST['ajout'])){
	header('Location:ajoutMedecin.php');
}
if(isset($_POST['retour'])){
	header('Location:..\..\PhpGitCM/adminGestion.php');
}
?>


<body class="p-3 mb-2 bg-info text-dark">
	<h3 class="nomPop">Gestion des médecins</h3>
	
	<form action="" method="POST">
	
	<input type="submit" name="retour"  value="retour"/>
	<input type="submit" name="ajout"  value="ajout"/>
	<table class="container">
  <thead  class="thead-light">
    <tr >
      <th scope="col">id</th>
	  <th scope="col">civilité</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      
    </tr>
  </thead>
  
  <?php 
		
		$donnees=$conn->query("SELECT nom, prenom, civilite, id_Medecin FROM medecin");
		while ($exec = $donnees->fetch()){
			
	?>		
	
	<tbody >
		<tr>
		  <th scope=row><?php echo $exec['id_Medecin'];?> </th>
		  <td><?php echo $exec['civilite'];?></td>
		  <td><?php echo $exec['nom'];?></td>
		  <td><?php echo $exec['prenom'];?></td>
		  
		  <td><a href="modifierMedecin.php?id=<?php echo $exec['id_Medecin'];?>">modifier</a></td>
		  <td><a href="supprMedecin.php?id=<?php echo $exec['id_Medecin'];?>">supprimer</a></td>
		   <td><a href="refMedecin.php?id=<?php echo $exec['id_Medecin'];?>">medecin référent </a></td>
		</tr>
			
	  </tbody>
	
	
	
	
	<?php  } ?>
  
</table>

	</form>
	

</body>
</html>
