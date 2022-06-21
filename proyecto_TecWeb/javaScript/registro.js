$(document).ready(()=>{

    $.ajax(
        {
            method: "post",
            url: "../html/index.html",
            data: $("form.formulario_Registrarse").serialize(),
            cache: false,
            success: function(){
                document.getElementById("prueba").innerHTML = "<br>Esto sí sirve :)<br>";
            }
        }
    );

});