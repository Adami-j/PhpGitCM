<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Attribuer medecin référent</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body >

        <?php


	
    require "..\..\PhpGitCM\secu\secuConnexion.php";
    require "..\..\PhpGitCM\connect.php";
			
        $req = $conn->query("SELECT nom, civilite, prenom, id_Medecin FROM medecin " );

        ?>
           <td>    <form id="f1" method="POST">
                <select name="medecin"/>
                <?php while($row=$req->fetch()){ ?>
                        <option value="<?php echo $row['id_Medecin']?>"><?php echo $row['nom']?></option>
                <?php }?>
                </select>
                <input type="submit" name="validerIdMedecin" value="Valider"/>>
                </form>
            </td>
          </tr>

      </tbody>
    <?php    if(isset($_POST['validerIdMedecin'])){
                if(isset($_POST['medecin'])and isset($_GET['id'])){
                    if(!empty($_POST['validerIdMedecin'])and !empty($_GET['id'])){

                            $idp=$_GET['id'];
                            $idm=$_POST['medecin'];
							
							$sql="INSERT INTO référent (id_patient, O_N, Id_Medecin) VALUES('$idp','1','$idm');";
                            
							try{
								
								$conn->exec($sql);
							}catch(PDOException $e){
								echo $e;
							}
							
							
                    }
                }
            }
    ?>








</body>
</html>