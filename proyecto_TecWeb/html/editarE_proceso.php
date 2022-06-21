<?php
    session_start();
    include 'conexion.php';
    $boleta = $_SESSION ['usuario'];
    $semestre = $_POST['semestre'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $imagen = addslashes (file_get_contents($_FILES['Imagen']['tmp_name']));
    
    
    $query = "UPDATE alumno  SET boletaA = '$boleta', semestreA='$semestre', nombreA='$nombre',
    apellidosA='$apellidos', correoA='$email', telefonoA='$telefono', imagen = '$imagen' 
    WHERE boletaA = '$boleta'";

    $resultado = $conexion ->query($query);

    if($resultado){
       header ("Location: inicioE.php");
    }
    else{
        echo "No se inserto";
    }

?>