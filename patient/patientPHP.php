<?php
if(isset($_POST['valider']) ){
    if( isset($_POST['selectCivilite']) and isset($_POST['nom'])and isset($_POST['prenom'])
        and isset($_POST['adresse']) and isset($_POST['dNaissance']) and isset($_POST['ville'])
        and isset($_POST['cp']) and isset($_POST['dNaissance']) and isset($_POST['lNaissance']) and isset($_POST['tel'])){
        $nom = $_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $ville=$_POST['ville'];
        $codePostal=$_POST['cp'];
        $dNaissance=$_POST['dNaissance'];
        $lieuNaissance=$_POST['lNaissance'];
        $telephone=$_POST['tel'];
        $numSecu=$_POST['numSecu'];
        $civilite=$_POST['selectCivilite'];



        if( !empty($_POST['selectCivilite']) and !empty($_POST['nom'])and !empty($_POST['prenom'])
            and !empty($_POST['adresse']) and !empty($_POST['dNaissance']) and !empty($_POST['ville'])
            and !empty($_POST['cp']) and !empty($_POST['dNaissance']) and !empty($_POST['lNaissance']) and !empty($_POST['tel']) and !empty($_POST['numSecu'])) {

            $check = $conn->query("SELECT count(*) as nb from patient where patient.NumeroSecu = '".$_POST['numSecu']."' ");
            $doubleSecu = $check->fetch();
            if($doubleSecu['nb'] != 0){
                echo "<script>alert(\"Un patient utilise déjà ce numéro de sécurité sociale.\")</script>";
            }else{
                $requette= "INSERT INTO patient(NumeroSecu,nom,prenom,telephone,adresse,ville,codePostal,dateNaissance,lieuNaissance,civilite) VALUES('$numSecu','$nom','$prenom','$telephone','$adresse','$ville','$codePostal','$dNaissance','$lieuNaissance','$civilite');";
                $conn->exec($requette);

                echo "<meta http-equiv='refresh' content='0'>";
                header("Location: patient.php");
            }

        }else{
            echo "<script>alert(\"Veuillez remplir tous les champs prévus pour la création du patient.\")</script>";
        }
    }
}
if(isset($_POST['retour'])){
    header('Location:patient.php');
}
?>