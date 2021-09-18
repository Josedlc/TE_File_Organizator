<?php
     require('conexion.php');

     session_start();
    
    
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: inicio.php');
            break;
            case 2:
            header('location: inicio.php');
            break;
            default:
        }
    }

    if(!empty($_POST))
    {
        $usuario = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $error = '';


        $sql = "SELECT * FROM user WHERE username = '$usuario' AND password = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_NUM);


        if($row == true){
          // validar rol
          $rol = $row[4];
          $_SESSION['rol'] = $rol;
          switch($_SESSION['rol']){
              case 1:
                  header('location: inicio.php');
              break;
  
              case 2:
              header('location: inicio.php');
              break;
  
              default:
          }
      }else{
          // no existe el usuario
          echo "El usuario o contraseña son incorrectos";
      }
  }
    
?>
  


<!DOCTYPE html>
<html>
    <head>
        <title>SPC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/global.css"/>
    </head>
<body class="back">  
 



  <section class="container-fluid ">
    
<section class="row justify-content-center">
    <section class="col-12"></section>
    <div align="center" style="margin-top:10px" >
      <img src="image/df.png" width="250" height="120">
      
      </div>
    <form class="form-container" method= "post" >
            
            
    <div style = "font-size:30px; color:#1c0d02; margin-top:3px; margin-bottom:10px; text-align:center">Login</div>
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="name" class="form-control" name="username" id="username"  placeholder="Ingrese usuario">
              <small id="emailHelp" class="form-text text-muted">Si lo olvido comuniquese con sistemas.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control"  name="password" id="password" placeholder="Ingrese su Contraseña">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
         
            
          </form>



          
</section>

  </section>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>


</html>