<?php
    session_start();
    if (isset($_SESSION['usuario'])){
        header("location: inicioE.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Registro de Protocolo</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/estilos.css" rel="stylesheet">
<link href="../css/login.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="../imagenesProyecto_TecWeb/logo_escom2.png">
<script type="text/javascript" src="../javaScript/encabezadoYPiePagina.js"></script>
</head>
<body onload="hF()">
    <div id="header" class="general">
    </div>
    <div id="prueba">

    </div>
    <!--
    <p style="background-color: white;">
        <br>
        Datos a solicitar al alumno: Nombre completo, correo electrónico,  teléfono, boleta (considerar si deben haber más campos)
        <br>
        Datos a solicitar a cada director: nombre, correo, teléfono y en caso de ser externos, se deberá anexar su CV en formato PDF
        <br>
        La CATT podrá gestionar toda la info
        <br>
        Se deben generar comprobantes para alumnos y docentes (en PDF) donde se indique la información de sus TTs
        <br><br>
    </p>
    -->
    <main>

        <div class="contedenor_todo">
            <div class="caja_fondo">
                <div class="caja_fondoLogin">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn_iniciarSesion">Iniciar Sesión</button>
                </div>
                <div class="caja_fondoRegistro">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario para iniciar sesión y registrarse-->
            <div class="contenedor_Formularios">
                <!--Formulario para iniciar sesión-->
                <form action="../html/inicioE.php" method="post" class="formulario_iniciarSesion">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" REQUIRED name="boleta" placeholder="Boleta" >
                    <input type="password" REQUIRED name="contra" placeholder="Contraseña" >
                    <button>Entrar</button>
                </form>
                <!--Formulario registrarse-->
                <form action="../js/registro.js" method="POST" id="formularioPrueba" class="formulario_Registrarse" enctype="multipart/form-data">
                    <BR><BR><BR><h2>Registro del Alumno</h2>
                    <input type="text" REQUIRED name="boletaAlumno" placeholder="Boleta" maxlength="10" id="boleta" data-validetta="required,maxLength[10]">

                    <input type="text" REQUIRED name="semestreAlumno" placeholder="semestre" maxlength="2" id="semestre" data-validetta="required,maxLength[2]">

                    <input type="text" REQUIRED name="nombreAlumno" placeholder="Nombre(s)" maxlength="30" id="nombre" data-validetta="required,maxLength[30]">

                    <input type="text" REQUIRED name="apellidosAlumno" placeholder="Apellidos" maxlength="30" id="apellido_pa" data-validetta="required,maxLength[60]">

                    <input type="text" REQUIRED name="telefonoAlumno" placeholder="Teléfono a 10 dígitos" maxlength="10" data-validetta="required,maxLength[10],number,minLength[10]">

                    <input type="email" REQUIRED name="emailAlumno" placeholder="example@example.com" maxlength="30" data-validetta="required,maxLength[30],email">

                    <input type="password" REQUIRED name="contraAlumno" placeholder="Contraseña" maxlength="30" data-validetta="required,maxLength[30]"><br>
                    
                    <input type = "file" REQUIRED name = "Imagen" />

                    <button type="submit">Registrarse</button>    
                </form>

            </div>
        </div>
    </main>
    <script src="../javaScript/login.js"></script>
    <script src="../javaScript/login.js"></script>
</body>
</html>
