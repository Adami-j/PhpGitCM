<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Attribuer medecin référent</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body >			
	<form id="f1" method="POST">
		<input type="submit" name="retour" value="retour">
		
	</form>
		<?php 
		
			if(isset($_POST['retour'])){
				header('Location: patient.php');
			}
		
	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";
		
		if(!isset($_SESSION['id'])) {
			$_SESSION['id'] = $_GET['id'];
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
	<?php while($row=$req->fetch()){ ?>
	<tbody >
		<tr>
			<th scope=row><?php echo $row['id_Medecin'];?> </th>
			<td><?php echo $row['civilite'];?></td>
			  <td><?php echo $row['nom'];?></td>
			  <td><?php echo $row['prenom'];?></td>
		  
		   <td>	<a href="modifRef.php?idd= <?php echo $row['id_Medecin']; ?> & modifRef.php?id= <?php $_GET['id'] ?> ">mdo</a></td>
		  </tr>
	
	  </tbody>
	<?php  } 
		
			if(isset($_GET['id'])and isset($_GET['idd'])){
				if(!empty($_GET['id'])and !empty($_GET['idd']))
					//condition pour O_N différent de 1
						$idp=$_GET['id'];
						$idm=$_GET['idd'];
						$req = $conn->exec("INSERT INTO référent(id_patient,O_N,id_Medecin) VALUES('$idp','1','$idm');");
						
						header('Location: patient.php');
			}
		
	?>

	
		
		
		
		
		
	
</body>
</html>

