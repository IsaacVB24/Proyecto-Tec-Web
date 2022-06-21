
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
	<title>Protocolo Equipo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" type="image/x-icon" href="../imagenesProyecto_TecWeb/logo_escom2.png">
<link rel="stylesheet" type="text/css" href="../css/estudiante/menu.css">
<link rel="stylesheet" type="text/css" href="../css/estudiante/protoEquipo.css">
</head>
<body>
<!--menu-->
<div class="menu__side" id="menu_side">
        <div class="options__menu">	
            <br><br><br>
            <a href="inicioE.php">
                <div class="option">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="equipoE.php">
                <div class="option">
                <i class="fa fa-users" aria-hidden="true"></i>        
                    <h4>Equipo</h4>
                </div>
            </a>
            <a href="#" class="selected">
                <div class="option">
                <i class="fa fa-folder" aria-hidden="true"></i>    
                    <h4>Protocolo</h4>
                </div>
            </a>
            <a href="../php/cerrarSesion.php">
                <div class="option">
                    <i class="fa fa-power-off" aria-hidden="nosotros"></i></i>
                    <h4>Cerrar Sesion</h4>
                </div>
            </a>
        </div>
</div>
<!--FinMenu-->
<div class="contenedor">
	<!--Formulario-->
    <form  action="protoEquipo_guardar.php" id="formulario" class="formulario" method="post" enctype="multipart/form-data">
	<center><label><h2>Protocolo</h2></label></center>
	<br>
	<label for="text">Titulo: </label><br>
	<input type="text" name="titulo" id="boleta" REQUIRED placeholder="Escriba el titulo de su proyecto aqui">
<br>
    <label for="text">Resumen</label><br>
    <textarea name="resumen" rows="5" cols="70" REQUIRED placeholder="Ingresa tu resumen con un máximo de 250 caracteres"></textarea>
<br>
    <label for="text">Selecciona tu archivo (.pdf): </label><br>
    <input name="fichero" type="file" REQUIRED size="150" maxlength ="150" accept="application/pdf" >
    <br><br><input type = "submit" value = "Siguiente">
</form>
<!--finFormulario-->
<br>
</div>
</body>
</html>