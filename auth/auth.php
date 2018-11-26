<?php 
session_start();
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
		unset($_SESSION['usuario']); 
		unset($_SESSION['senha']);
		header('Location: ../index.php');
	}






?>