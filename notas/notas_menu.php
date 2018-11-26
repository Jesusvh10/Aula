<?php
require_once ('../auth/auth.php'); 
require_once('../class/db.php');

$objDb = new dba();
$link = $objDb->conecta_mysql();

$sql = "SELECT * FROM student ";
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
		     	<label>Nombre del teste</label> 
				<input type="text" class="form-control" id="teste" value="" name="teste" placeholder="Nombre del teste" required="requiored">
			</div>
						
			<div class="form-group col-sm-4 ">
			 	<label>Nota</label> 
				<input type="text" class="form-control" id="Nota" value="" name="nota" placeholder="Nota" required="requiored">
			</div>

			  <div class="form-group col-sm-4 ">
				  	 <label>Select alumno</label>
				  	 <br> 
		       	 

		        <select name="alumno" class="selector" id="nivel">
		        	<option>--Nivel--</option>
		        <?php 	
					while ($mostraralumno = $select->fetch_array(MYSQLI_BOTH)) {
					    echo '<option value="'.$mostraralumno[id].'">'.$mostraralumno[name].'</option>';
					  }
		        
		        ?>
		        </select>
		     	
			</div>
			    
			<div class="col-sm-1" >
				<br>
				<button id="" name="submit" type="submit" class="btn btn-primary " >Cadastrar Notas</button>
			</div>

			<div class="col-sm-9" >
				<br>

						<table class="table table-striped  ">
					<h3 class="text-center text-primary"><strong>Notas Cadastradas</strong></h3>
					<tr>
						<th>Id</th>

						<th>Alumno</th>
						<th>Surname</th>
						<th>Nota</th>
						<th>Update</th>
						<th>Delete</th>	
					<div>		

					</tr>
				<?php 
						//$sql = "SELECT * FROM test ";
						$sql = "SELECT * FROM test as t RIGHT JOIN student as s ON t.studentid = s.id";
						$select = $link->query($sql);
				while ($mostraralumno = $select->fetch_array(MYSQLI_BOTH)) {
					# code...I
					echo' <tr>
								<td>'.$mostraralumno['id'].'</td>
								<td>'.$mostraralumno['name'].'</td>
								<td>'.$mostraralumno['surname'].'</td>
								<td>'.$mostraralumno['note'].'</td>
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