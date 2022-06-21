<?php
    session_start();
    include 'conexion.php';

    $boletaEquipo = $_REQUEST ['boletaEquipo'];
    
    $query = "DELETE FROM equipo  WHERE boletaEquipo = '$boletaEquipo'";

    $resultado = $conexion ->query($query);

    if($resultado){
        header ("Location: equipoE.php");
    }
    else{
        echo "No se elimino, vuelva a intentarlo";
    }

?>