<?php 
require_once ('../auth/auth.php'); 
require_once('../class/db.php');
$objDb = new dba();
$link = $objDb->conecta_mysql();

if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM student WHERE id = $id";
	
	$result = $link->query($sql);
	
	while ($row = $result->fetch_array(MYSQLI_BOTH)){
		$name = $row['name'];
		$surname = $row['surname'];
		$cpf = $row['cpf'];
		$cep = $row['cep'];
		$class = $row['class'];
		$nivel = $row['nivel'];
		$phone = $row['phone'];


	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Aluno</title>
	<?php require_once('../default/cabezalo.php');  ?>
</head>
<body>

<?php  require_once ('../default/menu.php');?>	
<div class="container container-cs">
<div class="row">
  <div class="col-sm-3 menu-vertical">
    <?php  require_once ('../default/menuVertical.php');?>	
  </div>
  <div class="col-sm-9">
	<div>
<h3 class="text-center text-primary " ><strong>Cadastro de alunos.</strong></h3>
	    		<br />
				<form  method="post" action="cadastrarpost.php" id="formCadastrarse">
				

					<div class="form-group">
						<input type="hidden" class="form-control" id="usuario" value="<?php echo @$id; ?>" name="id" placeholder="id" >
					</div>


					<div class="col-md-4">	<input type="text" class="form-control" id="nome" name="nome" value="<?php echo @$name; ?>" placeholder="Nome" required="requiored"><br /></div>
							
					<div class="col-md-4">	<input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo @$surname; ?>" placeholder="Sobrenome" required="requiored"><br /></div>
						
					<div class="col-md-4">	<input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo @$cpf; ?>" placeholder="CPF" required="requiored"><br /></div>
						

					<div class="col-md-4">	<input type="text" class="form-control" id="cep" name="cep" value="<?php echo @$cep; ?>" placeholder="CEP" required="requiored"><br /></div>
						
					<div class="col-md-4">	<input type="text" class="form-control" id="aula" name="aula" value="<?php echo @$class; ?>" placeholder="Aula" required="requiored"><br /></div>
	
					<div class="col-md-4">	<input type="text" class="form-control" id="nivel" name="nivel" value="<?php echo @$nivel; ?>" placeholder="Nivel" required="requiored"><br /></div>
					
					
					<div class="col-md-4">	<input type="text" class="form-control" id="phone" name="phone" value="<?php echo @$phone; ?>" placeholder="Celular" required="requiored"><br /></div>
				
			
					<div class="col-md-4">
					<button  type="submit" class="btn btn-primary  center-block  ">Inscreva-se</button></div>
		
				
					
						
				</form>
	</div>
  </div>
</div>
</div>

	   
						
		


</body>
</html>