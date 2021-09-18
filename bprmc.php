<?php
   session_start();
   if(!isset($_SESSION['rol'])){
       header('location: index.php');
   }
  else{
       
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
        
         
        <form action="search.php" class="form-container" method= "post" align="center" enctype="multipart/form-data">
                
         
                <div class="form-row col-12 py-3 ">
                <div class="col-3">
                  <label for="exampleInputEmail1">Tipo de estudio</label>
                  <select class="custom-select" id="tipo" name="tipo" required>
    <option selected>Seleccione una-</option>
    <option value="GRR-V Vison">GRR-V Vision</option>
    <option value="GRR-V Medicion">GRR-V Medicion</option>
    <option value="GRR-A Electrica">GRR-A Electrica</option>
    <option value="GRR-A Medicion">GRR-A Medicion</option>
    <option value="CPK">CPK</option>
    <option value="Confiabilidad Electrica">Confiabilidad Electrica</option>
    <option value="Confiabilidad Horno">Confiabilidad Horno</option>
  </select>
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">Tec SPC</label>
                  <input type="name" class="form-control" name="spc" id="spc"  placeholder="..." >
                  </div>
                <div class="col-3">
                  <label for="exampleInputPassword1">Fecha</label>
                  <input type="name" class="form-control"  name="fecha" id="fecha"  placeholder="..." >
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">Requiere</label>
                  <input type="name" class="form-control" name="requesitor" id="requesitor"   placeholder="..." >
                </div>
                </div>







               
                <div class="form-row col-12 ">
                <div class="col-3">
                  <label for="exampleInputEmail1">Ing Calidad</label>
                  <input type="name" class="form-control" name="calidad" id="calidad"   placeholder="..." >
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">Ing Manufactura</label>
                  <input type="name" class="form-control" name="manufactura" id="manufactura"   placeholder="..." >
                  </div>
                <div class="col-3">
                  <label for="exampleInputPassword1">Planta</label>
                  <input type="name" class="form-control"  name="planta" id="planta"  placeholder="..." >
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">WC</label>
                  <input type="name" class="form-control" name="wc" id="wc"   placeholder="..." >
                </div>
                </div>
                

                <div class="form-row col-12 py-3">
                <div class="col-3">
                  <label for="exampleInputEmail1">Estacion</label>
                  <input type="name" class="form-control" name="estacion" id="estacion"   placeholder="..." >
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">No parte</label>
                  <input type="name" class="form-control" name="parte" id="parte"   placeholder="..." >
                  </div>                
                <div class=" col-3">
                  <label for="exampleInputPassword1">Caracterisitca</label>
                  <input type="name" class="form-control"  name="caracteristica" id="caracteristica"  placeholder="..." >
                  </div>
                  <div class=" col-3">
                  <label for="exampleInputEmail1">SAP</label>
                  <input type="name" class="form-control" name="sap" id="sap"   placeholder="..." >
                </div>
                </div>
               
                <div class="form-row col-12 ">
                <div class="col-3">
                  <label for="exampleInputEmail1">Metrologia</label>
                  <input type="name" class="form-control" name="metrologia" id="metrologia"   placeholder="..." >
                  </div>
                  <div class="col-3">
                  <label for="exampleInputEmail1">Metodo</label>
                  <input type="name" class="form-control" name="metodo" id="metodo"   placeholder="..." >
                  </div>                
                <div class=" col-3">
                  <label for="exampleInputPassword1">Resultado</label>
                  <input type="name" class="form-control"  name="resultado" id="resultado"  placeholder="..." >
                  </div>
                  <div class=" col-3">
                  <label for="exampleInputEmail1">Nota</label>
                  <input type="name" class="form-control" name="comentario" id="comentario"   placeholder="..." >
                </div>

  


                </div>

<div class="form-row col-12 py-3">

      <div class="col-3">
           <button type="submit" class="btn btn-primary btn-block">Enviar</button> 

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