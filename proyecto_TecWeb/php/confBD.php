<?php
    session_start();
    $nombreServidor = "proyecto_web";
    $usuario = "localhost";
    $contrasenia = "";

    $conexion = mysqli_connect($usuario,"root",$contrasenia, $nombreServidor);
    if(!$conexion){
        die("Conexión fallida: " . $conexion->connect_error);
    }else{
        echo "Conexión establecida correctamente";
    }
?>