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
      <li class="nav-item">
        <a class="nav-link" href="registrar.php">Registrar</a>
      </li>
    </ul>
    <form action="sh.php" class="form-inline my-2 my-lg-0">
    <button type="submit" class="btn btn-outline-danger" >Salir</button>
    </form>
  </div>
</nav>


<section class="container-fluid ">

    <section class="col-12"></section>
    <section class="row justify-content-center"> 
        
         
        <form action="imsa.php" class="form-container" method= "post" align="center" enctype="multipart/form-data">
                
         <div class="form-row col-12 py-3">
                
                <div class="col-6">
                  <label for="exampleInputEmail1">Seleccione la planta</label>
                  <select class="custom-select" id="planta" name="planta" required>
    <option selected>Seleccione una-</option>
    <option value="Planta 2">Planta 2</option>
    <option value="Planta 5">Planta 5</option>
    
  </select>
                  </div>
                  <div class="col-6">
                  <label for="exampleInputEmail1">Seleccione tipo</label>
                  <select class="custom-select" id="tipo" name="tipo" required>
    <option selected>Seleccione uno-</option>
    <option value="1">Bias</option>
    <option value="2">GRR Anidados</option>
    <option value="3">GRR Atributos</option>
    <option value="4">GRR Variables</option>
    
  </select>
                  </div>

                  </div>
                  <div class="form-row col-12 py-3 ">
                  <div class="col-3">
                  <label for="exampleInputEmail1">ID equipo/sap/maquina</label>
                  <input type="name" class="form-control" name="idesm" id="idesm"  placeholder="..." required>
                  </div>
                <div class="col-3">
                  <label for="exampleInputPassword1">Standard record</label>
                  <input type="name" class="form-control"  name="standard" id="standard"  placeholder="..." required>
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">Fecha de estudio</label>
                  <input type="name" class="form-control" name="fecha" id="fecha"   placeholder="AAAA-MM-DD" required>
                
                </div>
                <div class="col-3">
                  <label for="exampleInputEmail1">WC/Area</label>
                  <input type="name" class="form-control" name="wc" id="wc"   placeholder="..." required>
                  </div>
                </div>







               
                <div class="form-row col-12 ">
                
                  <div class="col-3">
                  <label for="exampleInputEmail1">NP</label>
                  <input type="name" class="form-control" name="np" id="np"   placeholder="..." required>
                  </div>
                <div class="col-3">
                  <label for="exampleInputPassword1">Estacion</label>
                  <input type="name" class="form-control"  name="estacion" id="estacion"  placeholder="..." required>
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">Requiere</label>
                  <input type="name" class="form-control" name="requiere" id="requiere"   placeholder="..." required>
                </div>
                <div class="col-3">
                  <label for="exampleInputEmail1">Ing. manufactura</label>
                  <input type="name" class="form-control" name="manu" id="manu"   placeholder="..." required>
                  </div>
                </div>
                

                <div class="form-row col-12 py-3">
                
                  <div class="col-3">
                  <label for="exampleInputEmail1">Ing. calidad</label>
                  <input type="name" class="form-control" name="calidad" id="calidad"   placeholder="..." required>
                  </div>                
                <div class=" col-3">
                  <label for="exampleInputPassword1">Resultado</label>
                  <input type="name" class="form-control"  name="resultado" id="resultado"  placeholder="..." required>
                  </div>
                  <div class=" col-3">
                  <label for="exampleInputEmail1">Tec SPC</label>
                  <input type="name" class="form-control" name="spc" id="spc"   placeholder="..." required>
                </div>
                <div class="col-3">
                  <label for="exampleInputEmail1">Cavidades</label>
                  <input type="name" class="form-control" name="cavidades" id="cavidades"   placeholder="..." required>
                  </div>
                </div>
               
                <div class="form-row col-12 ">
                
                  <div class="col-3">
                  <label for="exampleInputEmail1">Comentarios</label>
                  <input type="name" class="form-control" name="coment" id="coment"   placeholder="..." required>
                  </div>                
                <div class=" col-3">
                  <label for="exampleInputPassword1">Operador 1</label>
                  <input type="name" class="form-control"  name="op1" id="op1"  placeholder="..." required>
                  </div>
                  <div class=" col-3">
                  <label for="exampleInputEmail1">Operador 2</label>
                  <input type="name" class="form-control" name="op2" id="op2"   placeholder="..." required>
                </div>

                <div class=" col-3">
                  <label for="exampleInputEmail1">Operador 3</label>
                  <input type="name" class="form-control" name="op3" id="op3"   placeholder="..." required>
                </div>


                </div>

<div class="form-row col-12 py-3">

      <div class="col-3">
           <button type="submit" class="btn btn-primary btn-block">Enviar</button> 

</div>


<div class=" col-4">
    <input type="file" class="form-control-file" id="archivo" name="archivo">

     

  </div>

  </div>
              </form>
    
     
    
              
   </section> 
    
      </section>
    




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>

      </body>
</html>