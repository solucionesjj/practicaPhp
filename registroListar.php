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
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
							<td><?php echo $usuarios["nombre"]; ?></td>
							<td><?php echo $usuarios["correo"]; ?></td>
							<td><?php echo $usuarios["telefono"]; ?></td>
							<td><?php echo $usuarios["clave"]; ?></td>
							<td><a href="registroEliminar.php?id=<?php echo $usuarios["id"]; ?>" class="btn btn-danger">Eliminar</a> </td>
						</tr>
						<?php
						}
						echo $mysqli->error;
						?>
					</table>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
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