	<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>modification patient</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-light">
		
		

		<?php  
		
	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";
	require "..\..\PhpGitCM\menu.php";
		
		$id=$_GET['id'];
		$req = $conn->query("SELECT nom, civilite, prenom FROM medecin WHERE id_Medecin= $id " );
			
		$row=$req->fetch();
		?>





        <div class="container">


            <!-- Start Form -->
            <div>
                <h4>informations médecin</h4>
                <hr>
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

                        <div class="form-group ">
                            <input type="submit"  id="envoi" class="btn btn-outline-success" name="envoi" value="Envoyer"></input>
                            <input type="submit" id="retour" class="btn btn-outline-danger" name="retour" value="Retour"></input>


                        </div>
                    </div>
                </form>

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
                            header('Location: medecin.php');
                        }
                        ?>

</body>
</html>

