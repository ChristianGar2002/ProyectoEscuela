<?php  
  session_start();
  //Incluimos el archivo de conexion a la BD.
  include_once('../conexion.php');

  if (!isset($_SESSION['ID'])) {
    header("location: ../login/sesion_admin.php");
    exit();
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
    <link rel="stylesheet" href="css/tarjeta-in.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../img/logoquetzalt.jpg">
    
    <title>Subir cerificado</title>
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
        <div class="row" id="cita" style="margin-right: auto; margin-left: auto;">
            <div class="row" style="margin-right: auto; margin-left: auto;">
              <div class="col-md-12 mx-auto">
                  <form method="POST">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Datos del alumno</h2>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Apellido paterno:</label>
                          <input type="text" name="apellido_paterno" class="form-control mt-2" placeholder="Apellido paterno" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Apellido Materno:</label>
                          <input type="text" name="apellido_materno" class="form-control mt-2"  placeholder="Apellido Materno" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nombre completo:</label>
                          <input type="text" name="nombre" class="form-control mt-2" placeholder="Nombre completo" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">CURP:</label>
                          <input type="text" name="curp" class="form-control mt-2" placeholder="CURP" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Fecha de nacimiento:</label>
                          <input type="date" name="fecha_nacimiento" class="form-control mt-2" placeholder="Fecha de nacimiento" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Edad:</label>
                          <input type="number" name="edad" class="form-control mt-2" placeholder="Edad" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nacionalidad:</label>
                          <input type="text" name="nacionalidad" class="form-control mt-2" placeholder="Nacionalidad" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Primaria de estudio:</label>
                          <input type="text" name="primaria_estudio" class="form-control mt-2" placeholder="Nombre de la primaria" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Telefono del alumno:</label>
                          <input type="text" name="telefono_alumno" class="form-control mt-2" placeholder="WhastApp">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Discapacidad:</label>
                          <input type="text" name="discapacidad" class="form-control mt-2" placeholder="Discapacidad del alumno">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Promedio de primaria:</label>
                          <input step="any" type="number" name="promedio_primaria" class="form-control mt-2" placeholder="Promedio" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Certificado:</label>
                          <input style="background:rgba(0, 0, 0, 0); border-color: rgba(0, 0, 0, 0); color: black; margin-left: -13px;" class="form-control" type="file" id="formFile" name="certificado">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">¿Tienes hermanos?</label>
                          <textarea class="form-control" id="exampleFomrControlTextarea1" name="tienes_hermanos" placeholder="¿Tienes hermanos aquí en la Escuela Secundaria Quetzalcóatl? Anótalo grado y grupo" cols="3"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center" style="margin-right: auto; margin-left: auto;">Datos del tutor</h2>
                        </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Nombre completo:</label>
                            <input type="text" name="nombre_completo" class="form-control mt-2" placeholder="Nombre completo" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Ocupación del tutor:</label>
                            <input type="text" name="ocupacion" class="form-control mt-2" placeholder="Ocupación del tutor" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Estudio máximo:</label>
                            <input type="text" name="estudio_maximo" class="form-control mt-2" placeholder="Estudio máximo" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Domicilio:</label>
                            <input type="text" name="domicilio" class="form-control mt-2" placeholder="Domicilio" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Colonia:</label>
                            <input type="text" name="colonia" class="form-control mt-2" placeholder="Colonia" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Localidad:</label>
                            <input type="text" name="localidad" class="form-control mt-2" placeholder="Localidad" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Municipio:</label>
                            <input type="text" name="municipio" class="form-control mt-2" placeholder="Municipio" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Código postal:</label>
                            <input type="number" name="codigo_postal" class="form-control mt-2" placeholder="Código postal" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Estado:</label>
                            <input type="text" name="estado" class="form-control mt-2" placeholder="Estado" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Correo electronico:</label>
                            <input type="email" name="correo" class="form-control mt-2" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Teléfono del tutor:</label>
                            <input type="number" name="telefono_tutor" class="form-control mt-2" placeholder="Teléfono" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Teléfono de algún familiar:</label>
                            <input type="number" name="telefono_familiar" class="form-control mt-2" placeholder="Teléfono del familiar">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la primer carrera:</label>
                            <select name="carrera_1" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la segunda carrera:</label>
                            <select name="carrera_2" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la tercer carrera:</label>
                            <select name="carrera_3" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la cuarta carrera:</label>
                            <select name="carrera_4" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico</option>
                            </select>
                          </div>
                        </div>
                    </div>
                      <div class="col-lg-8" style="margin-right: auto; margin-left: auto;">
                        <button class="btn btn-primary btn-block" type="submit" name="registrar" value="Enviar">Enviar</button>
                      </div>
                    </div>
                  </form>
                  <?php
                    include("accion_preeinscripcion_admin.php"); 
                  ?>
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