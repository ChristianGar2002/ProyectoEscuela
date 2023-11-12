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
    
    <title>Consultar usuarios</title>
  </head>
  <body>
  <!--Tabla de Boostrap-->
  <div class="container-fluid">

        <h1 class="display text-center" style="margin-top: -20px;">Consultar usuarios</h1>
        <br>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false">
            Formas de exportar la BD
          </button>
          <div class="dropdown-menu" aria-labelledby="btn-GroupDrop1">
            <a class="dropdown-item" href="excelusuario.php">Exportar a Excel</a>
            <a class="dropdown-item" href="PDF/crear_pdf_usuario.php">Exportar a PDF</a>
          </div>    
        </div>
      </div>
      <br>
      <br>
    <table class="table table-striped table-responsive text-center" id="tabla2">
      <thead class="thead-dark text-center">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Nombre de usuario</th>
          <th>Cargo</th>
          <th>Contraseña</th>
          <th>Fecha de registro</th>
          <th>Acciones</th>
        </tr>
      </thead>
     <?php
          $query=mysqli_query($conexion,"SELECT * FROM usuarios");
          $result = mysqli_num_rows($query);

          if($result > 0){ 
           while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                  <td><?php echo $data['id']; ?></td>
                  <td><?php echo $data['name']; ?></td>
                  <td><?php echo $data['username']; ?></td>
                  <td><?php echo $data['cargo']; ?></td>
                  <td><?php echo $data['password']; ?></td>
                  <td><?php echo $data['fecha_registro']; ?></td>
                  <td class="text-center">
                  <button type='button' class='btn btn-danger' data-toggle="modal" data-target="#EliminarUsuarioModal<?php echo $data['id']; ?>"><strong>Eliminar</strong></button>
                    <a href="actualizar_usuarios.php?id=<?php echo $data['id']; ?>"class="btn btn-success"><strong>Editar</a></strong>
                  </td>
                </tr>
                <?php include('eliminar_usuario.php')?>
            <?php }
          } else{
            //Si la BD esta vacia o no tiene informacion de ex alumnos con codigo activo en 2 no mostrara datos y dira lo siguiente 
            echo "<tr> <td colspan='8'> <center>Datos no disponibles/ Base de datos vacia.</center></td></tr>";
          }
      ?>
      </table>
  
    </div>
  <!--Fin de la tabla de Boostrap-->
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>