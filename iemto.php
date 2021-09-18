<?php
include_once 'conexion.php';
session_start();





$mysplanta = mysqli_real_escape_string($db, $_POST["planta"]);
$mystipo = mysqli_real_escape_string($db, $_POST["tipo"]);
$mysidesm = mysqli_real_escape_string($db, $_POST["idesm"]);
$mystandard = mysqli_real_escape_string($db, $_POST["standard"]);
$mysfecha = mysqli_real_escape_string($db, $_POST["fecha"]);
$myswc = mysqli_real_escape_string($db, $_POST["wc"]);
$mysnp = mysqli_real_escape_string($db, $_POST["np"]);
$mysestacion = mysqli_real_escape_string($db, $_POST["estacion"]);
$mystestudio = mysqli_real_escape_string($db, $_POST["testudio"]);
$mysrequiere = mysqli_real_escape_string($db, $_POST["requiere"]);
$myscalidad = mysqli_real_escape_string($db, $_POST["calidad"]);
$mysmanu = mysqli_real_escape_string($db, $_POST["manu"]);
$mysfemto = mysqli_real_escape_string($db, $_POST["femto"]);
$mysresulta = mysqli_real_escape_string($db, $_POST["result"]);
$mysspc = mysqli_real_escape_string($db, $_POST["spc"]);
$mysentrenador = mysqli_real_escape_string($db, $_POST["entrenador"]);
$mysdeptoent = mysqli_real_escape_string($db, $_POST["depto"]);
$mysop = mysqli_real_escape_string($db, $_POST["op"]);
$mysdeptop = mysqli_real_escape_string($db, $_POST["deptop"]);
$myspieza = mysqli_real_escape_string($db, $_POST["piezas"]);

if($_FILES['archivo']["error"] > 0){
    echo "Error: " . $_FILES['archivo']["error"] . "<br>";
}
else{
    switch($mystipo){
        case 1:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'Entrenamiento/Crimpeados/'.$_FILES['archivo']['name']);
        $loc='Entrenamiento/Crimpeados/'.$_FILES['archivo']['name'];
        break;
        case 2:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'Entrenamiento/SuperCEP/'.$_FILES['archivo']['name']);
        $loc='Entrenamiento/SuperCEP/'.$_FILES['archivo']['name'];
        break;

        case 3:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'Entrenamiento/MSA/'.$_FILES['archivo']['name']);
        $loc='Entrenamiento/MSA/'.$_FILES['archivo']['name'];
        break;

        case 4:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'Entrenamiento/RFs/'.$_FILES['archivo']['name']);
        $loc='Entrenamiento/RFs/'.$_FILES['archivo']['name'];
        break;

        default:
    }
  
  
  
 
}

$insertar = "INSERT INTO entrenamiento (planta, tipo, equipo, standardre, fechaes, wc, np, estacion, testudio, requiere, calidad, manufactura, fentrenamiento, resultado, spc, entrenador, deptopen, operador, deptop, piezas, ruta) VALUES('$mysplanta', '$mystipo', '$mysidesm', '$mystandard', '$mysfecha', '$myswc', '$mysnp', '$mysestacion', '$mystestudio', '$mysrequiere', '$myscalidad', '$mysmanu', '$mysfemto', '$mysresulta', '$mysspc', '$mysentrenador', '$mysdeptoent', '$mysop', '$mysdeptop', '$myspieza', '$loc')";







/*$insertar = "INSERT INTO estudio (tipo, spc, fecha, requesitor, calidad, manufactura, planta, wc, estacion, parte, caracteristica, sap, metrologia, metodo, resultado, comentario, ruta) VALUES('$mystipo', '$mysspc', '$mysfecha', '$mysrequesitor', '$myscalidad', '$mysmanufactura', '$mysplanta', '$myswc', '$mysestacion', '$myscaracteristica', '$myssap', '$mysmetrologia', '$mysmetodo', '$mysresulta', '$mysnotas', '$loc')";*/
$result= mysqli_query($db, $insertar);

if(!$result){
    echo 'Error al subir';
}else {
    header('location: semto.php');
}


?>