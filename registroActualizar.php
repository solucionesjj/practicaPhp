<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>
	<body>
		<div class="container"><br>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<?php
					$mysqli = new mysqli('localhost', 'root', '', 'reciclick');
					$sql = "update usuario 
					set nombre = '".$_POST["nombre"]."',
					correo = '".$_POST["correo"]."',
					telefono = '".$_POST["telefono"]."',
					clave = '".$_POST["clave"]."'
					where id = ".$_POST["id"];
					$resultado = $mysqli->query($sql);
					
					if($mysqli->error)
					{
					?>
					<div class="alert alert-warning">
						Error al actualizar el registro. <?php echo $mysqli->error; ?>
					</div>
					<?php
					}
					else
					{
					?>
					<div class="alert alert-success">
						Registro actualizado exitosamente.
					</div>
					<?php
					}
					?>
					
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
			</div>
			<p class="text-center"> <a class="btn btn-success" href="registroListar.php">Volver</a>		</p>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>