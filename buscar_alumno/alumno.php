 <?php
require_once ('../auth/auth.php'); 
require_once('../class/db.php');



 ?>

 
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	<head>
 	<title>Registrar clase</title>

		<?php require_once('../default/cabezalo.php');  ?>
		<script>
			$(obtener_registros());

function obtener_registros(alumnos)
{
	$.ajax({
		url : 'jax.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos: alumnos },
		})

	.done(function(resultado){
		console.log(resultado)
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});


		
		</script>


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

		
		<h3 class="text-center text-primary"><strong></strong></h3>	
			

			
		 <section>
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>

		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		</section>

				
		



			
		

	</div>
  </div>
</div>
</div>
	</body>
</html>