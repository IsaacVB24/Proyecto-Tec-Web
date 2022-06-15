
const texto = "La CATT de la Escuela Superior de Cómputo (ESCOM) es un cuerpo colegiado encargado de: <br><br> &nbsp1.- Planear las actividades inherentes a los TT en coordinación con la Academia de Trabajos Terminales <br> &nbsp2.- Asignar a cada equipo de TT los sinodales para su evaluación y calificación <br> &nbsp3.- Analizar y dictaminar las solicitudes de cambios en los protocolos de TT <br> &nbsp4.- Elaborar, aprobar y aplicar el Calendario de Actividades de la CATT <br> &nbsp5.- Resolver las controversias derivadas de los TT <br> &nbsp6.- Proponer actualizaciones al documento Rector de Operación y Evaluación para los Trabajos Terminales en la ESCOM";
const quienes = "La CATT está integrada por: <br><br> &nbsp1.- El Director de la Escuela, como Presidente <br> &nbsp2.- El Subdirector Académico, como Secretario Técnico <br> &nbsp3.- El Jefe del Departamento Académico al que pertenezca la Academia de Trabajos Terminales, como Secretario Ejecutivo <br> &nbsp4.- Los Jefes de los Departamentos Académicos <br> &nbsp5.- Los Presidentes de Academia <br> &nbsp6.- Los Ex Presidentes de Academia inmediatos anteriores a los actuales";
function despliegueQueEs(){
    document.getElementById("textoQueEs").innerHTML = texto;
    document.getElementById("queEs").setAttribute('onclick', 'pliegueQueEs()');
    document.getElementById("imgBoton1").src = "../imagenesProyecto_TecWeb/flechaArriba.png";
}
function pliegueQueEs(){
    document.getElementById("textoQueEs").innerHTML = "";
    document.getElementById("queEs").setAttribute('onclick', 'despliegueQueEs()');
    document.getElementById("imgBoton1").src = "../imagenesProyecto_TecWeb/flechaAbajo.png";
}
function despliegueQuienes(){
    document.getElementById("textoQuienes").innerHTML = quienes;
    document.getElementById("quienes").setAttribute('onclick', 'pliegueQuienes()');
    document.getElementById("imgBoton2").src = "../imagenesProyecto_TecWeb/flechaArriba.png";
}
function pliegueQuienes(){
    document.getElementById("textoQuienes").innerHTML = "";
    document.getElementById("quienes").setAttribute('onclick', 'despliegueQuienes()');
    document.getElementById("imgBoton2").src = "../imagenesProyecto_TecWeb/flechaAbajo.png";
}