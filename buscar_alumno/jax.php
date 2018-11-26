<?php 
require_once ('../auth/auth.php'); 
require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM test ORDER BY name";

	
	
	
if(isset($_POST['alumnos']))
{
	$q=$link->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM test WHERE 
		id LIKE '%".$q."%' OR
		name LIKE '%".$q."%' OR
		note LIKE '%".$q."%' OR
		studentid LIKE '%".$q."%' 
		";
}

$buscar=$link->query($query);
if ($buscar->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID</td>
			<td>TESTE</td>
			<td>NOTE</td>
		</tr>';

	while($filaAlumnos= $buscar->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id'].'</td>
			<td>'.$filaAlumnos['name'].'</td>
			<td>'.$filaAlumnos['note'].'</td>
		</tr>';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}

echo $tabla;
