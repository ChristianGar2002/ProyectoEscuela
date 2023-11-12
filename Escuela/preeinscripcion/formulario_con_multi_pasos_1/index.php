<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Formulario con Multi-Pasos Responsive</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link href="assets/css/gsdk-bootstrap-wizard.css" type="text/css" rel="stylesheet"/>
	<link href="assets/css/home.css" type="text/css" rel="stylesheet"/>
    <link href="assets/css/cargando.css" rel="stylesheet" type="text/css">
  <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Fondo UiGradients Personalizado -->
    <link rel="stylesheet" href="../../css/bg-main2.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
</head>
<body>

<!-- cargando -->
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
<nav class="navbar navbar-default" style="border-color: rgba(0, 0, 0, 0);">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../index.php" style="color: white;font-size: 16px;">
        <i class="fas fa-home"></i> Home <span class="sr-only">(current)</span>
      </a>
            <a class="nav-link" href="../mision.php"><i class="fas solid fa-bullseye-arrow"></i> Misión <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="../vision.php"><i class="fas solid fa-eye"></i> Visión <span class="sr-only">(current)</span></a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa solid fa-copyright"></i> Talleres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="informatica.php">Taller de informatica (Computación)</a>
              <a class="dropdown-item" href="diseño.php">Taller de diseño y creación plástica (Pintura)</a>
              <a class="dropdown-item" href="electronica.php">Taller de electrónica, comunicación y sistemas de control (Electrónica)</a>
              <a class="dropdown-item" href="arquitectonico.php">Taller de diseño arquitectónico (Dibujo)</a>
            </div>
      
    </div>
  </div>
</nav>

<div class="image-container set-full-height">

    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="wizard-container">
                <div class="card wizard-card" data-color="orange" id="wizardProfile" style="margin-bottom: 20px; margin-top: -40px;">
                    <form method="post">
                    	<div class="wizard-header">
                        	<h3> Formulario de Preeinscripción </h3>
                    	</div>

      					     <div class="wizard-navigation">
          	             <ul>
                            <li><a href="#about" data-toggle="tab">Paso 1</a></li>
                            <li><a href="#account" data-toggle="tab">Paso 2</a></li>
                         </ul>
      					     </div>

                        <div class="tab-content">
                           <div class="wizard-header">
                                <h4 class="text-uppercase mt-3 font-weight-bold text-white text-center" style="margin-bottom: 20px;">Datos del alumno</h4>
                              </div>
                            <div class="tab-pane" id="about">
                              <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold text-white">Apellido paterno:</label>
                                        <input type="text" name="apellido_paterno" class="form-control mt-2" placeholder="Apellido paterno" required>
                                    </div>
                                </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Apellido Materno:</label>
                                      <input type="text" name="apellido_materno" class="form-control mt-2"  placeholder="Apellido Materno" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Nombre completo:</label>
                                      <input type="text" name="nombre" class="form-control mt-2" placeholder="Nombre completo" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">CURP:</label>
                                      <input type="text" name="curp" class="form-control mt-2" placeholder="CURP" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Fecha de nacimiento:</label>
                                      <input type="date" name="fecha_nacimiento" class="form-control mt-2" placeholder="Fecha de nacimiento" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Edad:</label>
                                      <input type="number" name="edad" class="form-control mt-2" placeholder="Edad" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Nacionalidad:</label>
                                      <input type="text" name="nacionalidad" class="form-control mt-2" placeholder="Nacionalidad" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Primaria de estudio:</label>
                                      <input type="text" name="primaria_estudio" class="form-control mt-2" placeholder="Nombre de la primaria" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Telefono del alumno:</label>
                                      <input type="text" name="telefono_alumno" class="form-control mt-2" placeholder="WhastApp" required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">Discapacidad:</label>
                                      <input type="text" name="discapacidad" class="form-control mt-2" placeholder="Discapacidad del alumno">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label class="font-weight-bold text-white">¿Tienes hermanos?</label>
                                      <textarea class="form-control" id="exampleFomrControlTextarea1" name="tienes_hermanos" placeholder="¿Tienes hermanos aquí en la Escuela Secundaria Quetzalcóatl? Anótalo grado y grupo" cols="3"></textarea>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!--fin tab 1 -->


                            <div class="tab-pane" id="account">
                              <div class="wizard-header">
                                <h4 class="text-uppercase mt-3 font-weight-bold text-white text-center" style="margin-bottom: 20px;">Datos del Tutor</h4>
                              </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Nombre completo:</label>
                                        <input type="text" name="nombre_completo" class="form-control mt-2" placeholder="Nombre completo" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Ocupación del tutor:</label>
                                        <input type="text" name="ocupacion" class="form-control mt-2" placeholder="Ocupación del tutor" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Estudio máximo:</label>
                                        <input type="text" name="estudio_maximo" class="form-control mt-2" placeholder="Estudio máximo" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Domicilio:</label>
                                        <input type="text" name="domicilio" class="form-control mt-2" placeholder="Domicilio" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Colonia:</label>
                                        <input type="text" name="colonia" class="form-control mt-2" placeholder="Colonia" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Localidad:</label>
                                        <input type="text" name="localidad" class="form-control mt-2" placeholder="Localidad" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Municipio:</label>
                                        <input type="text" name="municipio" class="form-control mt-2" placeholder="Municipio" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Código postal:</label>
                                        <input type="number" name="codigo_postal" class="form-control mt-2" placeholder="Código postal" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Estado:</label>
                                        <input type="text" name="estado" class="form-control mt-2" placeholder="Estado" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Correo electronico:</label>
                                        <input type="email" name="correo" class="form-control mt-2" placeholder="Email" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Teléfono del tutor:</label>
                                        <input type="number" name="telefono_tutor" class="form-control mt-2" placeholder="Teléfono" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="font-weight-bold text-white">Teléfono de algún familiar:</label>
                                        <input type="number" name="telefono_familiar" class="form-control mt-2" placeholder="Teléfono del familiar">
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                            </div>
                            <!--fin tab 2 -->

                        </div>

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                            <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm siguiente' name='next' value='Siguiente'/>
                                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='registrar' value='Fin' />
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Atrás' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            </div>
                        </div>
                        <?php
                          include("accion_preeinscripcion.php")
                        ?>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div> 
</div>


	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){
      $(window).load(function() {
            $(".cargando").fadeOut(1000);
        }); 
    }); 
</script>
  <!-- Inicio del Footer -->
    <footer style="position: relative;bottom: 0;background-color: black;height: 100px;color: white;"class="text-center">
            <p>Diseñado y maquetado por: Christian Garcia Vazquez, Francisco Amigon Gonzales,<br> Jose Julian Jaimez Torrez, Manuel Chavez Avila, Francisco Javier Gomez Ramirez. &copy; 2021</p>
            <p>Contactar a: <a href="mailto:20307019@utcgg.edu.mx">Administrador del Sitio. </a></p>
    </footer>
    <!-- Fin del Footer -->
</body>
</html>
