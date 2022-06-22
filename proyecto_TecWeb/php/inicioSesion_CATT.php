<?php
    include("../php/conexion.php");
    
    //No sé si haga falta un session_start();
    $respAX = [];
/*
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contra'];
*/
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contra'];
    $contrasenia = hash('sha512', $contrasenia); 

    $sentenciaValidacion = "SELECT correo, passwordCATT  FROM catt WHERE correo = '$correo' AND passwordCATT = '$contrasenia'";
    $respSentValidacion = mysqli_query($conexion, $sentenciaValidacion);
    if(mysqli_num_rows($respSentValidacion) == 1){
        $respAX["cod"] = 1;
        $respAX["msj"] = "Bienvenido!";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Datos no reconocidos. Intente de nuevo.";
    }

    echo json_encode($respAX);


    /*
    ) Para la CATT: Dashboard para gestión completa (CRUD) de alumnos, tts y docentes
2) Registro del alumno condicionado a confirmación de éste vía correo electrónico
3) La CATT, desde el Dashboard, para cada TT que ya se le haya asignado sinodales, podrá enviar un correo electrónico a su alumno representante que incluye un archivo PDF con la información completa del mismo (título, número de registro, resumen, integrantes, directores, sinodales).

    */
?>

