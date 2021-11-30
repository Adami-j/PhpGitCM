<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Statistiques</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body >

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
                return $heure . " heure(s) et " . $temps . " minutes. ";
            }


    $idmed=$conn->query("SELECT id_Medecin FROM consulter GROUP BY id_Medecin");
    while ($exec = $idmed->fetch()){
        $dure=$conn->query("SELECT duree FROM consulter WHERE id_Medecin = $exec[id_Medecin]");
        $total = 0;
        while ($exec2 = $dure->fetch()){
            $total += temps_en_minutes($exec2['duree']);
            }
        echo 'le total est de ' . nombre_heure($total);
        }


    ?>








</body>
</html>