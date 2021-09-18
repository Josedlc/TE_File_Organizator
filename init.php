<?php
   session_start();
   if(!isset($_SESSION['rol'])){
       header('location: index.php');
   }
  else{
       if($_SESSION['rol'] != 1){
           header('location: index.php');
       }
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
    <img class="card-img-top" src="image/vision.jpg" alt="Card image cap" >
    <div class="card-body">
      <h5 class="card-title">GRR-V vision</h5>
      <p class="card-text">.</p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/electrica.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">GRR-A electrica</h5>
      <p class="card-text">.</p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/horno.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Confiabilidad horno</h5>
      <p class="card-text">.</p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="image/elect2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Confiabilidad electrica</h5>
      <p class="card-text">.</p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/de-medicion.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">GRR-V medicion</h5>
      <p class="card-text">.</p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/medicion2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">GRR-A medicion</h5>
      <p class="card-text">.</p>
      <a href="busqueda.php" class="btn btn-primary">Buscar</a>
    </div>
  </div>
</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    </body>

    </html>
