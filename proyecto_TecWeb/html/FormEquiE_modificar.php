
<?php
    session_start();
    if(!isset($_SESSION ['usuario'])){
        echo'
        <script> 
            alert ("Por favor inicia sesión");
            window.location = "loginAlumno.php";
        </script>
    ';
    session_destroy();
    die();    
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewoirt" content="width=device-width, initial-scale=1.0">
	<title>Formulario Equipo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" type="image/x-icon" href="../imagenesProyecto_TecWeb/logo_escom2.png">
<link rel="stylesheet" type="text/css" href="../css/estudiante/menu.css">
<link rel="stylesheet" type="text/css" href="../css/estudiante/formEquipo.css">
</head>
<body>
<!--menu-->

<div class="menu__side" id="menu_side">
        <div class="options__menu">	
            <br><br><br>
            <a href="inicioE.html">
                <div class="option">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="equipoE.html" class="selected">
                <div class="option">
                <i class="fa fa-users" aria-hidden="true"></i>        
                    <h4>Equipo</h4>
                </div>
            </a>
            <a href="protoEquipo.html">
                <div class="option">
                <i class="fa fa-folder" aria-hidden="true"></i>    
                    <h4>Protocolo</h4>
                </div>
            </a>
            <a href="loginAlumno.html">
                <div class="option">
                    <i class="fa fa-power-off" aria-hidden="nosotros"></i></i>
                    <h4>Cerrar Sesion</h4>
                </div>
            </a>
        </div>
</div>
<!--FinMenu-->
<!--Central-->

<div class="contenedor">
<?php
        include 'conexion.php';
        $boletaEquipo = $_REQUEST ['boletaEquipo'];
        $query = "SELECT * FROM equipo where boletaEquipo ='$boletaEquipo'";
        $resultado= $conexion->query($query);
        $row = $resultado->fetch_assoc();
?>
<!--Formulario-->
<form  action="FormEquiE_modificarProceso.php?boletaEquipo=<?php echo $row['boletaEquipo']; ?>" id="formulario" class="formulario" method="post" enctype="multipart/form-data">
<!--ladoIzquierdo-->
<div class="izquierdo">
<!--Imagen-->
  <div class="perfil">
    <div class="img">
        <img height ="250px" src="data:image/jpg;base64,<?php echo base64_encode($row['fotoEquipo']); ?>"/><BR> <BR> 
    </div>
        <input type = "file"  name = "Imagen" /><br><br>
  </div>
<!--FinImagen-->
</div>
<!--finLadoIzquierdo-->
<!--ladoDerecho-->
<div class="derecho">
<a class="botonA" href="equipoE.php">Volver</a>

	<center><label><h2>Datos Personales Equipo</h2></label></center>
	
	<label for="email">Boleta</label><br>
	<input type="text" name="boletaEquipo" id="boletaEquipo"  value = "<?php echo $row['boletaEquipo']; ?>">

	<label for="nombre">Nombre(s)</label>
	<input type="text" name="nombre" id="nombre" value = "<?php echo $row['nombreEquipo']; ?>">

	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" id="apellidos" value = "<?php echo $row['apellidoEquipo']; ?>">

    <label for="email">Correo</label>
	<input type="email" name="email" id="email" value = "<?php echo $row['correoEquipo']; ?>">

	<label for="web">Telefono</label>
	<input type ="text" name="telefono" id="telefono" value = "<?php echo $row['telefonoEquipo']; ?>">

<br>
<input type = "submit" value = "Guardar">
</div>
<!--finLadoDerecho-->
</form>
<!--FinFormulario-->
</div>
<!--finCentral-->
</body>
</html>
