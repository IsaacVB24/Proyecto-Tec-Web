<?php
    session_start();
    $nombreServidor = "proyecto_web";
    $usuario = "";
    $contrasenia = "";

    $conexion = mysqli_connect("localhost","root","", $nombreServidor);
    if(!$conexion){
        die("Conexión fallida: " . $conexion->connect_error);
    }else{
?>              
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dashboard</title>
        <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link href="../css/dash.css" rel="stylesheet">
        <link href="../css/estilos.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="../imagenesProyecto_TecWeb/logo_escom2.png">
        <script type="text/javascript" src="../javaScript/encabezadoYPiePagina.js"></script>
        </head>
        <body onload="hF()">
            <div id="header" class="general">
            </div>
            
            <div id="footer" class="general">
            </div>
        </body>
        </html>
<?php
    }
?>
