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
		
		require "..\..\PhpGitCM\secu\secuConnexion.php";
		require "..\..\PhpGitCM\connect.php";
		
		$id=$_GET['id'];
		$req = $conn->query("SELECT * FROM patient WHERE id_patient= $id " );
		$row=$req->fetch();
		$req = $conn->query("SELECT nom, civilite, prenom, id_Medecin FROM medecin; " );
		?>
	<form action=""  method="POST" >
		Civilité                   :<input type="text" id="selectCivilite" name="selectCivilite" value="<?php echo $row['civilite']; ?>" ></br>
		Nom                        :<input type="text" id="nom" name="nom" value="<?php echo $row['nom']; ?>" ></br>
		Prénom                     :<input type="text" id="prenom" name="prenom"  value="<?php echo $row['prenom']; ?>"></br>
		Adresse                    :<input type="text" id="adresse" name="adresse" value="<?php echo $row['adresse']; ?>"></br>
		Ville                      :<input type="text" id="ville" name="ville"  value="<?php echo $row['ville']; ?>"></br>
		Code postal                :<input type="number" id="cp" name="cp" min="01000" max="98800"  value="<?php echo $row['codePostal']; ?>" ></br>
		Date de naissance          :<input type="date" id="dNaissance" name="dNaissance" min="1902-01-02" max="2021-11-25" value="<?php echo $row['dateNaissance']; ?>"></br>
		Lieu naissance             :<input type="text" id="lNaissance" name="lNaissance" value="<?php echo $row['lieuNaissance']; ?>"></br>
		Téléphone                  :<input type="number" id="tel" name="tel" value="<?php echo $row['telephone']; ?>" ></br>
		Numéro de sécurité sociale :<input type="text" id="numSecu" name="numSecu" value="<?php echo $row['numeroSecu']; ?>"></br>
		Médecin référent           :<select name="medecin"/> <option value="0">Pas de médecin référent</option>
                <?php while($row=$req->fetch()){ ?>
                        <option value="<?php echo $row['id_Medecin']?>"><?php echo $row['nom']?></option>
                <?php }
				$req->closeCursor();?>
                </select></br>
		<input type="submit" id="envoi" name="envoi" value='valider'>
		<input type="submit" id="retour" name="retour" value='annuler'>
		
		
	<?php 
			
	if(isset($_POST['envoi'])){ 		
		if( !empty($_POST['selectCivilite']) and !empty($_POST['nom'])and !empty($_POST['prenom']) 
			and !empty($_POST['adresse']) and !empty($_POST['dNaissance']) and !empty($_POST['ville'])
			and !empty($_POST['cp']) and !empty($_POST['dNaissance']) and !empty($_POST['lNaissance']) and !empty($_POST['tel'])){
	
			
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
					$requette= "UPDATE patient SET numeroSecu ='$numSecu',nom='$nom',prenom='$prenom',telephone='$telephone',adresse='$adresse',ville='$ville',codePostal='$codePostal',dateNaissance='$dNaissance',lieuNaissance='$lieuNaissance',civilite='$civilite' WHERE id_patient= $id";
					$conn->exec($requette);
					
					$idm=$row['id_Medecin'];
					$test =$conn->prepare("INSERT INTO référent(id_patient,O_N, Id_Medecin) VALUES (?,?,?);");
					$test->execute('48', '1' , '11');
					header('Location:patient.php');
				
				
			}
	}
	if(isset($_POST['retour'])){
		header('Location:patient.php');
	}
		
			
		
		?>
	</form>
</body>
</html>

