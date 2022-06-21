<?php
  session_start();
  include 'conexion.php';
  $boleta = $_POST['boleta'];
  $contra = $_POST['contra'];
  $contra = hash ('sha512', $contra);

  $validar_login = mysqli_query($conexion, "SELECT * FROM alumno WHERE boletaA = '$boleta' 
  and passwordA = '$contra'");

  if(mysqli_num_rows($validar_login) > 0){
    $_SESSION ['usuario'] = $boleta;
    header ("location: ../html/inicioE.php");
    exit;
  }
  else{
  echo  '<script>
      alert ("Verificar datos introducidos");
      window.location = "../html/loginAlumno.php";
    </script>';
    exit;
  }
?>