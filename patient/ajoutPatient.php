


<?php

require "..\..\PhpGitCM\secu\secuConnexion.php";
require "..\..\PhpGitCM\connect.php";
require "patientPHP.php";
	

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
				Civilité                   :</br><select name="selectCivilite"/> 
											<option value="Monsieur">Monsieur</option>
											<option value="Madame">Madame</option></select></br>
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