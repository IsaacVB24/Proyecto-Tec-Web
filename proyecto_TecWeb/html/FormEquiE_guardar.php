   <?php
    session_start();
    include 'conexion.php';

    $boletaA = $_SESSION ['usuario'];
    $boletaEquipo = $_POST['boleta'];
    $nombreEquipo = $_POST['nombre'];
    $apellidosEquipo = $_POST['apellidos'];
    $telefonoEquipo = $_POST['telefono'];
    $emailEquipo = $_POST['email'];
    $imagen = addslashes (file_get_contents($_FILES['Imagen']['tmp_name']));
    
    $query  = "INSERT INTO equipo (nombreEquipo, apellidoEquipo,	boletaEquipo,	correoEquipo,	fotoEquipo,	boletaA, telefonoEquipo) 
    VALUES ( '$nombreEquipo', '$apellidosEquipo', '$boletaEquipo', '$emailEquipo', '$imagen', '$boletaA', '$telefonoEquipo')";
      
     
    //Verificar que haya menos de 4 integrantes 
    $verificarEquipo =  mysqli_query ($conexion, "SELECT * FROM equipo where boletaA ='$boletaA'");
    if (mysqli_num_rows($verificarEquipo) >= 4){
      echo '<script>
            alert ("No puedes agregar más personas a tu equipo.");
            window.location = "equipoE.php";
          </script>';
      exit;
    }
    
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar){
      echo '<script>
              alert ("Agregado exitsamente");
              window.location = "equipoE.php";
            </script>';
     } 

?>