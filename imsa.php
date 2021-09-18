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
$mysrequiere = mysqli_real_escape_string($db, $_POST["requiere"]);
$mysmanu = mysqli_real_escape_string($db, $_POST["manu"]);
$myscalidad = mysqli_real_escape_string($db, $_POST["calidad"]);
$mysresulta = mysqli_real_escape_string($db, $_POST["resultado"]);
$mysspc = mysqli_real_escape_string($db, $_POST["spc"]);
$myscav = mysqli_real_escape_string($db, $_POST["cavidades"]);
$myscomen = mysqli_real_escape_string($db, $_POST["coment"]);
$mysop1 = mysqli_real_escape_string($db, $_POST["op1"]);
$mysop2 = mysqli_real_escape_string($db, $_POST["op2"]);
$mysop3 = mysqli_real_escape_string($db, $_POST["op3"]);

if($_FILES['archivo']["error"] > 0){
    echo "Error: " . $_FILES['archivo']["error"] . "<br>";
}
else{
    switch($mystipo){
        case 1:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'MSA/Bias/'.$_FILES['archivo']['name']);
        $loc='MSA/Bias/'.$_FILES['archivo']['name'];
        break;
        case 2:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'MSA/GRR Anidados/'.$_FILES['archivo']['name']);
        $loc='MSA/GRR Anidado/'.$_FILES['archivo']['name'];
        break;

        case 3:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'MSA/GRR Atributos/'.$_FILES['archivo']['name']);
        $loc='MSA/Atributos/'.$_FILES['archivo']['name'];
        break;

        case 4:
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'MSA/GRR Variables/'.$_FILES['archivo']['name']);
        $loc='MSA/GRR Variables/'.$_FILES['archivo']['name'];
        break;

        default:
    }
  
  
  
 
}

$insertar = "INSERT INTO estudio (planta, tipo, id_esm, srecord, fechaes, wc, np, estacion, requiere, ingmanu, ingcal, resultado, tecspc, cavidades, comentarios, op1, op2, op3, ruta) VALUES('$mysplanta', '$mystipo', '$mysidesm', '$mystandard', '$mysfecha', '$myswc', '$mysnp', '$mysestacion', '$mysrequiere', '$mysmanu', '$myscalidad', '$mysresulta', '$mysspc', '$myscav', '$myscomen', '$mysop1', '$mysop2', '$mysop3', '$loc')";







/*$insertar = "INSERT INTO estudio (tipo, spc, fecha, requesitor, calidad, manufactura, planta, wc, estacion, parte, caracteristica, sap, metrologia, metodo, resultado, comentario, ruta) VALUES('$mystipo', '$mysspc', '$mysfecha', '$mysrequesitor', '$myscalidad', '$mysmanufactura', '$mysplanta', '$myswc', '$mysestacion', '$myscaracteristica', '$myssap', '$mysmetrologia', '$mysmetodo', '$mysresulta', '$mysnotas', '$loc')";*/
$result= mysqli_query($db, $insertar);

if(!$result){
    echo 'Error al subir';
}else {
    header('location: smsa.php');
}


?>