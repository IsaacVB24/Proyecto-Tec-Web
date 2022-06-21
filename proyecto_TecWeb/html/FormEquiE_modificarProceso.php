<?php
    session_start();
    include 'conexion.php';
    $boletaEquipo = $_REQUEST ['boletaEquipo'];
    $boletaA = $_SESSION ['usuario'];
    $nombreEquipo = $_POST['nombre'];
    $apellidosEquipo = $_POST['apellidos'];
    $telefonoEquipo = $_POST['telefono'];
    $emailEquipo = $_POST['email'];
    $imagen = addslashes (file_get_contents($_FILES['Imagen']['tmp_name']));
    
    $query = "UPDATE equipo  SET nombreEquipo='$nombreEquipo', apellidoEquipo='$apellidosEquipo',
    boletaEquipo = '$boletaEquipo',  correoEquipo='$emailEquipo', fotoEquipo = '$imagen', boletaA='$boletaA',
    telefonoEquipo='$telefonoEquipo' WHERE boletaEquipo = '$boletaEquipo'";

    $resultado = $conexion ->query($query);

    if($resultado){
       header ("Location: equipoE.php");
    }
    else{
        echo "No se inserto";
    }

?>