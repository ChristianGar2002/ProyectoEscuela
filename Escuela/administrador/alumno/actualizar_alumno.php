<?php
  require_once '../../conexion.php';
  //SE obtiene a traves del metodo GET el ID incrementado del campo FOLIO de la BD y se realiza una consulta que muestre y enliste en el documento editar.php de la raiz para poder ser editados.

  if($_GET['FOLIO']){ //Obtener los datos por medio del id
    $FOLIO = $_GET['FOLIO'];

    $sql= "SELECT * FROM formulario1 WHERE FOLIO = {$FOLIO}";
    $result= $conex->query($sql);

    $data= $result->fetch_assoc();

    $conex->close();
    //Se cierra la sesion en la BD.
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

    <!-- Fondo UiGradients Personalizado -->
    <link rel="stylesheet" href="../../css/bg-main.css">

    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CDN de animacion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!--CSS para las tarjetas -->
    <link rel="stylesheet" href="../../css/tarjeta-in.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
    
    <title>Subir cerificado</title>
  </head>
  <body>

    <!-- Inicio de contenidos -->
    <div class="container-fluid py-4">
        <div class="row" id="cita">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mx-auto">
                  <form action="actualizar_alumno2.php" method="POST" style="width: 500px;">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Datos del alumno</h2>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Apellido paterno:</label>
                          <input type="text" name="apellido_paterno" class="form-control mt-2" placeholder="Apellido paterno" value="<?php echo $data['apellido_paterno']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Apellido Materno:</label>
                          <input type="text" name="apellido_materno" class="form-control mt-2" placeholder="Apellido Materno" value="<?php echo $data['apellido_materno']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nombre completo:</label>
                          <input type="text" name="nombre" class="form-control mt-2" placeholder="Nombre completo" value="<?php echo $data['nombre']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">CURP:</label>
                          <input type="text" name="curp" class="form-control mt-2" placeholder="CURP" value="<?php echo $data['curp']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Fecha de nacimiento:</label>
                          <input type="date" name="fecha_nacimiento" class="form-control mt-2" placeholder="Fecha de nacimiento" value="<?php echo $data['fecha_nacimiento']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Edad:</label>
                          <input type="number" name="edad" class="form-control mt-2" placeholder="Edad" value="<?php echo $data['edad']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nacionalidad:</label>
                          <input type="text" name="nacionalidad" class="form-control mt-2" value="<?php echo $data['nacionalidad']?>" placeholder="Nacionalidad" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Primaria de estudio:</label>
                          <input type="text" name="primaria_estudio" class="form-control mt-2" value="<?php echo $data['primaria_estudio']?>" placeholder="Nombre de la primaria" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Telefono del alumno:</label>
                          <input type="text" name="telefono_alumno" class="form-control mt-2" placeholder="WhastApp" value="<?php echo $data['telefono_alumno']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Discapacidad:</label>
                          <input type="text" name="discapacidad" class="form-control mt-2" placeholder="Discapacidad del alumno" value="<?php echo $data['discapacidad']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Promedio de primaria:</label>
                          <input step="any" type="number" name="promedio_primaria" class="form-control mt-2" placeholder="Promedio" value="<?php echo $data['promedio_primaria']?>" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Certificado:</label>
                          <input style="background:rgba(0, 0, 0, 0); border-color: rgba(0, 0, 0, 0); color: black; margin-left: -13px;" class="form-control" type="file" id="formFile" name="certificado" value="<?php echo $data['certificado']?>">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <textarea class="form-control" id="exampleFomrControlTextarea1" name="tienes_hermanos" placeholder="¿Tienes hermanos aquí en la Escuela Secundaria Quetzalcóatl? Anótalo grado y grupo" cols="3" value="<?php echo $data['tienes_hermanos']?>" required></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <input type="hidden" name="FOLIO" value="<?php echo $data['FOLIO']?>"/>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <button class="btn btn-success btn-block" type="submit" name="registrar" value="Actualizar">Actualizar</button>
                      </div>
                      <div class="col-lg-12">
                        <a href="ver_alumnos.php"><button class="btn btn-primary btn-block" type="button" value="Regresar">Regresar</button></a>
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
<?php
  } 
 ?>