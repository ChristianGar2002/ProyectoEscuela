<?php

	include("../../conexion.php");

	if (isset($_POST['registrar'])) {
		if (strlen($_POST['nombre']) >=1){
			$apellido_paterno= trim($_POST['apellido_paterno']);
			$apellido_materno= trim($_POST['apellido_materno']);
			$nombre= trim($_POST['nombre']);
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

				$consulta= "INSERT INTO formulario2(apellido_paterno, apellido_materno, nombre, ocupacion, estudio_maximo, domicilio, colonia, localidad, municipio, codigo_postal, estado, correo, telefono_tutor, telefono_familiar, carrera_1, carrera_2, carrera_3, carrera_4, fecha_registro) VALUES('$apellido_paterno', '$apellido_materno', '$nombre', '$ocupacion', '$estudio_maximo','$domicilio', '$colonia', '$localidad', '$municipio', '$codigo_postal', '$estado', '$correo', '$telefono_tutor', '$telefono_familiar', '$carrera_1', '$carrera_2', '$carrera_3', '$carrera_4', '$fecha_registro')";
				$resultado=mysqli_query($conex, $consulta);
				
			}else{
				echo '<script language="javascript">alert("No seleccione mas de una vez la misma carrera");window.location.href="tutor2.php"</script>';
			}	
			
		}
		if ($resultado == true) {			
			echo '<script language="javascript">alert("Su registro se ha completado");window.location.href="../administrador.php"</script>';
		}else{
			$errorMsg = "No se ha podido registrar... Intentalo nuevamente.";
		}	
	}
?>