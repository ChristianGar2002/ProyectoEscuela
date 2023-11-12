
<?php
 session_start(); 
  //Agregamos el archivo de conexion a la base de datos
  include_once('../conexion.php');
  if (!isset($_SESSION['ID'])) {
    header("location: ../login/sesion_admin.php");
    exit();
  }

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
      echo '<script language="javascript">alert("El registro ha sido creado existosamente");window.location.href="../login/sesion_admin.php"</script>';
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
    <link rel="stylesheet" href="../css/footer.css">

    <!-- CSS de cita -->
    <link rel="stylesheet" href="../css/escuela.css">

    <!-- Fondo UiGradients Personalizado -->
    <link rel="stylesheet" href="../css/bg-main.css">

    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CDN de animacion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!--CSS para las tarjetas -->
    <link rel="stylesheet" href="../css/tarjeta-in.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../img/logoquetzalt.jpg">
    
    <title>Registrar usuarios</title>
  </head>
  <body>
    <!-- Inicio del menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="administrador.php">
        <img src="../img/logoquetzalt.jpg" width="80" height="40" class="d-inline-block align-top" alt="Logo1">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-lg">
          <li class="nav-item active">
            <a class="nav-link" href="administrador.php"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alumno/ver_alumnos.php"><i class="fas solid fa-child"></i> Datos de alumnos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tutor/ver_tutor.php"><i class="fas solid fa-id-card"></i> Datos de los padres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preeinscripcion_admin.php"><i class="fas solid fa-plus"></i> Crear Preincripcion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrar_usuarios.php"><i class="fas solid fa-user-plus"></i> Crear Usuarios</a>
          </li>
          <?php if ($_SESSION['CARGO'] == 'Director') { ?>
          <li class="nav-item">
            <a class="nav-link" href="usuarios/ver_usuarios.php"><i class="fas fa-search"></i> Consultar_Usuarios</a>
          </li>
          <?php } ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa solid fa-database"></i> Exportar BD
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="excel.php">Excel</a>
              <a class="dropdown-item" href="#">PDF</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Fin del menu -->
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
                              <?php session_start();
                              if ($_SESSION['CARGO'] == 'Director') { ?>
                              <option>Director</option>
                              <?php } ?>
                              <option>Docente</option>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Inicio del Estilo del menu de 3 niveles -->
    <script type="text/javascript" src="../js/Menu-3N.js"></script>
    <!-- Final del Estilo del menu de 3 niveles -->

    <!-- Inicio del Footer -->
    <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>company</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our service</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
              </ul>
            </div>
             <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">payment options</a></li>
              </ul>
            </div>
             <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="https://www.facebook.com/GlamourZihua"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/GlamourSpa_OK?fbclid=IwAR09Okvem1AgsI5bcSIUF6xZ5QaRuUqfNqEgZj6NmGL6vWO61KwjranoRAY"><i class="fab fa-twitter"></i></a>
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Festetica__glamour%2F%3Ffbclid%3DIwAR0phKVJrtL179vVSWDVh9Sm9pFmcoHDqmVzDKGeMdVgsoRFn90hQvO4r8I&h=AT1l_WHe_z0CCV1Oxpj0XgP8hoU1br99ww7Fx6cUg_HNgYolacZs_8ay1r8pQ-LDbOWaq7XroZ0M5LJk2K4VdsBI2WL4_ZUVU7zodKc9s9Jfh_xYZKUGpVPJREJPD603ELjMfg"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fest%25C3%25A9tica-glamour%2Fabout%2F%3Ffbclid%3DIwAR2rHI4QOdrFky-KtA8n55iv6BzrhehjVbgHJWs5duIYwcPzGre9ZKUaTjw"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="footer text-white" style="padding-left: 20px;">
            <p class="texto pie">Diseñado y maquetado por: Christian Garcia Vazquez, Francisco Amigon Gonzales,<br> Jose Julian Jaimez Torrez, Manuel Chavez Avila, Francisco Javier Gomez Ramirez. &copy; 2021</p>
            <p class="texto">Contactar a: <a href="mailto:20307019@utcgg.edu.mx">Administrador del Sitio. </a></p>
            <p class="texto">
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                  <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="¡CSS Válido!"/>
                </a>
            </p>
          </div>
        </div> 
    </footer>
    <!-- Fin del Footer -->

  </body>
</html>