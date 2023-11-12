<?php 

  session_start();
  if (isset($_SESSION['ID'])) {
    header("Location: ../administrador/dashboard/index.php");
    exit();
  }
  //Agregamos el archivo de conexion a la base de datos
  include_once('../conexion.php');

  if (isset($_POST['login_user'])) {
    $errorMsg="";
    $username = $conex->real_escape_string($_POST['username']);
    $password = $conex->real_escape_string(md5($_POST['password']));

    if (!empty($username) || !empty($password)) {
      $query="SELECT * FROM usuarios WHERE username = '$username' AND password='$password'";
      $result= $conex->query($query);
      if ($result->num_rows > 0) {
        $row=$result->fetch_assoc();
        $_SESSION['ID'] = $row['id'];
        $_SESSION['CARGO'] = $row['cargo'];
        $_SESSION['USERNAME'] = $row['username'];
        header("Location: ../administrador/dashboard/index.php");
        die();
      }else{
        $errorMsg = "El usuario o la contraseña son incorrectas";
      }
      
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

    <!-- Fondo UiGradients Personalizado -->
    <link rel="stylesheet" href="../css/bg-main2.css">

    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CDN de animacion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- CSS de cita -->
    <link rel="stylesheet" href="../css/escuela3.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../img/logoquetzalt.jpg">

    <title>Iniciar sesión</title>
  </head>
  <body>
    <!-- Inicio del menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-lg">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../mision.php"><i class="fas solid fa-bullseye-arrow"></i> Misión <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../vision.php"><i class="fas solid fa-eye"></i> Visión <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa solid fa-copyright"></i> Talleres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../informatica.php">Taller de informatica (Computación)</a>
              <a class="dropdown-item" href="../diseño.php">Taller de diseño y creación plástica (Pintura)</a>
              <a class="dropdown-item" href="../electronica.php">Taller de electrónica, comunicación y sistemas de control (Electrónica)</a>
              <a class="dropdown-item" href="../arquitectonico.php">Taller de diseño arquitectónico (Dibujo)</a>
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
              <div class="col-md-12">
                  <form method="POST" style="width: 340px;border:1px solid white;margin-right: auto;margin-left: auto;" >
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Iniciar sesión</h2>
                    <div class="text-center">
                      <img src="../img/logoquetzalt.jpg" width="220" height="190" alt="Logo de la Quetzaltcoalt">
                    </div>
                    <hr style="background-color: white;">
                    <?php if (isset($errorMsg)) { ?>
                          <div class="alert alert-danger alert-dissmissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $errorMsg; ?>
                          </div>
                        <?php } ?>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Usuario:</label>
                          <input type="text" name="username" class="form-control mt-2" placeholder="Nombre de usuario" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Contraseña:</label>
                          <input type="password" name="password" class="form-control mt-2" placeholder="Contraseña" required>
                        </div>
                      </div>
                    </div>
                      <div class="col-lg-12">
                        <button class="btn btn-primary btn-block" type="submit" name="login_user" value="Ingresar">Ingresar</button>
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
            <p class="texto pie">Diseñado y maquetado por: Christian Garcia Vazquez, Francisco Amigon Gonzales,<br> Manuel Chavez Avila, Francisco Javier Gomez Ramirez. &copy; 2021</p>
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