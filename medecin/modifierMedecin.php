<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>modification patient</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
		
		

		<?php  
		
		require "C:\UwAmp\www\PhpGitCM\secu/secuConnexion.php";
		require "C:\UwAmp\www\PhpGitCM\connect.php";
		
		$id=$_GET['id'];
		$req = $conn->query("SELECT nom, civilite, prenom FROM medecin WHERE id_Medecin= $id " );
			
		$row=$req->fetch();
		?>
	<form action=""  method="POST" >
		Civilité                   :<input type="text" id="selectCivilite" name="selectCivilite" value="<?php echo $row['civilite']; ?>" ></br>
		Nom                        :<input type="text" id="nom" name="nom" value="<?php echo $row['nom']; ?>" ></br>
		Prénom                     :<input type="text" id="prenom" name="prenom"  value="<?php echo $row['prenom']; ?>"></br>
		
		<input type="submit" id="envoi" name="envoi" value='valider'>
		<input type="submit" id="retour" name="retour" value='annuler'>
		
		
	<?php 
			
	if(isset($_POST['envoi'])){ 		
		if( !empty($_POST['selectCivilite']) and !empty($_POST['nom'])and !empty($_POST['prenom']) ){
	
			
					$nom = $_POST['nom'];
					$prenom=$_POST['prenom'];
					$civilite=$_POST['selectCivilite'];
					$requette= "UPDATE medecin SET civilite ='$civilite',nom='$nom',prenom='$prenom' WHERE id_Medecin='$id'";
					$conn->exec($requette);
					
					header('Location:medecin.php');
				
				
			}
	}
	if(isset($_POST['retour'])){
		header('Location:medecin.php');
	}
	
		
		
		
		?>
	</form>
</body>
</html>

