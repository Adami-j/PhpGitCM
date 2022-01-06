<?php
require "..\..\PhpGitCM\menu.php";
require "../../PhpGitCM/style.html";?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title class="titrePage">Gestion des médecins</title>
	<link rel="stylesheet" href="style.css">

</head>

<?php
	require "..\..\PhpGitCM\secu\secuConnexion.php";
	require "..\..\PhpGitCM\connect.php";


if(isset($_POST['ajout'])){
	header('Location:ajoutMedecin.php');
}

?>


<body>

    <h3 class="page-header text-center apie_m_cga" style="color : white">Gestion des médecins</h3>
    <hr>
    <div class="boostrap-table">

        <div class="container">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-14">
                    <form action="" method="POST">
                        <input type="submit" name="ajout"  value="ajout d'un medecin" class="btn-dark"/>
                    </form>
                    <table class="table table-striped table-bordered">
                        <thead class="text-center table-dark">
                        <tr>
                            <th scope="col">Civilité</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">modifier</th>
                            <th scope="col">supprimer</th>



                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $donnees=$conn->query("SELECT civilite, nom, prenom,id_Medecin FROM medecin");
                        while ($exec = $donnees->fetch() ){

                        ?>
                        <tr class="table-light">
                            <td><?php echo $exec['civilite'];?></td>
                            <td><?php echo $exec['nom'];?></td>
                            <td><?php echo $exec['prenom'];?></td>
                            <td><a href="modifierMedecin.php?id=<?php echo $exec['id_Medecin'];?>">modifier</a></td>
                            <td><a href="supprMedecin.php?id=<?php echo $exec['id_Medecin'];?>">supprimer</a></td>
                            <?php }?>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-xl-2"></div>
            </div>
        </div>
    </div>


</body>
</html>
