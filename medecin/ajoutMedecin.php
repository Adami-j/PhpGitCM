


<?php

	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";
	
	
if(isset($_POST['valider']) ){
	if( isset($_POST['selectCivilite']) and isset($_POST['nom'])and isset($_POST['prenom']) ){
			$nom = $_POST['nom'];
			$prenom=$_POST['prenom'];
			$civilite=$_POST['selectCivilite'];
			
		
		
		if( !empty($_POST['selectCivilite']) and !empty($_POST['nom'])and !empty($_POST['prenom'])){
	
			
			
				$result = $conn->query("SELECT COUNT(*) as total FROM medecin WHERE nom = '$nom' AND prenom='$prenom' AND civilite='$civilite';");
				
				$donnees = $result->fetch();
				$result->closeCursor();
				$id =  $donnees['total'];
				if($id<1){
					$requette= "INSERT INTO medecin(civilite,nom,prenom) VALUES('$civilite','$nom','$prenom')";
					$conn->exec($requette);
					echo "<meta http-equiv='refresh' content='0'>";
					header('Location:medecin.php');
					
				}else{
					$errorMessage = 'Ce médecin existe déjà';
				}
			
			
			
			
			
			}
		}
}
		?>

<!DOCTYPE html>  
<html>  

 <html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	  <title>Cabinet médical des associés du Tarn</title>
		  <link rel="stylesheet" href="style.css">
			 <title>Ajouter un patient</title>  
	</head>  
	<body>  
		<h1 id="usagerTitre">Saisie des informations de du médecin</h1></br>
			<form action="" method="POST" >
				Civilité                   :</br><select name="selectCivilite"/> 
											<option value="Monsieur">Monsieur</option>
											<option value="Madame">Madame</option></select></br>
				Nom                        :<input type="text" id="nom" name="nom" ></br>
				Prénom                     :<input type="text" id="prenom" name="prenom" ></br>
				<input type="submit" id="valider" name="valider">
				<?php if(!empty($errorMessage)){
					echo $errorMessage;
				}?>
			</form>
			<a href="medecin.php"><button id="retour">annuler</button></a>
					
					
						
   </body>  
</html>