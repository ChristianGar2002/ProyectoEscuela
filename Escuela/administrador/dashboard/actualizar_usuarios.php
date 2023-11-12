<?php require_once "vistas/parte_superior.php"?>
<?php
  require_once '../../conexion.php';
  //SE obtiene a traves del metodo GET el ID incrementado del campo FOLIO de la BD y se realiza una consulta que muestre y enliste en el documento editar.php de la raiz para poder ser editados.

  if($_GET['id']){ //Obtener los datos por medio del id
    $id = $_GET['id'];

    $sql= "SELECT * FROM usuarios WHERE id = {$id}";
    $result= $conex->query($sql);

    $data= $result->fetch_assoc();

    $conex->close();
    //Se cierra la sesion en la BD.
?>
<div class="container">
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
    
    <title>Actualizar usuarios</title>
  </head>
  <body>
    <!-- Inicio de contenidos -->
    <div class="container-fluid py-4">
      </div>
        <div class="row" id="cita">
          <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                  <form action="actualizar_usuarios2.php" method="POST" style="width: 500px; margin-top: -30px; margin-bottom: 20px;">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Actualizar usuarios</h2>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nombre de Completo:</label>
                          <input type="text" name="name" class="form-control mt-2 hola" value="<?php echo $data['name']?>" placeholder="Nombre:" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-weight-bold text-white">Nombre de Usuario:</label>
                          <input type="text" name="username" class="form-control mt-2 hola" value="<?php echo $data['username']?>" placeholder="Username:" required>
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
                            <select name="cargo" id="servicio" class="form-control mt-2" value="<?php echo $data['cargo']?>">
                              <option>Cargo:</option>
                              <option>Director</option>
                              <option>Docente</option>
                              <option>Secretaria</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-lg-12">
                          <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
                          </div>
                      </div>
                      <div class="col-lg-12">
                        <button class="btn btn-success btn-block" type="submit" name="reg_user" value="Actualizar">Actualizar</button>
                     </div>
                     <div class="col-lg-12">
                        <a href="ver_usuarios.php"><button class="btn btn-primary btn-block" type="button" value="Regresar">Regresar</button></a>
                     </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
    </div>
    <!-- Fin de contenidos -->


<?php
  } 
 ?>
<?php require_once "vistas/parte_inferior.php"?>