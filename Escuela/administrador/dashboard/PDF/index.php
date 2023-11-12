<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exportar desde PHP a PDF</title>
	<!-- Cargamos css de boostrap y jquery -->
		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
		<!-- Cargamos css de boostrap y jquery -->
<?php 
	//Incluimos el fichero de conexion \
	include_once("conexion.php");
?>
</head>
<body>
	<div class="container">
		<div class="text-center">
			<h1>Datos de Alumnos:</h1>
		</div>
		<form action="crear_pdf.php" class="form-inline" method="POST">
			<button type="submit" id="pdf" name="generar_pdf" class="btn btn-primary" aria-hidden="true">
				Exportar a PDF
			</button>
		</form>
		<hr>
		<table class="table table-bordered table-hover text-center">
			<thead class="thead-dark"> 
			<tr>
				<th>ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Edad</th>
				<th>Domicilio</th>
			</tr>		
			</thead>
			<tbody>
				<?php
				$db = new dbconexion();
				$connString = $db->getConexion();
				$result = mysqli_query($connString, "SELECT * FROM nombres") or die("Error en la BD." . mysql_error($connString));
				foreach($result as $row)
				{
					echo '<tr>
							<td>' .$row['id'] . '</td>
							<td>' .$row['nombres'] . '</td>
							<td>' .$row['apellidos'] . '</td>
							<td>' .$row['edad'] . '</td>
							<td>' .$row['domicilio'] . '</td>
						</tr>';
				}
				?>
			</tbody>
					
		</table>
	</div>
</body>
</html>