<?php 
	header("Content-Type:aplication/vnd.ms-excel; charset=iso-8859-1");
	//header("Content-Type:aplication/vnd.ms-excel");Al formato mas reciente de excel
	header("Content-Disposition:attachment;filename=alumnos.xls");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<table class="table table-bordered table-hover text-center">
			<tr class="thead-dark">
				<th>FOLIO</th>
				<th>Apellido paterno</th>
				<th>Apellidos materno</th>
				<th>Nombre</th>
          		<th>Curp</th>
          		<th>Fecha_nacimiento</th>
          		<th>Edad</th>
          		<th>Nacionalidad</th>
          		<th>Primaria_estudio</th>
          		<th>Telefono_alumno</th>
          		<th>Discapacidad</th>
				<th>Promedio de primaria</th>
				<th>Certificado</th>
				<th>Tienes_hermanos</th>
				<th>Nombre_completo</th>
				<th>Ocupación</th>
				<th>Estudio_máximo</th>
				<th>Domicilio</th>
				<th>Colonia</th>
				<th>Localidad</th>
				<th>Municipio</th>
				<th>Codigo_postal</th>
				<th>Estado</th>
				<th>Correo</th>
				<th>Telefono_tutor</th>
				<th>Telefono_familiar</th>
				<th>Carrera_1</th>
				<th>Carrera_2</th>
				<th>Carrera_3</th>
				<th>Carrera_4</th>
          		<th>Fecha de registro</th>
			</tr>
			<?php
				include("conexion.php");
				$sql="SELECT * FROM formulario1";
					$ejecutar=mysqli_query($conex, $sql);
					while ($fila=mysqli_fetch_array($ejecutar)) {
					?>
			<tr>
				<th><?php echo $fila[0]?></th><!--Para imprimir el contedio de la tabla --> 
				<th><?php echo $fila[1]?></th>
				<th><?php echo $fila[2]?></th>
				<th><?php echo $fila[3]?></th>
				<th><?php echo $fila[4]?></th>
				<th><?php echo $fila[5]?></th>
				<th><?php echo $fila[6]?></th>
				<th><?php echo $fila[7]?></th>
				<th><?php echo $fila[8]?></th>
				<th><?php echo $fila[9]?></th>
				<th><?php echo $fila[10]?></th>
				<th><?php echo $fila[11]?></th>
				<th><?php echo $fila[12]?></th>
				<th><?php echo $fila[13]?></th>
				<th><?php echo $fila[14]?></th>
				<th><?php echo $fila[15]?></th>
				<th><?php echo $fila[16]?></th>
				<th><?php echo $fila[17]?></th>
				<th><?php echo $fila[18]?></th>
				<th><?php echo $fila[19]?></th>
				<th><?php echo $fila[20]?></th>
				<th><?php echo $fila[21]?></th>
				<th><?php echo $fila[22]?></th>
				<th><?php echo $fila[23]?></th>
				<th><?php echo $fila[24]?></th>
				<th><?php echo $fila[25]?></th>
				<th><?php echo $fila[26]?></th>
				<th><?php echo $fila[27]?></th>
				<th><?php echo $fila[28]?></th>
				<th><?php echo $fila[29]?></th>
				<th><?php echo $fila[30]?></th>
			</tr>
		<?php } ?>
					
	</table>

