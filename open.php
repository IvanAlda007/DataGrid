<?php
    $conexion = new mysqli('localhost','id18339933_ivanestudios76','Mis_Datos0','id18339933_ivan');
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion";
    }

?>