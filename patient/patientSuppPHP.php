<?php

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id=$_GET['id'];

$req = "DELETE FROM patient WHERE id_patient='$id'";

$conn->exec($req);

header('Location:patient.php');

?>