<?php require_once "vistas/parte_superior.php"?>

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
    <link rel="stylesheet" href="../../css/tarjeta-in.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
    
    <title>Subir cerificado</title>
  </head>
  <body>

    <!-- Inicio de contenidos -->
    <div class="container-fluid py-4">
        <div class="row" id="cita" style="margin-right: auto; margin-left: auto;">
            <div class="row" style="margin-right: auto; margin-left: auto;">
              <div class="col-md-12 mx-auto">
                  <form action="accion_preeinscripcion_admin.php" method="POST">
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
                              <option>Taller de diseño y creación plástica(Pintura)</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico(Dibujo)</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la segunda carrera:</label>
                            <select name="carrera_2" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica(Pintura)</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico(Dibujo)</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la tercer carrera:</label>
                            <select name="carrera_3" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica(Pintura)</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico(Dibujo)</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Selecciona la cuarta carrera:</label>
                            <select name="carrera_4" id="servicio" class="form-control mt-2">
                              <option>Carreras:</option>
                              <option>Taller de informatica (Computación)</option>
                              <option>Taller de diseño y creación plástica(Pintura)</option>
                              <option>Taller de electrónica, comunicación y sistemas de control (Electrónica)</option>
                              <option>Taller de diseño arquitectónico(Dibujo)</option>
                            </select>
                          </div>
                        </div>
                    </div>
                      <div class="col-lg-8" style="margin-right: auto; margin-left: auto;">
                        <button class="btn btn-primary btn-block" type="submit" name="registrar" value="Enviar">Enviar</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>

    
    <!-- Fin de contenidos -->
<?php require_once "vistas/parte_inferior.php"?>