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
$mysop1 = mysqli_real_escape_string($db, $_POST["op1"]);
$mysop2 = mysqli_real_escape_string($db, $_POST["op2"]);
$mysop3 = mysqli_real_escape_string($db, $_POST["op3"]);
$mysrevte = mysqli_real_escape_string($db, $_POST["revte"]);
$mysnpclte = mysqli_real_escape_string($db, $_POST["npcliente"]);
$mysrevclte = mysqli_real_escape_string($db, $_POST["revcliente"]);
$mysstr1 = mysqli_real_escape_string($db, $_POST["str1"]);
$mysstr2 = mysqli_real_escape_string($db, $_POST["str2"]);
$mysstr3 = mysqli_real_escape_string($db, $_POST["str3"]);
$mysstr4 = mysqli_real_escape_string($db, $_POST["str4"]);
$mysstr5 = mysqli_real_escape_string($db, $_POST["str5"]);
$mysstr6 = mysqli_real_escape_string($db, $_POST["str6"]);
$mysstr7 = mysqli_real_escape_string($db, $_POST["str7"]);
$mysstr8 = mysqli_real_escape_string($db, $_POST["str8"]);
$mysstr9 = mysqli_real_escape_string($db, $_POST["str9"]);
$mysstr10 = mysqli_real_escape_string($db, $_POST["str10"]);

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

$insertar = "INSERT INTO performance (planta, tipo, id_esm, srecord, fechaes, wc, np, estacion, requiere, ingmanu, ingcal, resultado, tecspc, cavidades, op1, op2, op3, revte, npcliente, revcliente, str1, str2, str3, str4, str5, str6, str7, str8, str9, str10, ruta) VALUES('$mysplanta', '$mystipo', '$mysidesm', '$mystandard', '$mysfecha', '$myswc', '$mysnp', '$mysestacion', '$mysrequiere', '$mysmanu', '$myscalidad', '$mysresulta', '$mysspc', '$myscav', '$mysop1', '$mysop2', '$mysop3', '$mysrevte', '$mysnpclte', '$mysrevclte', '$mysstr1', '$mysstr2', '$mysstr3', '$mysstr4', '$mysstr5', '$mysstr6', '$mysstr7', '$mysstr8', '$mysstr9', '$mysstr10', '$loc')";







/*$insertar = "INSERT INTO estudio (tipo, spc, fecha, requesitor, calidad, manufactura, planta, wc, estacion, parte, caracteristica, sap, metrologia, metodo, resultado, comentario, ruta) VALUES('$mystipo', '$mysspc', '$mysfecha', '$mysrequesitor', '$myscalidad', '$mysmanufactura', '$mysplanta', '$myswc', '$mysestacion', '$myscaracteristica', '$myssap', '$mysmetrologia', '$mysmetodo', '$mysresulta', '$mysnotas', '$loc')";*/
$result= mysqli_query($db, $insertar);

if(!$result){
    echo 'Error al subir';
}else {
    header('location: sprmfmc.php');
}


?>