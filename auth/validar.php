<?php

require_once('../class/db.php');

$objdb = new dba();
$link = $objdb->conecta_mysql();

session_start();

$usuario = $_POST ['usuario'];
$senha = md5($_POST['senha']);



$sql = "SELECT * FROM user WHERE usuario = '$usuario' and senha = '$senha'";

$resultado_id = mysqli_query($link, $sql);


if ($resultado_id) {
	$dados_usuario = mysqli_fetch_array($resultado_id);


if(isset($dados_usuario['usuario'])){
		 $_SESSION['usuario'] = $usuario;
		 $_SESSION['senha'] = $senha;
		header('Location: ../dashboard/dashboard.php?');
	}
	else{
		header('Location: /aula/index.php?erro=1');
	}



}


else{
echo "error na excucao da consulta, favor ";
}



  ?>