<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Estudiantes</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<center>
		<div class="container">
			<table class="table table-striped">
				<thead>

					<tr><b><h1>Listado de Estudiantes</h1></b></tr>
				</thead>

				<tbody>
					<tr>
						
						<td>Cédula</td>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td colspan="2">Operaciones</td>
					</tr>
					<?php 
						require_once('../../../conexion/conexion.php');

						$query="SELECT * FROM estudiante";
						$resultado= $conexion->query($query);
						while ($row=$resultado->fetch_assoc()) {
					?>

					<tr>
						
						<td><?php echo $row['ced_e'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['apellido'];?></td>
						<td><a href="modificar_a_a.php?ced_e=<?php echo $row['ced_e']; ?>">Modificar</td>
						<td><a href="eliminar_a_a.php?ced_e=<?php echo $row['ced_e']; ?>">Eliminar</td>
					</tr>

					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</center>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>