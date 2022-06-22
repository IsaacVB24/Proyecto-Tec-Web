<?php

    $conexion = mysqli_connect("localhost", "root", "", "proyecto_web");
    
    if(!$conexion){
        die("Conexión fallida: " . $conexion->connect_error);
    }

?>