<?php
require_once ('../auth/auth.php'); 
require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();


$sql = "SELECT * FROM student";
$select = $link->query($sql);

  ?>

 
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<script>

			function teste(id) {
				var txt;
			    if (confirm("Deseja excluir?!")) {
			    	//ajax

			    	$.ajax({
                        url: 'delete.php?id=' +id,
                                               
                        success: function(data) {
                           alert( "Aluno Excluído com sucesso!" );
                           window.location.href="studentajax.php";
                                                   }
                    });

			    	//ajax
					
			    }
					
			}	


				function cadastro(id, name){
					var txt;
					if (confirm("Deseja fazer update do usuario?" + id + ' ' + name )){
						//ajax
						alert("Va a la pagina cadastro!");
							window.location.href= "cadastropst.php?id=" + id;

						} else {
							window.location.href="students.php";
						}// fin del else
											
				}//fin de la funcion

			
				

			$(document).ready(function(){
			   $('prueba').click(function(event){ 
			       cadastro();
			   });
			});
		</script>
	<head>
 	<title>Cadastrar alunoajax</title>
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
		<a href="cadastropst.php"><button id="" type="button" class="btn btn-primary pull-right" >Cadastrar aluno ajax</button></a>
		<br>

		<h3 class="text-center text-primary"><strong>Alunos cadastrados</strong></h3>	
		<table class="table table-striped text-center ">
			<tr>
				<th>ID</th>

				<th>NOME</th>

				<th>SOBRENOME</th>

				<th>CPF</th>
				<th>CEP</th>
				<th>CLASS</th>
				<th>NIVEL</th>
				<th>PHONE</th>
				<th>ATUALIZAR</th>
				<th>DELETAR</th>

			</tr>
		<?php 
		while ($mostraralumno = $select->fetch_array(MYSQLI_BOTH)) {
			# code...I
			echo' <tr>
						<td>'.$mostraralumno['id'].'</td>
						<td>'.$mostraralumno['name'].'</td>
						<td>'.$mostraralumno['surname'].'</td>
						<td>'.$mostraralumno['cpf'].'</td>
						<td>'.$mostraralumno['cep'].'</td>
						<td>'.$mostraralumno['class'].'</td>
						<td>'.$mostraralumno['nivel'].'</td>
						<td>'.$mostraralumno['phone'].'</td>';
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
  </div>
</div>
</div>
	</body>
</html>