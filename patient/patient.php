<?php

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title class="titrePage">Gestion des patients</title>


</head>

<?php



if(isset($_POST['ajout'])){
	header('Location:ajoutPatient.php');
}





?>


<body >

	<h3 class="page-header text-center apie_m_cga" style="color: white">Gestion des patients</h3>
	<hr>

    <div class="boostrap-table">

        <div class="container">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-17">

                    <form action="" method="POST">
                        <input type="submit" name="ajout"  value="ajout d'un patient" class="btn-dark"/>
                    </form>

                    <table class="table table-striped table-bordered">
                        <thead class="text-center table-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Civilité</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Numéro de sécu</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier ref</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $donnees=$conn->query("SELECT civilite, nom, prenom, numeroSecu, id_patient FROM patient");
                        while ($exec = $donnees->fetch() ){

                        ?>
                        <tr class="table-light">
                            <th scope=row><?php echo $exec['id_patient'];?> </th>
                            <td><?php echo $exec['civilite'];?></td>
                            <td><?php echo $exec['nom'];?></td>
                            <td><?php echo $exec['prenom'];?></td>
                            <td><?php echo $exec['numeroSecu'];?></td>
                            <td><a href="modifierPatient.php?id=<?php echo $exec['id_patient'];?>">modifier</a></td>
                            <td><a href="supprPatient.php?id=<?php echo $exec['id_patient'];?>">supprimer</a></td>
                            <td><a href="mdrf.php?id=<?php echo $exec['id_patient'];?>">modifref</a></td>

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
									