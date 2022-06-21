
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
	<title>Equipo Estudiante</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" type="image/x-icon" href="../imagenesProyecto_TecWeb/logo_escom2.png">
<link rel="stylesheet" type="text/css" href="../css/estudiante/menu.css">
<link rel ="stylesheet" type ="text/css" href="../css/estudiante/equipoE.css">
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
            <a href="#" class="selected">
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
<!--InicioCentral-->
<div class="Contenedor">
<!--InicioTabla-->
    <div class="Contenido">
    <center>
        <table>
            <thead>
                <tr>
                    <th colspan="8">
                        <a href="formEquipoE.php">AGREGAR EQUIPO<a>
                    </th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Boleta</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Foto</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conexion.php';
                    $boletaA = $_SESSION ['usuario'];
                    $query = "SELECT * FROM equipo where boletaA ='$boletaA'";
                    $resultado= $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                     <tr>
                        <td><?php echo $row['nombreEquipo']; ?></td>
                        <td><?php echo $row['apellidoEquipo']; ?></td>
                        <td><?php echo $row['boletaEquipo']; ?></td>
                        <td><?php echo $row['correoEquipo']; ?></td>                        
                        <td><?php echo $row['telefonoEquipo']; ?></td>
                        <td><img class="zoom" height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['fotoEquipo']);?>"/></td>
                        <th><a href="FormEquiE_modificar.php?boletaEquipo=<?php echo $row['boletaEquipo']; ?>">Modificar</a></th>
                        <th><a href="FormEquiE_eliminar.php?boletaEquipo=<?php echo $row['boletaEquipo']; ?>">Eliminar</a></th>
                    </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </center>     
    </div>
<!--FinTabla-->
</div>
<!--FinCentral-->
</body>
</html>