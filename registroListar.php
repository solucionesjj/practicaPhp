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
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php
					$mysqli = new mysqli('localhost', 'root', '', 'reciclick');
					
					$sql = "select * from usuario order by nombre";
					$resultado = $mysqli->query($sql);
					
					?>
					<table class="table table-dark table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Correo</th>
								<th>Teléfono</th>
								<th>Clave</th>
								<th>Acción</th>
							</tr>
						</thead>
						
						<?php
						while($usuarios = $resultado->fetch_assoc())
						{
						?>
						<tr>
							<form name="actualizar<?php echo $usuarios["id"]; ?>" id="actualizar<?php echo $usuarios["id"]; ?>" method="post" action="registroActualizar.php">
								<td><input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuarios["nombre"]; ?>"></td>
								<td><input type="text" name="correo" id="correo" class="form-control" value="<?php echo $usuarios["correo"]; ?>"></td>
								<td><input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $usuarios["telefono"]; ?>"></td>
								<td>
									<input type="text" name="clave" id="clave" class="form-control" value="<?php echo $usuarios["clave"]; ?>">
									<input type="hidden" name="id" id="id" value="<?php echo $usuarios["id"]; ?>" >
								</td>
							</form>
							<td>
								<a href="registroEliminar.php?id=<?php echo $usuarios["id"]; ?>" class="btn btn-danger">Eliminar</a> &nbsp;&nbsp;
								<a href="#" onclick="document.forms.actualizar<?php echo $usuarios["id"]; ?>.submit();" class="btn btn-warning">Actualizar</a>
							</td>
						</tr>
						<?php
						}
						echo $mysqli->error;
						?>
					</table>
				</div>
				
			</div>
			<center><a class="btn btn-success" href="registro.php">Volver</a></center>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>