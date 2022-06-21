
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
	<title>InicioEstudiante</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" type="image/x-icon" href="../imagenesProyecto_TecWeb/logo_escom2.png">
<link rel="stylesheet" type="text/css" href="../css/estudiante/menu.css">
<link rel="stylesheet" type="text/css" href="../css/estudiante/inicioE.css">
</head>
<body>
<!--menu-->
<div class="menu__side" id="menu_side">
        <div class="options__menu">	
            <br><br><br>
            <a href="#" class="selected">
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
            <a href="protoEquipo.php">
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


<!--Central-->
<?php
        include 'conexion.php';
        $boleta = $_SESSION ['usuario'];
        $query1 = "SELECT * FROM alumno where boletaA ='$boleta'";
        $resultado= $conexion->query($query1);
        $row = $resultado->fetch_assoc();
?>
    <div class="contenedor">
    <!--ladoIzquierdo-->
    <div class="izquierdo">
    <!--Imagen-->
    <div class="perfil">
        <div class="img">
        <img class="zoom" height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/>
        </div>
    </div>
    <!--FinImagen-->
    </div>
    <!--finLadoIzquierdo-->
    <!--ladoDerecho-->
    <div class="derecho">
        <center><label><h2>Datos Personales</h2></label></center>
        
        <label for="text">Boleta: </label><br>
        <label for="text"> <?php echo $row['boletaA']; ?></label><br><br>

        <label for="telefono">Semestre: </label>
        <label for="text"> <?php echo $row['semestreA']; ?></label><br><br>

        <label for="nombre">Nombre(s): </label>
        <label for="text"> <?php echo $row['nombreA']; ?></label><br><br>

        <label for="apellidos">Apellidos: </label>
        <label for="text"> <?php echo $row['apellidosA']; ?></label><br><br>

        <label for="email">Correo:</label>
        <label for="text"> <?php echo $row['correoA']; ?></label><br><br>

        <label for="web">Telefono:</label>
        <label for="text"> <?php echo $row['telefonoA']; ?></label><br><br>

    <br>
    <a class="botonEditar" href="editarE.php"> Editar </a>
    </div>
    <!--finLadoDerecho-->
    </div>
    <!--finCentral-->

</body>
</html>
