<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Attribuer medecin référent</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="p-3 mb-2 bg-info text-dark">		
		
	<form id="f1" method="POST">
		<input type="submit" name="retour" value="retour">
		
	</form>
		<?php  
		
		require "C:\UwAmp\www\PhpGitCM\secu/secuConnexion.php";
		require "C:\UwAmp\www\PhpGitCM\connect.php";
		
		if (!isset($_SESSION['id'])){
			$_SESSION['id'] =$_GET['id'];
		}
		
	
		
		$req = $conn->query("SELECT nom, civilite, prenom, id_Medecin FROM medecin " );
			
		
		
		?>
	    <table class="container">

		<thead  class="thead-light">
    <tr >
	  <th scope="col">id</th>
      <th scope="col">civilité</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
     
    </tr>
  </thead>
	<?php$row=$req->fetch()?>
	<tbody >
		<tr>
			<th scope=row><?php echo $row['id_Medecin'];?> </th>
			<td><?php echo $row['civilite'];?></td>
			  <td><?php echo $row['nom'];?></td>
			  <td><?php echo $row['prenom'];?></td>
		  
		   <td> 
		
	<a href="modifRef.php/?idd=<?php echo $row['id_Medecin'];?>">mdo</a>
		</td>
		  </tr>
	
	  </tbody>
	

	
		
		
		
		
		
	
</body>
</html>

