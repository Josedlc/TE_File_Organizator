<!DOCTYPE html>
<html lang="es">
<head>
<title>SPC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/global.css"/>
    
        <style>
            table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #ddd;}
        </style>
 
 
<body>

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

<form class="py-4" action="dwnld.php"  method= "post" align="center">

        documento:<input type="text" name="age" id="age"><br><br>


        <div class="form-row col-12 ">
                <div class="col-4">
                  
                  </div>
                  <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block" value="subir archivo">Enviar</button>
                  </div>
                <div class="col-4">
                  
                  </div>
                </div>



</form>



<?php
include("conexion.php");
session_start();

$mysplanta = mysqli_real_escape_string($db, $_POST["planta"]);
$mysidesm = mysqli_real_escape_string($db, $_POST["idesm"]);
$mysstr = mysqli_real_escape_string($db, $_POST["standard"]);
$mystestudio = mysqli_real_escape_string($db, $_POST["testudio"]);
$mysop = mysqli_real_escape_string($db, $_POST["op"]);
$myswc = mysqli_real_escape_string($db, $_POST["wc"]);
$mysnp = mysqli_real_escape_string($db, $_POST["np"]);
$mysestacion = mysqli_real_escape_string($db, $_POST["estacion"]);

$insertar = "SELECT * FROM entrenamiento WHERE   equipo='$mysidesm' AND planta='$mysplanta' OR standardre='$mysstr' OR testudio='$mystestudio' OR operador='$mysop' OR wc='$myswc' OR np='$mysnp' OR estacion='$mysestacion'"; 

/* $insertar = "SELECT * FROM estudio WHERE tipo ='$mystipo' OR spc='$mysspc' OR fecha='$mysfecha' OR requisitor='$mysrequesitor' OR calidad='$myscalidad' OR manufactura ='$mysmanufactura' OR planta ='$mysplanta' OR wc='$myswc' OR estacion='$mysestacion' OR parte='$mysparte' OR caracteristica='$myscaracteristica' OR sap='$myssap' metrologia='$mysmetrologia' OR metodo='$mysmetodo' OR resultado='$mysresulta' OR comentario='$mysnotas'"; */


$result= mysqli_query($db, $insertar);



function tabular ($result){
$codigo = '<table id="table" border="1" cellpadding="3">';


$codigo .='<tr>';
$codigo .='<th>'."id".'</th>';
$codigo .='<th>'."planta".'</th>';
$codigo .='<th>'."Id eqp/sap/ma".'</th>';
$codigo .='<th>'."Fecha alta".'</th>';
$codigo .='<th>'."Fecha creacion".'</th>';
$codigo .='<th>'."Standard r".'</th>';
$codigo .='<th>'."WC".'</th>';
$codigo .='<th>'."Estacion".'</th>';
$codigo .='<th>'."Fase de entrenamiento".'</th>';
$codigo .='<th>'."Resultado".'</th>';
/*$codigo .='<th>'."SAP".'</th>';
$codigo .='<th>'."Metrologia".'</th>';
$codigo .='<th>'."Metodo".'</th>';
$codigo .='<th>'."Resultado".'</th>';*/
$codigo .='<th>'."Operador".'</th>';
$codigo .='<th>'."Ruta".'</th>';



$codigo .='</tr>';

//Vamos acumulando de a una fila "tr" por vuelta:
while ($fila = @mysqli_fetch_array($result) ) {



$codigo .= '<tr>';

//vamos acumulando tantos "td" como sea necesario:

$codigo .= '<td>'.utf8_encode($fila["id"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["planta"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["equipo"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["fechaalt"]) .'</td>';
$codigo .= '<td>'.utf8_encode($fila["fechaes"]) .'</td>';
$codigo .= '<td>'.utf8_encode($fila["standardre"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["wc"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["estacion"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["fentrenamiento"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["resultado"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["operador"]).'</td>';
/*$codigo .= '<td>'.utf8_encode($fila["sap"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["metrologia"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["metodo"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["resultado"]).'</td>';
$codigo .= '<td>'.utf8_encode($fila["comentario"]).'</td>';*/
$codigo .= '<td>'.utf8_encode($fila["ruta"]).'</td>';





//cerramos un "tr":
$codigo .= '</tr>';
}
//finalizandoell bucle, cerramos por unica vez la tabla:
$codigo .='</table>';


return $codigo;
}

$mostrar= tabular($result);

echo "$mostrar";

?>




<script>
    
    var table = document.getElementById('table');
    
    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
           //  document.getElementById("fname").value = this.cells[0].innerHTML;
            // document.getElementById("lname").value = this.cells[1].innerHTML;
             document.getElementById("age").value = this.cells[11].innerHTML;
        };
    }

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>

</body>
</html>