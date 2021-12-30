


<?php

require "..\..\PhpGitCM\secu\secuConnexion.php";
require "..\..\PhpGitCM\connect.php";
require "patientPHP.php";

?>

		?>

<!DOCTYPE html>  
<html>  

 <html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	  <title>Cabinet médical des associés du Tarn</title>
		  <link rel="stylesheet" href="style.css">

	</head>

	<body class="bg-light">
    <div class="text-center">
        <h4>Ajouter patient</h4>
        <hr>
    </div>
        <div class="container">


            <!-- Start Form -->


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

                            <input type="text" id="nom" name="nom" class="form-control "value="" >

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control " value="">
                        </div>




                        <div class="col-md-12 mb-3">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control "value="">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ville">Ville</label>
                            <input type="text" id="ville" name="ville" class="form-control" value="">

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="cp">Code postal</label>
                            <input type="number" id="cp" name="cp" class="form-control "min="01000" max="98800"  value="" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dNaissance">Date de naissance</label>
                            <input type="date" id="dNaissance"class="form-control " name="dNaissance" min="1902-01-02" max="2021-11-25" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lNaissance">Lieu de naissance</label>
                            <input type="text" id="lNaissance" class="form-control "name="lNaissance" value="">

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel">Téléphone</label>
                            <input type="number" id="tel" class="form-control "name="tel" value="" >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numSecu">Numéro de sécurité sociale</label>
                            <input type="text" id="numSecu" class="form-control "name="numSecu" value="">

                        </div>

                        <div class="form-group ">
                            <input type="submit"  id="envoi" class="btn btn-outline-success" name="valider" value="Envoyer">
                            <input type="submit" id="retour" class="btn btn-outline-danger" name="retour" value="Retour" >


                        </div>
                    </div>
            </div>
            </form>

        </div>

        </div>
   </body>



</html>