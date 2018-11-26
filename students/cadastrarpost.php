<?php 

require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$aula = $_POST['aula'];
$nivel = $_POST['nivel'];
$phone = $_POST['phone'];


if ($id) {
	
	$sql = "UPDATE student SET name ='$nome', surname ='$sobrenome', cpf ='$cpf', cep = '$cep', class = '$aula', nivel = '$nivel', phone = '$phone' WHERE id = '$id' ";

if (mysqli_query($link, $sql)) {
	echo'<script type="text/javascript">
        alert("Aluno atualizado com sucesso");
        window.location.href="students.php";
        </script>';
} else{

echo "Erro ao atualizar o usuario!";
}// FIN DEL ELSE



} else{

$sql= "INSERT INTO student (name, surname, cpf, cep, class, nivel, phone) VALUES ('$nome','$sobrenome','$cpf','$cep', '$aula', '$nivel', '$phone')";

if (mysqli_query($link, $sql)){
	//echo "Usuario registrado con exito";

	echo'<script type="text/javascript">
        alert("Aluno cadastrado com sucesso");
        window.location.href="cadastropst.php";
        </script>';

}else {
	echo "Error al registrar al usuario";
}

}






 ?>