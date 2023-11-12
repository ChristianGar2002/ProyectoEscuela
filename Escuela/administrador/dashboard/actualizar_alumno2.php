<!DOCTYPE html>
<html lang="en">
<head>
	<!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
	<title>Confirmacion actualización</title>

</head>
</html>
<?php
	require_once '../../conexion.php';
	//Creamos las variables de PHP a traves de POST en la variables del formulario HTML.
	if($_POST){
		$apellido_paterno= trim($_POST['apellido_paterno']);
		$apellido_materno= trim($_POST['apellido_materno']);
		$nombre= trim($_POST['nombre']);
		$curp= trim($_POST['curp']);
		$fecha_nacimiento= trim($_POST['fecha_nacimiento']);
		$edad= trim($_POST['edad']);
		$nacionalidad= trim($_POST['nacionalidad']);
		$primaria_estudio= trim($_POST['primaria_estudio']);
		$telefono_alumno= trim($_POST['telefono_alumno']);
		$discapacidad= trim($_POST['discapacidad']);
		$promedio_primaria= trim($_POST['promedio_primaria']);
		$certificado= trim($_POST['certificado']);
		$tienes_hermanos= trim($_POST['tienes_hermanos']);

		$FOLIO = $_POST['FOLIO'];

		//Creamos la consulta de ACTUALIZACION en SQL con los datos recabados del POST a traves del ID del campo FOLIO que esta "oculto".

		$sql = "UPDATE formulario1 SET apellido_paterno = '$apellido_paterno', apellido_materno = '$apellido_materno',nombre = '$nombre', curp = '$curp', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', nacionalidad = '$nacionalidad', primaria_estudio = '$primaria_estudio', telefono_alumno = '$telefono_alumno', discapacidad = '$discapacidad', promedio_primaria = '$promedio_primaria', certificado = '$certificado', tienes_hermanos = '$tienes_hermanos' WHERE FOLIO = {$FOLIO}";

		if($conex -> query($sql) === TRUE) {
			echo '<script language="javascript">alert("La actualización ha sido completada");window.location.href="ver_alumnos.php"</script>';
      		exit();
		}else{
			echo "Error al actualizar el registro: " . $conex->error;
		}
	$conex ->close();
	}
?>
