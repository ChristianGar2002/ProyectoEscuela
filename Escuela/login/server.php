<?php 
	session_start();

	//Declaracion de variables
	$username = "";
	$email = "";
	$errors = array();
	$_SESSION['success'] = "";

	//Conexion a la BD
	$db = mysqli_connect('localhost', 'root', '', 'secundaria');

	//Registrar usuarios
	if (isset($_POST['reg_user'])) {
		//Recibimos todos los valores de los inputs del Formulario
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		//Validacion del formulario, sirve para confirmar que se esta cumpliendo con los inputs solicitados.

		if (empty($username)) { array_push($errors, "Se requiere el Nombre de Usuario");}
		if (empty($email)) { array_push($errors, "Se requiere el Email");}
		if (empty($password_1)) { array_push($errors, "Se requiere la contraseña");}
		if ($password_1 != $password_2) {
			array_push($errors, "Las dos contraseñas no coinciden");
		}

	//Si todo es correcto, se procede a registrar al usuario	
	if (count($errors) == 0) {
		$password =md5($password_1); //Ciframos la contraseña antes de guardarla en la BD.

		//Creamos la consulta de Insercion
		$query = "INSERT INTO usuarios(username, email, password) VALUES ('$username','$email','$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "¡Ahora estas conectado!";
		header('location: ../administrador/dashboard/index.php');
		}
	}

	//Loging o Inicio de Sesionde usuarios
	if (isset($_POST['login_user'])) {
		//Recibimos todos los valores de los inputs del Formulario
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//Validacion del formulario, sirve para confirmar que se esta cumpliendo con los inputs solicitados.

		if (empty($username)) {
			array_pus($errors, "Se requiere el nombre del usuario.");
		}
		if (empty($password)) {
			array_push($errors, "Se requiere la contraseña");
		}

		//Contador de errores y seleccion en la DB
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success']= "Ahora estas conectado!";
				header('location ../administrador/dashboard/index.php');
			}else{
				array_push($errors, "Combinacion incorrecta de nombre de usuario o contraseña.");
			}
		}
	}
?>