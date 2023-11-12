<?php 
	header("Content-Type:aplication/vnd.ms-excel; charset=iso-8859-1");
	//header("Content-Type:aplication/vnd.ms-excel");Al formato mas reciente de excel
	header("Content-Disposition:attachment;filename=usuarios.xls");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<table class="table table-bordered table-hover text-center">
			<tr class="thead-dark">
          <th>ID</th>
          <th>Nombre</th>
          <th>Nombre de usuario</th>
          <th>Cargo</th>
          <th>Contraseña</th>
          <th>Fecha de registro</th>
			</tr>
			<?php
				include("conexion.php");
				$sql="SELECT * FROM usuarios";
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
			</tr>
		<?php } ?>
					
	</table>

