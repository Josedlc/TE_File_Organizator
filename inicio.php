<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: index.php');
}else{
 // if($_SESSION['rol'] != 2){
   // header('location: index.php');
//}
}
?>
<html>
    <head>
        <title>SPC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/global.css"/>
    </head>
    <body class="back">  
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Fileseen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Subir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="smsa.php">MSA</a>
          <a class="dropdown-item" href="scpk.php">CPK</a>
          <a class="dropdown-item" href="sconf.php">Confiabilidad</a>
          <a class="dropdown-item" href="sprfmc.php">Performance</a>
          <a class="dropdown-item" href="semto.php">Entrenamiento</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Manuales de referencia</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="registrar.php">Registrar</a>
      </li>

    </ul>



    <form action="sh.php" class="form-inline my-2 my-lg-0">
    <button type="submit" class="btn btn-outline-danger" >Salir</button>
    </form>
  </div>
</nav>




<div class="card-deck py-2">
  <div class="card">
    <img class="card-img-top" src="image/MSA.png" alt="Card image cap" >
    <div class="card-body">
      <h5 class="card-title">MSA</h5>
      <p class="card-text"></p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/Confiabilidad.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Confiabilidad</h5>
      <p class="card-text"></p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/Cpk.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Capacidad de procesos</h5>
      <p class="card-text"></p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="image/Performance.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Performance</h5>
      <p class="card-text"></p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/entrenamiento.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Entrenamiento</h5>
      <p class="card-text"></p>
      <a href="bemto.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/manual.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Manuales de referencia</h5>
      <p class="card-text"></p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>

    </body>

    </html>
