<?php 

require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();



if (isset($_POST['submit'])) {

		$materia = $_POST['materia'];
		$nivel = $_POST['nivel'];
		
		

		$sql= "INSERT INTO class  (name, nivel) VALUES ('$materia','$nivel')";


		if (mysqli_query($link, $sql)) {
		echo'<script type="text/javascript">
		    alert("Materia cadastrada con exito");
		    window.location.href="materia_menu.php";
		    </script>';
		} else{

		echo "Erro ao cadastrar a class!";
		}// FIN DEL ELSE

}// Fin del if isset.




 ?>