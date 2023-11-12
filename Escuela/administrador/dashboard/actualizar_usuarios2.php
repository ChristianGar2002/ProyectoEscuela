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
		$name= trim($_POST['name']);
		$username= trim($_POST['username']);
		$cargo= trim($_POST['cargo']);
		$password= trim($_POST['password']);

		$id = $_POST['id'];

		//Creamos la consulta de ACTUALIZACION en SQL con los datos recabados del POST a traves del ID del campo FOLIO que esta "oculto".
		$password = md5($password);
		$sql = "UPDATE usuarios SET name = '$name', username = '$username',cargo = '$cargo', password = '$password' WHERE id = {$id}";

		if($conex -> query($sql) === TRUE) {
			echo '<script language="javascript">alert("La actualización ha sido completeda");window.location.href="ver_usuarios.php"</script>';
      		exit();
		}else{
			echo "Error al actualizar el registro: " . $conex->error;
		}
	$conex ->close();
	}
?>
