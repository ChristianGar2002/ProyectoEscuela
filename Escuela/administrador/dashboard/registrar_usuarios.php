<?php require_once "vistas/parte_superior.php"?>
<?php
  //Agregamos el archivo de conexion a la base de datos
  include_once('../../conexion.php');


  if (isset($_POST['reg_user'])) {
    $username = $conex->real_escape_string($_POST['username']);
    $password = $conex->real_escape_string(md5($_POST['password']));
    $name = $conex->real_escape_string($_POST['name']);
    $cargo = $conex->real_escape_string($_POST['cargo']);
    $fecha_registro= date("d/m/y");

    $verificacion = mysqli_query($conex, "SELECT * FROM usuarios WHERE username='$username'");

    if (mysqli_num_rows($verificacion) > 0) {
      echo '<script language="javascript">alert("Este usuario ya ha sido registrado, intenta con uno nuevo");window.location.href="registrar_usuarios.php"</script>';
      exit();
    }

    $query = "INSERT INTO usuarios(name, username, password, cargo, fecha_registro) VALUES ('$name','$username', '$password', '$cargo', '$fecha_registro')";
    $result = $conex->query($query);

    if ($result == true) {      
      echo '<script language="javascript">alert("El registro ha sido creado existosamente");window.location.href="registrar_usuarios.php"</script>';
    }else{
      $errorMsg = "No estas registrado... Intentalo nuevamente.";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Footer Personalizado -->
    <link rel="stylesheet" href="../../css/footer.css">

    <!-- CSS de cita -->
    <link rel="stylesheet" href="../../css/escuela.css">

    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CDN de animacion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!--CSS para las tarjetas -->
    <link rel="stylesheet" href="../css/tarjeta-in.css">
    
    <title>Registrar usuarios</title>
  </head>
  <body>
    <!-- Inicio de contenidos -->
    <div class="container-fluid py-4">
        <div class="row" id="cita">
          <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                  <form method="POST" style="width: 500px;">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Registrar usuarios</h2>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nombre Completo:</label>
                          <input type="text" name="name" class="form-control mt-2 hola"  placeholder="Nombre:" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nombre de Usuario:</label>
                          <input type="text" name="username" class="form-control mt-2 hola"  placeholder="Username:" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                         <label class="font-weight-bold text-white">Contraseña:</label>
                         <input type="password" name="password" class="form-control mt-2 hola" placeholder="Password:" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">
                          Cargo:</label>
                            <select name="cargo" id="servicio" class="form-control mt-2">
                              <option>Cargo:</option>
                              <option>Director</option>
                              <option>Secretaria</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <button class="btn btn-primary btn-block" type="submit" name="reg_user" value="Enviar">Enviar</button>
                     </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
    </div>
    <!-- Fin de contenidos -->
  </div>
<?php require_once "vistas/parte_inferior.php"?>