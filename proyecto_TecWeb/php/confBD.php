<?php
    session_start();
    $nombreServidor = "proyecto_web";
    $usuario = "";
    $contrasenia = "";

    $conexion = mysqli_connect("localhost","root","", $nombreServidor);
    if(!$conexion){
        die("Conexión fallida: " . $conexion->connect_error);
    }else{
        echo "Conexión establecida correctamente";
    }
?>