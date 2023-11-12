<?php

	include("../conexion.php");

	if (isset($_POST['registrar'])) {
		if (strlen($_POST['nombre']) >=1){
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

			if (($carrera_1 != $carrera_2) and ($carrera_1 != $carrera_3) and ($carrera_1 != $carrera_4) and ($carrera_2 != $carrera_3) and ($carrera_2 != $carrera_4) and ($carrera_4 != $carrera_1)){

				$consulta= "INSERT INTO formulario1(apellido_paterno, apellido_materno, nombre, curp, fecha_nacimiento, edad, nacionalidad, primaria_estudio, telefono_alumno, discapacidad, tienes_hermanos, nombre_completo, ocupacion, estudio_maximo, domicilio, colonia, localidad, municipio, codigo_postal, estado, correo, telefono_tutor, telefono_familiar, carrera_1, carrera_2, carrera_3, carrera_4, fecha_registro) VALUES('$apellido_paterno', '$apellido_materno', '$nombre', '$curp', '$fecha_nacimiento','$edad', '$nacionalidad', '$primaria_estudio', '$telefono_alumno', '$discapacidad', '$tienes_hermanos','$nombre_completo','$ocupacion', '$estudio_maximo','$domicilio', '$colonia', '$localidad', '$municipio', '$codigo_postal', '$estado', '$correo', '$telefono_tutor', '$telefono_familiar', '$carrera_1', '$carrera_2', '$carrera_3', '$carrera_4', '$fecha_registro')";
				$resultado=mysqli_query($conex, $consulta);
				
			if ($resultado == true) {			
				echo '<script language="javascript">alert("Datos registrados");window.location.href="../index.php"</script>';
			}else{
				$errorMsg = "No se ha podido registrar... Intentalo nuevamente.";
			}	

			}else{
				echo '<script language="javascript">alert("Revisa tus datos y no dupliques la carrera");window.location.href="preeinscripcion.php"</script>';
			}

		}
		
	}
?>