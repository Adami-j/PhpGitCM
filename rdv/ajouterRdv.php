<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
	require "..\..\PhpGitCM\secu\secuConnexion.php";
    require "..\..\PhpGitCM\connect.php";
 
<<<<<<< HEAD
?>


<?php 



	  $sql="INSERT INTO `consulter`(`id_patient`, `dateRdv`, `heureRdv`, `Id_Medecin`, `duree`) VALUES ('2','2021-12-17','16:00','2','');";
	  $conn->exec($sql);
	  ?>

</head>
<body><form method="POST">
	<input type="date" id="start" name="trip-start" value= min="2018-01-01" max="2018-12-31">
>
	  <select>
		<option></option>
	  <select>
	</form>
</body>
=======
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
	
			$sql="INSERT INTO consulter(`Id_Medecin`, `id_patient`, `dateRdv`, `heureRdv`, `duree`) VALUES ();";
	  $conn->exec($sql);
			
			echo "<meta http-equiv='refresh' content='0'>";
			header("Location: afficherRdv.php");
			
			
			}
		}
}

?>


<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	  <title>Cabinet médical des associés du Tarn</title>
		  <link rel="stylesheet" href="style.css">
			 <title>Ajouter un rendez-vous</title>  
	</head>  
	<body>  
		<h1 id="rdvTitre">Saisie du rendez-vous</h1></br>
			<form action="" method="POST" >
				Civilité                   :</br><select name="selectCivilite"/> 
											<option value="Monsieur">Monsieur</option>
											<option value="Madame">Madame</option></select></br>
				Nom                        :<input type="text" id="nom" name="nom" ></br>
				Prénom                     :<input type="text" id="prenom" name="prenom" ></br>
				Adresse                    :<input type="text" id="adresse" name="adresse" ></br>
				Ville                      :<input type="text" id="ville" name="ville"></br>
				Code postal                :<input type="number" id="cp" name="cp" min="01000" max="98800"></br>
				Date du RDV                :<input type="date" id="dRdv" name="dRdv" min="1902-01-02" max="2022-12-31"></br>
				Durée du RDV               :<input type="time" id="durRdv" name="durRdv"></br>
				Durée du RDV               :<input type="time" id="durRdv" name="durRdv"></br>
				<input type="submit" id="valider" name="valider">
			</form>
			<a href="ajouterRdv.php"><button id="retour">annuler</button></a>
					
					
						
   </body>  
>>>>>>> 7a27239d00b43440a3fdf9d17bac0ab6c61f6cf1
</html>