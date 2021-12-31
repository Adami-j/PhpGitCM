<?php

require "..\..\PhpGitCM\secu\secuConnexion.php";
    require "..\..\PhpGitCM\connect.php";


if(isset($_POST['ajout'])){
	header("Location: ajouterRdv1.php");
}
?>
<?php
require "..\..\PhpGitCM\menu.php";?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title class="titrePage">Connexion au service</title>
	<link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">

     <h3 class="page-header text-center apie_m_cga">Gestion des rdv</h3>
     <hr>
     <div class="boostrap-table">

         <div class="container">
             <div class="row">
                 <div class="col-xl-2"></div>
                 <div class="col-xl-14">
                     <form action="" method="POST">
                         <input type="submit" name="ajout"  value="ajout d'un rdv" class="btn-dark"/>
                     </form>
                     <table class="table table-striped table-bordered">
                         <thead class="text-center table-dark">
                         <tr>
                             <th scope="col">Nom patient</th>
                             <th scope="col">Prénom patient</th>
                             <th scope="col">dateRdv</th>
                             <th scope="col">HeureRdv</th>
                             <th scope="col">Nom medecin</th>
                             <th scope="col">Prénom medecin</th>
                             <th scope="col">duree</th>

                         </tr>
                         </thead>
                         <tbody>
                         <?php
                         $sql= "SELECT id_patient, dateRdv, HeureRdv, id_Medecin, duree from consulter ORDER BY dateRdv DESC;";

                         $req = $conn ->query($sql);
                         while ($row= $req ->fetch()){
                              $sqlP = "SELECT * FROM patient WHERE id_patient = ".$row['id_patient']."";
                              $exeP = $conn->query($sqlP);
                              $exePF = $exeP->fetch();

                             $sqlM = "SELECT id_Medecin, nom, prenom FROM medecin WHERE id_Medecin = ".$row['id_Medecin']."";
                             $exeM = $conn->query($sqlM);
                             $exeMF = $exeM->fetch();
                         ?>
                         <tr class="table-light">

                             <td><?php echo $exePF['nom'];?></td>
                             <td><?php echo $exePF['prenom'];?></td>
                             <td><?php echo $row['dateRdv'];?></td>
                             <td><?php echo $row['HeureRdv'];?></td>
                             <td><?php echo $exeMF['nom'];?></td>
                             <td><?php echo $exeMF['prenom'];?></td>
                             <td><?php echo $row['duree'];?></td>
                             <td><a href="modifierRdv.php?dateRdv=<?php echo $row['dateRdv'];?>&amp;idp=<?php echo $row['id_patient'];?>&amp;heureRdv=<?php echo $row['HeureRdv'];?>">modifier</a></td>
                             <td><a href="supprRdv.php?dateRdv=<?php echo $row['dateRdv'];?>&amp;idp=<?php echo $row['id_patient'];?>&amp;heureRdv=<?php echo $row['HeureRdv'];?>">supprimer</a></td>

                         </tr>
                         <?php }?>
                         </tbody>
                     </table>
                 </div>
                 <div class="col-xl-2"></div>
             </div>
         </div>
     </div>

	
</body>
</html>
