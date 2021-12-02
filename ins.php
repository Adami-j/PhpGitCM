<?php
require "connect.php";
require "secu/secuConnexion.php";
$sql1="SELECT id_patient from patient ;";
$sql2="SELECT id_Medecin from medecin WHERE id_Medecin = 11;";
$req1=$conn->query($sql1);
$req2=$conn->query($sql2);
$row1=$req1->fetch();
$row2=$req2->fetch();
$idp=$row1['id_patient'];
$idm=$row2['id_Medecin'];
$n=1;

$req=$conn->exec("INSERT INTO référent(id_patient,O_N, Id_Medecin) VALUES ('$idp','$n','$idm');");
$sql="INSERT INTO référent(id_patient,O_N, Id_Medecin) VALUES ('35','oui','11')";
echo var_dump("INSERT INTO référent(id_patient,O_N, Id_Medecin) VALUES ('$idp','oui','$idm')");
$conn->exec($sql);
if($req==true){
	echo "ok";
}else{
	echo "badsmell";
}
?>