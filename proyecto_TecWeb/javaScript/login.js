document.getElementById("btn_registrarse").addEventListener("click", register);
document.getElementById("btn_iniciarSesion").addEventListener("click", iniciarS);
window.addEventListener("resize", anchoPagina)

//Declarar variables
var contenedor__Formularios = document.querySelector (".contenedor_Formularios");
var formulario__iniciarSesion = document.querySelector (".formulario_iniciarSesion");
var formulario__Registrarse = document.querySelector (".formulario_Registrarse");
var caja__fondoLogin = document.querySelector (".caja_fondoLogin");
var caja__fondoRegistro = document.querySelector (".caja_fondoRegistro");

function anchoPagina(){
    if(window.innerWidth >850){
        caja__fondoLogin.style.display="block";
        caja__fondoRegistro.style.display="block";
    }
    else{
        caja__fondoLogin.style.display="block";
        caja__fondoRegistro.style.opacity="1";
        caja__fondoLogin.style.display="none";
        formulario__Registrarse.style.display="block";
        formulario__iniciarSesion.style.display="none";
        contenedor__Formularios.style.left="0px"; 
    }
}

anchoPagina();
function iniciarS(){
    if(window.innerWidth>850){
        formulario__Registrarse.style.display = "none";
        contenedor__Formularios.style.left = "10px";
        formulario__iniciarSesion.style.display="block";
        caja__fondoRegistro.style.opacity="1";
        caja__fondoLogin.style.opacity="0";
    }
    else{
        formulario__Registrarse.style.display = "none";
        contenedor__Formularios.style.left = "0px";
        formulario__iniciarSesion.style.display="block";
        caja__fondoRegistro.style.display="block";
        caja__fondoLogin.style.display="none";
    }
}

function register(){
    if(window.innerWidth>850){
        formulario__Registrarse.style.display = "block";
        contenedor__Formularios.style.left = "49%";
        formulario__iniciarSesion.style.display="none";
        caja__fondoRegistro.style.opacity="0";
        caja__fondoLogin.style.opacity="1";
    }
    else{
        formulario__Registrarse.style.display = "block";
        contenedor__Formularios.style.left = "0%";
        formulario__iniciarSesion.style.display="none";
        caja__fondoRegistro.style.display="none";
        caja__fondoLogin.style.display="block";
        caja__fondoLogin.style.opacity="1";
    }
    
}