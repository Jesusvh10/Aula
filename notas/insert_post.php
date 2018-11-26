<?php 

require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();



if (isset($_POST['submit'])) {

		$teste = $_POST['teste'];
		$nota = $_POST['nota'];
		$alumno = $_POST['alumno'];
		
		

		$sql= "INSERT INTO test  (name, note,studentid) VALUES ('$teste','$nota','$alumno')";


		if (mysqli_query($link, $sql)) {
		echo'<script type="text/javascript">
		    alert("Materia cadastrada con exito");
		    window.location.href="notas_menu.php";
		    </script>';
		} else{

		echo "Erro ao cadastrar a class!";
		}// FIN DEL ELSE

}// Fin del if isset.




 ?>