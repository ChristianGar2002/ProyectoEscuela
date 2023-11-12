<!DOCTYPE html>
<html lang="en">
<head>
	<!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
	<title>Confirmacion de eliminacion</title>

</head>

<?php
	require_once '../../conexion.php';
	//Creamos las variables de PHP a traves de POST en la variables del formulario HTML.
	if($_POST){
		$id = $_POST['id'];

		//Establecemos con el UPDATE para actualizar el estatus del campo ACTIVO a "2" y que se elimine y oculte del listado del documento index.php, pero que se siga manteniendo en la BD.

		$sql = "DELETE FROM usuarios WHERE id = {$id}";
		$sql2= "ALTER TABLE usuarios AUTO_INCREMENT=1";
		if(($conex -> query($sql) === TRUE) and ($conex -> query($sql2) === TRUE)){
			echo '<script language="javascript">alert("Eliminacion existosa");window.location.href="ver_usuarios.php"</script>';
      		exit();
		}else{
			echo "Error al eliminar el registro: " . $conex->error;
		}
	$conex ->close();
	}
?>