<?php
    include("../php/conexion.php");
    
    //No sé si haga falta un session_start();
    $respAX = [];

    $boleta = $_POST['boleta'];
    $contrasenia = $_POST['contra'];
    $contrasenia = hash('sha512', $contrasenia); 

    $sentenciaValidacion = "SELECT boletaA, passwordA  FROM alumno WHERE boletaA = '$boleta'";
    $respSentValidacion = mysqli_query($conexion, $sentenciaValidacion);
    if(mysqli_num_rows($respSentValidacion) == 1){
        $respAX["cod"] = 1;
        $respAX["msj"] = "Bienvenido!";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Datos no reconocidos. Intente de nuevo.";
    }

    echo json_encode($respAX);
?>