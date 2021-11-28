<?php
if(!isset($_SESSION['login']) AND !isset($_SESSION['password'])){
	session_start();
	if(isset($_POST['envoyer'])){
		if(isset($_POST['login']) AND isset($_POST['password'])){
			if(!empty($_POST['login']) AND !empty($_POST['password'])){
				$_SESSION['login']= $_POST['login'];
				$_SESSION['password']= $_POST['password'];			
				
				$result = $conn->query("SELECT COUNT(*) as total FROM utilisateurc WHERE login ='".$_SESSION['login']."' AND password='".$_SESSION['password']."';");
				
				$donnees = $result->fetch();
				$result->closeCursor();
				$id =  $donnees['total'];
				if($id==1){
					header('Location:adminGestion.php');
				}else{
					$errorMessage = 'Le login ou le password est erroné';
				}
		}
	}
}
}?>