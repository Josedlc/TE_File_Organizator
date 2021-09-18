<?php
include_once 'conexion.php';
   session_start();
   if(!isset($_SESSION['rol'])){
       header('location: index.php');
   }
  else{
       if($_SESSION['rol'] != 1){
           header('location: index.php');
       }
   }

   if(!empty($_POST))
   {
       $usuario = mysqli_real_escape_string($db,$_POST['username']);
       $name = mysqli_real_escape_string($db,$_POST['name']);
       $password = mysqli_real_escape_string($db,$_POST['password']);
       $rol = mysqli_real_escape_string($db,$_POST['rol']);
       $error = '';


       $sql = "INSERT INTO user(nombre, username, password, rol_id) VALUES('$name', '$usuario', '$password', '$rol')";
       $result = mysqli_query($db,$sql);
      

       if(!$result){
        echo 'Error al registrarse';
    }else {
        header('location: registrar.php');
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
        <a class="nav-link" href=""></a>
      </li>

    </ul>
   



    <form action="sh.php" class="form-inline my-2 my-lg-0">
    <button type="submit" class="btn btn-outline-danger" >Salir</button>
    </form>
  </div>
</nav>




<section class="container-fluid ">
    
<section class="row justify-content-center">
    <section class="col-12"></section>
    
    <form class="form-container" method= "post" >
            
            
    <div style = "font-size:30px; color:#1c0d02; margin-top:3px; margin-bottom:10px; text-align:center">Registro</div>
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="name" class="form-control" name="username" id="username"  placeholder="Ingrese usuario" required>
              
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
              <input type="name" class="form-control" name="name" id="name"  placeholder="Ingrese nombre" required >
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Contraseña</label>
              <input type="name" class="form-control"  name="password" id="password" placeholder="Ingrese su Contraseña" required>
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Rol </label>
              <input type="name" class="form-control"  name="rol" id="rol" placeholder="Ingrese el valor correcto" required>
              <small id="emailHelp" class="form-text text-muted">Ingrese 1 para admin, 2 para usuario comun.</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
         
            
          </form>



          
</section>

  </section>






  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>

    </body>

    </html>
