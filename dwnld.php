<?php
$variable1 = $_POST["age"];

    if( file_exists($variable1) )
    {
        // Enviamos el PDF al cliente
         header("Content-type: application/pdf");
         header("Content-Disposition: attachment; filename=".$variable1);
         header("Content-length: ".filesize($variable1));
         readfile($variable1);
    }else{
        echo"Ha ocurrido un problema";

      
    }
    

    ?>