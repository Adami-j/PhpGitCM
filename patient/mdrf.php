<?php	
require "..\..\PhpGitCM\secu\secuConnexion.php";
require "..\..\PhpGitCM\connect.php";
	$sql="INSERT INTO `referent`(`id_patient`, `O_N`, `Id_Medecin`) VALUES ('2','1','2')";
	$conn->exec($sql);
	?>