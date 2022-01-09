<?php	
require "..\..\PhpGitCM\secu\secuConnexion.php";
require "..\..\PhpGitCM\connect.php";
require "..\..\PhpGitCM\menu.php";

require "..\..\PhpGitCM\style.html";



    if(isset($_POST['medecin'])) {
              $idm = $_POST['medecin'];
    }
    $sqlM = "SELECT id_medecin,nom from medecin";
    $res = $conn->query($sqlM);
    $idp = $_GET['id'];
    if(isset($_POST['valider']) and isset($_POST['medecin'])){
        $count = "SELECT count(*) as nb FROM referent WHERE `id_patient` = $idp and `O_N` = 1 ";
        $ex=$conn->query($count);
        if($ex=1){
            $update="UPDATE referent SET Id_Medecin=$idm WHERE $idp= id_patient ";
            $conn->exec($update);
            header('Location:patient.php');
        }else{
            $sql="INSERT INTO `referent`(`id_patient`, `O_N`, `Id_Medecin`) VALUES ('$idp',1,'$idm');";
            $conn->exec($sql);
            header('Location:patient.php');
        }

    }
    if(isset($_POST['supp'])){
        $suppress="DELETE * from referent WHERE $idp=id_patient;";
        $conn->exec($suppress);
    }
    if(isset($_POST['retour'])){
        header('Location:patient.php');
    }
	?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <body>
    <form method="POST">
        <input type="submit" name="retour" value="retour">
        <select name="medecin">
            <option></option>
            <?php while($exec=$res->fetch()){ ?>
            <option name="med" value="<?php echo $exec['id_medecin']?>"> <?php echo $exec['nom']?></option>
            <?php } ?>
        </select>
        <input type="submit" name="valider" value="valider">
        <input type="submit" name="supp" value="supprimer ref">
    </form>

    </body>
</html>
