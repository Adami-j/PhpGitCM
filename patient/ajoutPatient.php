


<?php

require "C:\UwAmp\www\PhpGitCM\secu/secuConnexion.php";
require "C:\UwAmp\www\PhpGitCM\connect.php";
	
	
if(isset($_POST['valider']) ){
	if( isset($_POST['selectCivilite']) and isset($_POST['nom'])and isset($_POST['prenom']) 
		and isset($_POST['adresse']) and isset($_POST['dNaissance']) and isset($_POST['ville'])
		and isset($_POST['cp']) and isset($_POST['dNaissance']) and isset($_POST['lNaissance']) and isset($_POST['tel'])){
			$nom = $_POST['nom'];
			$prenom=$_POST['prenom'];
			$adresse=$_POST['adresse'];
			$ville=$_POST['ville'];
			$codePostal=$_POST['cp'];
			$dNaissance=$_POST['dNaissance'];
			$lieuNaissance=$_POST['lNaissance'];
			$telephone=$_POST['tel'];
			$numSecu=$_POST['numSecu'];
			$civilite=$_POST['selectCivilite'];
			
		
		
		if( !empty($_POST['selectCivilite']) and !empty($_POST['nom'])and !empty($_POST['prenom']) 
			and !empty($_POST['adresse']) and !empty($_POST['dNaissance']) and !empty($_POST['ville'])
			and !empty($_POST['cp']) and !empty($_POST['dNaissance']) and !empty($_POST['lNaissance']) and !empty($_POST['tel'])){
	
			$requette= "INSERT INTO patient(numeroSecu,nom,prenom,telephone,adresse,ville,codePostal,dateNaissance,lieuNaissance,civilite) VALUES('$numSecu','$nom','$prenom','$telephone','$adresse','$ville','$codePostal','$dNaissance','$lieuNaissance','$civilite')";
			$conn->exec($requette);
			
			echo "<meta http-equiv='refresh' content='0'>";
			header("Location: medecin.php");
			
			
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
		<h1 id="usagerTitre">Saisie des informations de l'usager</h1></br>
			<form action="" method="POST" >
				Civilité                   :<input type="text" id="selectCivilite" name="selectCivilite" ></br>
				Nom                        :<input type="text" id="nom" name="nom" ></br>
				Prénom                     :<input type="text" id="prenom" name="prenom" ></br>
				Adresse                    :<input type="text" id="adresse" name="adresse" ></br>
				Ville                      :<input type="text" id="ville" name="ville"></br>
				Code postal                :<input type="number" id="cp" name="cp" min="01000" max="98800"></br>
				Date de naissance          :<input type="date" id="dNaissance" name="dNaissance" min="1902-01-02" max="2021-11-25"></br>
				Lieu naissance             :<input type="text" id="lNaissance" name="lNaissance"></br>
				Téléphone                  :<input type="number" id="tel" name="tel" ></br>
				Numéro de sécurité sociale :<input type="text" id="numSecu" name="numSecu" ></br>
				<input type="submit" id="valider" name="valider">
			</form>
			<a href="patient.php"><button id="retour">annuler</button></a>
					
					
						
   </body>  
</html>