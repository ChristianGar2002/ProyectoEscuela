<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    
    
    
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CDN de animacion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- CSS de cita -->
    <link rel="stylesheet" href="../../css/escuela.css">

    <!--Icono de la pestaña -->
    <link rel="icon" href="../../img/logoquetzalt.jpg">
    
    <title>Administrador</title>
  </head>
  <body>

    <!-- Inicio de contenidos -->
    <div class="container-fluid">
      <div class="jumbotron mt-4 animate__bounceIn">
        <h1 class="display text-center" style="margin-top: -20px;">¡Bienvenido Administrador!</h1>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../img/computacion.jpg" class="d-block w-100" width="370" height="450" alt="Foto 1">
            </div>
            <div class="carousel-item">
              <img src="../../img/pintura.jpg" class="d-block w-100" width="370" height="450" alt="Foto 2">
            </div>
            <div class="carousel-item">
              <img src="../../img/electronica.png" class="d-block w-100" width="370" height="450" alt="Foto 3">
            </div>
            <div class="carousel-item">
              <img src="../../img/dibujo.jpg" class="d-block w-100" width="370" height="450" alt="Foto 4">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <h2 class="display text-left">Administrador</h2>
            <p class="lead text-justify">En este apartado tendras la posibilidad de crear preinscripciones en caso de que sea necesario, ademas de que podra eliminar y actualizar las preinscripciones hechas por los padre de familia. Tambien puede vizualizar usuarios teniendo la posibilidad de registrarlos, actualizarlos y eliminarlos.</p>
      </div>
    </div>
    <!-- Fin de contenidos -->
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>