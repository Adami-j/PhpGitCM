<?php


session_start();

if(!isset($_SESSION['login']) AND !isset($_SESSION['password'])){
	header('Location:index.php');
}
if(isset($_POST['deco'])){
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	header('Location:index.php');
}

?>