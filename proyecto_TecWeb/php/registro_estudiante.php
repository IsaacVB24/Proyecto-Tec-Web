   <?php
     include 'conexion.php';

    $boletaAlumno = $_POST['boletaAlumno'];
    $semestreAlumno = $_POST['semestreAlumno'];
    $nombreAlumno = $_POST['nombreAlumno'];
    $apellidosAlumno = $_POST['apellidosAlumno'];
    $telefonoAlumno = $_POST['telefonoAlumno'];
    $emailAlumno = $_POST['emailAlumno'];
    $contraAlumno = $_POST['contraAlumno'];
    $imagen = addslashes (file_get_contents($_FILES['Imagen']['tmp_name']));
    

  
    /*Encriptar contraseña*/
    $contraAlumno = hash('sha512', $contraAlumno);    

    $query = "INSERT INTO alumno (boletaA, nombreA, apellidosA, telefonoA, correoA, passwordA, semestreA, imagen) 
                           VALUES ('$boletaAlumno', '$nombreAlumno', '$apellidosAlumno', '$telefonoAlumno', '$emailAlumno', '$contraAlumno', '$semestreAlumno',  '$imagen')";

   /*Verificar correo*/
   $Verificar_correo = mysqli_query ($conexion, "SELECT * FROM alumno WHERE correoA='$emailAlumno'");
   if (mysqli_num_rows($Verificar_correo) > 0){
    echo '<script>
            alert ("Correo repetido, intenta con otro diferente");
            window.location = "../html/loginAlumno.html";
          </script>'; 
          exit();
   } 
   $ejecutar = mysqli_query($conexion, $query);

   if ($ejecutar){
    echo '<script>
            alert ("Usuario registrado exitsamente");
            window.location = "../html/loginAlumno.php";
          </script>';
   } 
   else{
    echo '<script>
            alert ("Intentalo de nuevo");
            window.location = "../html/loginAlumno.php";
          </script>';
   } 
   mysqli_close($conexion);

   ?>