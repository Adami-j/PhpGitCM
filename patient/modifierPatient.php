<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Modifier le patient</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php require "..\..\PhpGitCM\menu.php"; ?>
</head>

<h3 class="page-header text-center apie_m_cga">Modifier le patient</h3>
<hr>
<form >


		<?php  
		
		require "..\..\PhpGitCM\secu\secuConnexion.php";
		require "..\..\PhpGitCM\connect.php";
		
		$id=$_GET['id'];
		$req = $conn->query("SELECT * FROM patient WHERE id_patient= $id " );
		$row=$req->fetch();

		?>








</form>

	<?php 
if(isset($_POST['envoi']) ){	
	if( !empty($_POST['selectCivilite']) and !empty($_POST['nom'])and !empty($_POST['prenom'])
            and !empty($_POST['adresse']) and !empty($_POST['dNaissance']) and !empty($_POST['ville'])
            and !empty($_POST['cp']) and !empty($_POST['dNaissance']) and !empty($_POST['lNaissance']) and !empty($_POST['tel']) and !empty($_POST['numSecu'])) {
	
			
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
                    $check = $conn->query("SELECT count(*) as nb from patient where patient.NumeroSecu = '".$_POST['numSecu']."' and patient.id_patient != $id ");
                $doubleSecu = $check->fetch();
                if($doubleSecu['nb'] >= 1){
                echo "<script>alert(\"Un patient utilise déjà ce numéro de sécurité sociale.\")</script>";
            }else{
                $requette= "UPDATE patient SET numeroSecu ='$numSecu',nom='$nom',prenom='$prenom',telephone='$telephone',adresse='$adresse',ville='$ville',codePostal='$codePostal',dateNaissance='$dNaissance',lieuNaissance='$lieuNaissance',civilite='$civilite' WHERE id_patient= $id";
                $conn->exec($requette);

                echo "<meta http-equiv='refresh' content='0'>";
                header("Location: patient.php");
            }

        }else{
            echo "<script>alert(\"Veuillez remplir tous les champs prévus pour la création du patient.\")</script>";
        }
}
			
	if(isset($_POST['retour'])){
		header('Location:patient.php');
	}
		?>
	</form>

        <title>Modifier patient</title>
        </head>

        <body class="bg-light">
        <div class="container">


            <!-- Start Form -->
            <div>
                <h4>informations patient</h4>
            </div>

            <div class="needs-validation" novalidate>

                <form action=""  method="POST" >

                    <select name="selectCivilite"/>
                    <?php if($row['civilite']=='Monsieur'){
                             echo "<option value='Monsieur'>Monsieur</option>  <option value='Madame'>Madame</option></select></br>";

                    }else{
                        echo "<option value='Madame'>Madame</option>
                        <option value='Monsieur'>Monsieur</option></select></br>"; }
                    ?>



                <div class="row">

                    <div class="form-group col-md-6">

                        <label for="nom">Nom</label>

                        <input type="text" id="nom" name="nom" class="form-control "value="<?php echo $row['nom']; ?>" >

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control " value="<?php echo $row['prenom']; ?>">
                    </div>




                    <div class="col-md-12 mb-3">
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="form-control "value="<?php echo $row['adresse']; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="ville">Ville</label>
                        <input type="text" id="ville" name="ville" class="form-control" value="<?php echo $row['ville']; ?>">

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="cp">Code postal</label>
                        <input type="number" id="cp" name="cp" class="form-control "min="01000" max="98800"  value="<?php echo $row['codePostal']; ?>" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dNaissance">Date de naissance</label>
                        <input type="date" id="dNaissance"class="form-control " name="dNaissance" min="1902-01-02" max="2021-11-25" value="<?php echo $row['dateNaissance']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lNaissance">Lieu de naissance</label>
                        <input type="text" id="lNaissance" class="form-control "name="lNaissance" value="<?php echo $row['lieuNaissance']; ?>">

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tel">Téléphone</label>
                        <input type="number" id="tel" class="form-control "name="tel" value="<?php echo $row['telephone']; ?>" >

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="numSecu">Numéro de sécurité sociale</label>
                        <input type="text" id="numSecu" class="form-control "name="numSecu" value="<?php echo $row['NumeroSecu']; ?>">

                    </div>

                    <div class="form-group ">
                        <input type="submit"  id="envoi" class="btn btn-outline-success" name="envoi" value="Envoyer"></input>
                        <input type="submit" id="retour" class="btn btn-outline-danger" name="retour" value="Retour"></input>


                    </div>
                </div>
                </div>
            </form>
            </div>

        </div>



</body>
</html>

