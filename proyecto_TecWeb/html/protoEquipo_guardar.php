<?php
    session_start();
    include 'conexion.php';

    $boleta = $_SESSION ['usuario'];
    $titulo = $_POST['titulo'];
    $resumen = $_POST['resumen'];
    $director1 = $_POST['director1'];
    $director2 = $_POST['director2'];
    $fichero = addslashes (file_get_contents($_FILES['fichero']['tmp_name']));
    
    $query  = "INSERT INTO trabajoterminal (titulo,	pdf, boleta, resumen) 
    VALUES ( '$titulo', '$fichero', '$boleta', '$resumen')";
    
    //Verificar que no haya un protocolo registrado
    $verificarProto =  mysqli_query ($conexion, "SELECT * FROM trabajoterminal where boleta ='$boleta'");
    if (mysqli_num_rows($verificarProto) > 0){
      echo '<script>
            alert ("Ya has registrado un protocolo antes.");
            window.location = "protoEquipo.php";
          </script>';
      exit;
    }
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar){
      echo '<script>
              alert ("Registrado exitsamente");
              window.location = "protoEquipo1.php";
            </script>';
    } 

?>