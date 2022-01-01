<?php
require "..\..\PhpGitCM\menu.php";
require "../../PhpGitCM/style.html";
if(isset($_POST['retour'])){
    header("Location: ..\..\PhpGitCM\adminGestion.php");

}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Statistiques</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<div class="text-center">
    <h4 style="color: white">Statistiques</h4>
    <hr>
</div>

<body class="bg-light" >

        <?php

    require "..\..\PhpGitCM\secu\secuConnexion.php";
    require "..\..\PhpGitCM\connect.php";

    function temps_en_minutes($temps){
                $time = explode(':', $temps);
                $heure = $time[0];
                $minutes = $time[1];
                while($heure>0){
                    $heure -= 1;
                    $minutes += 60;
                }
                return $minutes;
            }
    
    function nombre_heure($temps){
                $heure=0;
                while($temps>=60){
                    $temps-=60;
                    $heure+=1;
                }
                if($heure>0){
                    return $heure . " heures et " . $temps . " minutes ";    
                }
                return $temps . " minutes ";
            }


    //âge des patients
    $patient25=$conn->query("SELECT COUNT(id_patient) as nbPatient FROM `patient` WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) < 25 and civilite = 'Monsieur' ");
    $patiente25=$conn->query("SELECT COUNT(id_patient) as nbPatient FROM `patient` WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) < 25 and civilite = 'Madame' ");
    $patient2550=$conn->query("SELECT COUNT(id_patient) as nbPatient FROM `patient` WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) > 25 AND (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) < 50 and civilite = 'Monsieur' ");
    $patiente2550=$conn->query("SELECT COUNT(id_patient) as nbPatient FROM `patient` WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) > 25 AND (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) < 50 and civilite = 'Madame' ");
    $patient50=$conn->query("SELECT COUNT(id_patient) as nbPatient FROM `patient` WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) > 50 and civilite = 'Monsieur' ");
    $patiente50=$conn->query("SELECT COUNT(id_patient) as nbPatient FROM `patient` WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateNaissance)), '%Y')+0) > 50 and civilite = 'Madame' ");

    $h25 = $patient25->fetch();
    $f25=$patiente25->fetch();
    $h2550 = $patient2550->fetch();
    $f2550=$patiente2550->fetch();
    $h50 = $patient50->fetch();
    $f50=$patiente50->fetch();
    ?>      
    

        <div class="boostrap-table">

            <div class="container ">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-13">


                        <table class="table table-striped table-bordered">
                            <thead class="text-center table-dark">
                            <tr>
                                <th>Tranche d'âge</th>
                                <th>Nb Hommes</th>
                                <th>Nb Femmes</th>
                            </tr>
                            </thead>
                            <thead class="text-center table-light">
                            <tr>
                                <td>Moins de 25 ans</td>
                                <td><?php echo $h25['nbPatient'] ?></td>
                                <td><?php echo $f25['nbPatient'] ?></td>
                            </tr>
                            <tr>
                                <td>Entre 25 et 50 ans</td>
                                <td><?php echo $h2550['nbPatient'] ?></td>
                                <td><?php echo $f2550['nbPatient'] ?></td>
                            </tr>
                            <tr>
                                <td>Plus de 50 ans</td>
                                <td><?php echo $h50['nbPatient'] ?></td>
                                <td><?php echo $f50['nbPatient'] ?></td>
                            </tr>
                            </thead>
                            <tbody>



                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
            <div>
                <div class="form-select ms-auto ">
                    <SELECT>
                        <option>

                        </option>
                    </SELECT>
                </div>
            </div>
        </div>

    
    <?php

    //durée totale des consultations par médecin
    $idmed=$conn->query("SELECT id_Medecin FROM consulter GROUP BY id_Medecin");
    while ($exec = $idmed->fetch()){
        $dure=$conn->query("SELECT duree FROM consulter WHERE id_Medecin = $exec[id_Medecin]");
        $med=$conn->query("SELECT nom, prenom FROM medecin WHERE id_Medecin = $exec[id_Medecin]");
        $infomed = $med->fetch();
        $total = 0;
        while ($exec2 = $dure->fetch()){
            $total += temps_en_minutes($exec2['duree']);
            }
        ?><p style=" background: white" style="back" > La durée totale des consultations est de ' . nombre_heure($total) . "pour le docteur " . $infomed['prenom'] . " " . $infomed['nom'] . ". " ;</p>
        <?php }


    ?>



</body>
</html>