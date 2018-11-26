<?php 

require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();


if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = "DELETE FROM student WHERE id = $id";
if(mysqli_query($link, $sql)){
       echo'<script type="text/javascript">
        alert("Aluno eliminado com sucesso");
        window.location.href="students.php";
        </script>';
    }else{
        echo "Erro ao excluir o usuário!";
    }
	
	}


?>