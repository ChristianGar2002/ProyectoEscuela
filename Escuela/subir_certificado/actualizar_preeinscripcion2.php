<!DOCTYPE html>
<html lang="en">
<head>
	<!--Icono de la pestaña -->
    <link rel="icon" href="../img/logoquetzalt.jpg">
	<title>Confirmacion actualización</title>

</head>
</html>
<?php
	require_once '../conexion.php';
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
			$nombre_completo= trim($_POST['nombre_completo']);
			$ocupacion= trim($_POST['ocupacion']);
			$estudio_maximo= trim($_POST['estudio_maximo']);
			$domicilio= trim($_POST['domicilio']);
			$colonia= trim($_POST['colonia']);
			$localidad= trim($_POST['localidad']);
			$municipio= trim($_POST['municipio']);
			$codigo_postal= trim($_POST['codigo_postal']);
			$estado= trim($_POST['estado']);
			$correo= trim($_POST['correo']);
			$telefono_tutor= trim($_POST['telefono_tutor']);
			$telefono_familiar= trim($_POST['telefono_familiar']);
			$carrera_1= trim($_POST['carrera_1']);
			$carrera_2= trim($_POST['carrera_2']);
			$carrera_3= trim($_POST['carrera_3']);
			$carrera_4= trim($_POST['carrera_4']);
			$fecha_registro= date("d/m/y");

			$curp2 = $_POST['dato'];

			if (($carrera_1 != $carrera_2) and ($carrera_1 != $carrera_3) and ($carrera_1 != $carrera_4) and ($carrera_2 != $carrera_3) and ($carrera_2 != $carrera_4) and ($carrera_4 != $carrera_1)){

				$sql = "UPDATE formulario1 SET apellido_paterno = '$apellido_paterno', apellido_materno = '$apellido_materno',nombre = '$nombre', curp = '$curp', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', nacionalidad = '$nacionalidad', primaria_estudio = '$primaria_estudio', telefono_alumno = '$telefono_alumno', discapacidad = '$discapacidad', promedio_primaria = '$promedio_primaria', certificado = '$certificado', tienes_hermanos = '$tienes_hermanos', nombre_completo = '$nombre_completo', ocupacion = '$ocupacion', estudio_maximo = '$estudio_maximo', domicilio = '$domicilio', colonia = '$colonia', localidad = '$localidad', municipio = '$municipio', codigo_postal = '$codigo_postal', estado = '$estado', correo = '$correo', telefono_tutor = '$telefono_tutor', telefono_familiar = '$telefono_familiar', carrera_1 = '$carrera_1', carrera_2 = '$carrera_2', carrera_3 = '$carrera_3', carrera_4 = '$carrera_4', fecha_registro = '$fecha_registro' WHERE curp = '{$curp2}'";

				if($conex -> query($sql) === TRUE) {
					echo '<script language="javascript">alert("La actualización ha sido completada");window.location.href="acceder_datos.php"</script>';
		      		exit();
				}else{
					echo "Error al actualizar el registro: " . $conex->error;
				}
				$conex ->close();	
			}else{
				echo '<script language="javascript">alert("Revisa tus datos y no dupliques la carrera");window.location.href="acceder_datos.php"</script>';
			}
		}

?>