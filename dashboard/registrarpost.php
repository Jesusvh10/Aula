<?php 

require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']) ;
$studentid = 1;
echo $usuario;
echo $usuario;
echo $senha;

$sql= "INSERT INTO user (usuario, email, senha, studentid) VALUES ('$usuario','$email','$senha','$studentid')";

if (mysqli_query($link, $sql)){
	//echo "Usuario registrado con exito";

	echo'<script type="text/javascript">
        alert("Usuário registrado com sucesso");
        window.location.href="index.php";
        </script>';

}else {
	echo "Error al registrar al usuario";
}

 ?>