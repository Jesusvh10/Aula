 <?php
require_once ('../auth/auth.php'); 
require_once('../class/db.php');

$objDb = new dba();
$link = $objDb->conecta_mysql();

$sql = "SELECT * FROM class";
$select = $link->query($sql);

 ?>

 
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<script>

			// se pueden colocar los scripts necesarios para esta parte 		
				

		
		</script>
	<head>
 	<title>Registrar clase</title>
<?php require_once('../default/cabezalo.php');  ?>

 </head>

	<body>
<?php  require_once ('../default/menu.php');?>	
<div class="container container-cs">
<div class="row">
  <div class="col-sm-3 menu-vertical">
    <?php  require_once ('../default/menuVertical.php');?>	
  </div>
  <div class="col-sm-9 con content">
	<div>
		<br>
		
		<br>

		<form method="POST" action="insert_post.php">
		<h3 class="text-center text-primary"><strong></strong></h3>	
			

			
		     <div class="form-group col-sm-4 ">
		     	<label>Ingrese class</label> 
				<input type="text" class="form-control" id="materia" value="" name="materia" placeholder="Materia" required="requiored">
			</div>
						

			  <div class="form-group col-sm-4 ">
				  	 <label>Select Nivel</label>
				  	 <br> 
		         <select name="nivel" class="selector" id="nivel">
		        <option>--Nivel--</option>
		        <option value="a1">A1</option>
		        <option value="a2">A2</option>
		        <option value="b1">B1</option>
		        <option value="b2">B2</option>
		        <option value="c1">C1</option>
		        <option value="c2">C2</option>
		        <option value="avanzado">Avanzado</option>
		        <option value="experto">Experto</option>
		        </select>
		     	
			</div>
			    
			<div class="col-sm-1" >
				<br>
				<button id="" name="submit" type="submit" class="btn btn-primary " >Cadastrar class</button>
			</div>

			<div class="col-sm-9" >
				<br>

						<table class="table table-striped  ">
					<h3 class="text-center text-primary"><strong>Clases Cadastradas</strong></h3>
					<tr>
						<th>Id</th>

						<th>Class</th>
						<th>Nivel</th>
						<th>Update</th>
						<th>Delete</th>	
					<div>		

					</tr>
				<?php 
				while ($mostraralumno = $select->fetch_array(MYSQLI_BOTH)) {
					# code...I
					echo' <tr>
								<td>'.$mostraralumno['id'].'</td>
								<td>'.$mostraralumno['name'].'</td>
								<td>'.$mostraralumno['nivel'].'</td>
								';
					?>

						<td><button id ="prueba" type="button" class="btn btn-primary"  onclick="cadastro(<?php echo $mostraralumno['id']; ?>, <?php echo "'". $mostraralumno['name'] . "'"; ?>)"  ><span class="glyphicon glyphicon-user"></span></button></td>
						<td>
						
						<button type="button" class="btn btn-danger" onclick="teste(<?php echo $mostraralumno['id']; ?>)">
							<span class="glyphicon glyphicon-trash"></span>
						</button>
						</td>
					    </tr>
				<?php
					}
				 ?>
				</table>
				
			</div>

				
		



			
		</form>

	</div>
  </div>
</div>
</div>
	</body>
</html>