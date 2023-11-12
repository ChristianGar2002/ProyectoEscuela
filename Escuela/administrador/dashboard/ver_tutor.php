<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    
<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'secundaria');
?>   

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Footer Personalizado -->
    <link rel="stylesheet" href="../../css/footer.css">

    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CDN de animacion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!--CSS para las tarjetas -->
    <link rel="stylesheet" href="../../css/tarjeta-in.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
    
    <title>Consultar tutor</title>
  </head>
  <body>

    <!--Tabla de Boostrap-->
    <div class="container-fluid">
        <h1 class="display text-center" style="margin-top: -20px;">Consultar datos de los padres</h1>
        <br>
          <table class="table table-striped table-responsive text-center" id="tabla2">
            <thead class="thead-dark text-center">
                <tr>
                    <th>FOLIO</th>
                    <th>Nombre Completo</th>
                    <th>Ocupación</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Fecha de registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
             <?php
          $query=mysqli_query($conexion,"SELECT * FROM formulario1");
          $result = mysqli_num_rows($query);

          if($result > 0){ 
           while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                  <td><?php echo $data['FOLIO']; ?></td>
                  <td><?php echo $data['nombre_completo']; ?></td>
                  <td><?php echo $data['ocupacion']; ?></td>
                  <td><?php echo $data['correo']; ?></td>
                  <td><?php echo $data['telefono_tutor']; ?></td>
                  <td><?php echo $data['fecha_registro']; ?></td>
                  <td class="text-center">
                  <button type='button' class='btn btn-danger' data-toggle="modal" data-target="#EliminarATModal<?php echo $data['FOLIO']; ?>"><strong>Eliminar</strong></button>
                    <a href="actualizar_tutor.php?FOLIO=<?php echo $data['FOLIO']; ?>"class="btn btn-success"><strong>Editar</a></strong>
                  </td>
                </tr>
                <?php include('eliminar_alumno.php')?>
            <?php }
          } else{
            //Si la BD esta vacia o no tiene informacion de ex alumnos con codigo activo en 2 no mostrara datos y dira lo siguiente 
            echo "<tr> <td colspan='7'> <center>Datos no disponibles/ Base de datos vacia.</center></td></tr>";
          }
      ?>
          </table>

    </div>
    <!--Fin de la tabla de Boostrap-->
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>