


<?php

	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";
	require "..\..\PhpGitCM\menu.php";
	
	
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
					echo "<script>alert(\"Ce médecin existe déjà.\")</script>";
				}
			}else{
			echo "<script>alert(\"Veuillez remplir tous les champs prévus pour la création du médecin.\")</script>";
		}
	}
}

if (isset($_POST['retour'])) {
    header('Location:medecin.php');
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

        <div class="container">


            <!-- Start Form -->
            <div>
                <h4>informations médecin</h4>
                <hr>
            </div>

            <div class="needs-validation" novalidate>

                <form action=""  method="POST" >

                    <select name="selectCivilite"/>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option></select>



                    <div class="row">

                        <div class="form-group col-md-6">

                            <label for="nom">Nom</label>

                            <input type="text" id="nom" name="nom" class="form-control "value="" >

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control " value="">
                        </div>

                        <div class="form-group ">
                            <input type="submit"  id="envoi" class="btn btn-outline-success" name="valider" value="Envoyer"></input>
                            <input type="submit" id="retour" class="btn btn-outline-danger" name="retour" value="Retour"></input>


                        </div>


                    </div>
                </form>
            </div>
        </div>


   </body>  
</html>