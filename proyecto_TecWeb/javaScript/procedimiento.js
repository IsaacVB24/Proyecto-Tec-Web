
const enlacePropuestas = "https://escom.ipn.mx/docs/escomunidad/catt/propuestasTT_20222.pdf";
const enlaceProfsSeguimiento = "https://escom.ipn.mx/docs/escomunidad/catt/seguimientoTTI_20222.pdf";
const enlaceFormatoProtocolo = "https://escom.ipn.mx/docs/escomunidad/catt/formatoProtocoloTT2019.pdf";
const enlaceEvaluacion = "https://escom.ipn.mx/docs/escomunidad/catt/formatoEvaluacionProtocoloTT2019.docx";
const enlaceModificacion = "https://escom.ipn.mx/docs/escomunidad/catt/solicitudModificacionTT.pdf";
const referenciaAPA = "https://escom.ipn.mx/docs/escomunidad/catt/normasReferenciaAPA.pdf";
const referenciaIEEE = "https://escom.ipn.mx/docs/escomunidad/catt/normasReferenciaIEEE.pdf";
const enlaceEvaluacionSitiosWeb = "https://escom.ipn.mx/docs/escomunidad/catt/evaluacionSitiosWeb.pdf";
const formularioAcuse = "https://tinyurl.com/yc82frvj";
const calendarioPresentaciones = "https://escom.ipn.mx/docs/escomunidad/catt/calendarioPresentacionesTT_20222.pdf";
const entregaDiscos = "https://escom.ipn.mx/docs/escomunidad/catt/entregaDiscosTTII-TTR_20221.pdf";
const solicitudReprogramacionPresentacion = "https://escom.ipn.mx/docs/escomunidad/catt/solicitudReprogramarPresentacionTT.docx";
const acuseRecibido = "https://escom.ipn.mx/docs/escomunidad/catt/acuseReciboReporteTT_20192.docx";
const solicitudTTExtraordinario = "https://escom.ipn.mx/docs/escomunidad/catt/formatoSolicitudTTExtraordinario20201.docx";
const articuloTecnico = "https://escom.ipn.mx/docs/escomunidad/catt/articuloTecnicoTT.pdf";
const cartaResponsiva = "https://escom.ipn.mx/docs/escomunidad/catt/cartaResponsivaTT_20212.docx";
const formatoDisco = "https://escom.ipn.mx/docs/escomunidad/catt/formatoDiscoTT.pdf";
const reporteTecnico = "https://escom.ipn.mx/docs/escomunidad/catt/formatoReporteTecnicoTT.pdf";
const guiaPublicacionesTecnicas = "https://escom.ipn.mx/docs/escomunidad/catt/guiaPublicacionesTecnicas.txt";
const cronogramaActividades = "https://escom.ipn.mx/docs/escomunidad/catt/cronogramaActividades_20222.pdf";
const reglamentoTitulacion = "https://escom.ipn.mx/docs/escomunidad/catt/reglamentoTitulacionIPN.pdf";
const documentoRector = "https://escom.ipn.mx/docs/escomunidad/catt/documentoRectorTT2016.pdf";
const requisitosEmisionTitulo = "https://www.ipn.mx/dae/tramites/t%C3%ADtulo-profesional.html";

const semActual = "22-2";

const flechaOriginal = "../imagenesProyecto_TecWeb/black_flechaAbajo.png";
const flechaClic = "../imagenesProyecto_TecWeb/flechaArriba.png";
const colorBotonOriginal = "#ececec";
const colorBotonClic = "#393939";
const borderRadiusOriginal = "0px 10px 0px 10px";
const borderRadiusClic = "20px 20px 2px 2px";



function dPropuestas(){
    pFormatos();
    pRecursos();
    pFormatosTT();
    pNormatividad();
    document.getElementById("enlacesProtocolo").innerHTML = "<td><a href='" + enlacePropuestas + "' class='enlPropuestas' target='_blank'><p class='contPropuestas'>Propuestas para protocolo " + semActual +"</p></a></td><td><p class='contProfSeg'><a href='" + enlaceProfsSeguimiento + "' class='enlProfSeg' target='_blank'>Profesores de seguimiento " + semActual + "</a></p></td><td></td><td></td>";
    document.getElementById("imgPropuestas").src = flechaClic;
    document.getElementById("divPropuestas").setAttribute('onclick', 'pPropuestas()');
    document.getElementById("divPropuestas").style.borderRadius = borderRadiusClic;
    document.getElementById("divPropuestas").style.backgroundColor = colorBotonClic;
    document.getElementById("botPropuestas").style.color = "white";
}
function pPropuestas(){
    document.getElementById("enlacesProtocolo").innerHTML = "";
    document.getElementById("imgPropuestas").src = flechaOriginal;
    document.getElementById("divPropuestas").style.backgroundColor = colorBotonOriginal;
    document.getElementById("divPropuestas").setAttribute('onclick', 'dPropuestas()');
    document.getElementById("divPropuestas").style.borderRadius = borderRadiusOriginal;
    document.getElementById("botPropuestas").style.color = "initial";
}






function dFormatos(){
    pPropuestas();
    pRecursos();
    pFormatosTT();
    pNormatividad();
    document.getElementById("enlacesProtocolo").innerHTML = "<td><a href='" + enlaceFormatoProtocolo + "' class='enlFormatos' target='_blank'><p class='formatos' id='formatoProtocolo'>Protocolo de TT</p></a></td><td><a href='" + enlaceEvaluacion + "' class='enlFormatos' target='_blank'><p class='formatos'>Evaluación de Protocolo</p></a></td><td><a href='" + enlaceModificacion + "' class='enlFormatos' target='_blank'><p class='formatos' id='formatoModificacion'>Solicitud de Modificación de TT</p></a></td><td></td>";
    document.getElementById("imgFormatos").src = flechaClic;
    document.getElementById("divFormatosProt").style.backgroundColor = colorBotonClic;
    document.getElementById("divFormatosProt").style.borderRadius = borderRadiusClic;
    document.getElementById("divFormatosProt").setAttribute('onclick', 'pFormatos()');
    document.getElementById("botFormatos").style.color = "white";
}
function pFormatos(){
    document.getElementById("enlacesProtocolo").innerHTML = "";
    document.getElementById("imgFormatos").src = flechaOriginal;
    document.getElementById("divFormatosProt").style.backgroundColor = colorBotonOriginal;
    document.getElementById("divFormatosProt").style.borderRadius = borderRadiusOriginal;
    document.getElementById("divFormatosProt").setAttribute('onclick', 'dFormatos()');
    document.getElementById("botFormatos").style.color = "initial";
}






function dRecursos(){
    pPropuestas();
    pFormatos();
    pFormatosTT();
    pNormatividad();
    document.getElementById("enlacesProtocolo").innerHTML = "<td></td><td><a href='" + referenciaAPA + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosAPA'>Referencias APA</p></a></td><td><a href='" + referenciaIEEE + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosIEEE'>Referencias IEEE</p></a></td><td><a href='" + enlaceEvaluacionSitiosWeb + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosEvaluacionSitiosWeb'>Evaluación Sitios Web</p></a></td>";
    document.getElementById("imgRecursos").src = flechaClic;
    document.getElementById("divRecursos").style.backgroundColor = colorBotonClic;
    document.getElementById("divRecursos").style.borderRadius = borderRadiusClic;
    document.getElementById("divRecursos").setAttribute('onclick', 'pRecursos()');
    document.getElementById("botRecursos").style.color = "white";
}
function pRecursos(){
    document.getElementById("enlacesProtocolo").innerHTML = "";
    document.getElementById("imgRecursos").src = flechaOriginal;
    document.getElementById("divRecursos").style.backgroundColor = colorBotonOriginal;
    document.getElementById("divRecursos").style.borderRadius = borderRadiusOriginal;
    document.getElementById("divRecursos").setAttribute('onclick', 'dRecursos()');
    document.getElementById("botRecursos").style.color = "initial";
}




function dFormatosTT(){
    pFormatos();
    pPropuestas();
    pRecursos();
    pNormatividad();
    document.getElementById("fila1").innerHTML = "<td class='enlFormatosTT' id='formatoAcuse'><a href='" + formularioAcuse + "' class='enlFormatosTT' target='_blank'><p class='formato'>Formato para envío de acuse " + semActual + "</p></a></td><td class='enlFormatosTT'><a href='" + calendarioPresentaciones + "' class='enlFormatosTT' target='_blank' id='calendarioPresentaciones'><p class='formato'>Calendario de Presentaciones TT " + semActual + "</p></a></td><td class='enlFormatosTT'><a href='" + enlaceProfsSeguimiento +"' class='enlFormatosTT' target='_blank' id='profesoresSeguimiento'><p class='formato'>Profesores de seguimiento " + semActual + "</p></a></td><td class='enlFormatosTT' id='entregaDiscos'><a href='" + entregaDiscos + "' class='enlFormatosTT' target='_blank'><p class='formato'>Entrega de Discos " + semActual + "</p></a></td class='enlFormatosTT'>";
    document.getElementById("fila2").innerHTML = "<td class='enlFormatosTT'><a href='" + solicitudReprogramacionPresentacion + "' class='enlFormatosTT' target='_blank' id='formatoReprogramacion'><p class='formato'>Solicitud Reprogramación Presentación TT</p></a></td><td class='enlFormatosTT'><a href='" + acuseRecibido + "' class='enlFormatosTT' target='_blank'><p class='formato' id='calendarioPresentaciones'>Acuse de Recibido</p></a></td><td class='enlFormatosTT'><a href='" + solicitudTTExtraordinario + "' class='enlFormatosTT' target='_blank'><p class='formato' id='profesoresSeguimiento'>Solicitud TT Extraordinario</p></a></td><td class='enlFormatosTT'><a href='" + articuloTecnico + "' class='enlFormatosTT' target='_blank'><p class='formato' id='entregaDiscos'>Artículo Técnico del TT</p></a></td>";
    document.getElementById("fila3").innerHTML = "<td class='enlFormatosTT' id='cartaResponsiva'><a href='" + cartaResponsiva + "' class='enlFormatosTT' target='_blank'><p class='formato'>Carta Responsiva</p></a></td><td class='enlFormatosTT'><a href='" + formatoDisco + "' class='enlFormatosTT' target='_blank'><p class='formato' id='calendarioPresentaciones'>Formato de Disco</p></a></td><td class='enlFormatosTT'><a href='" + reporteTecnico + "' class='enlFormatosTT' target='_blank'><p class='formato' id='profesoresSeguimiento'>Reporte Técnico</p></a></td><td class='enlFormatosTT' id='guiaPubTecnicas'><a href='" + guiaPublicacionesTecnicas + "' class='enlFormatosTT' target='_blank'><p class='formato'>Guía de Publicaciones Técnicas</p></a></td>";
    document.getElementById("divFormatosTT").setAttribute('onclick', 'pFormatosTT()');
    document.getElementById("imgFormatosTT").src = flechaClic;
    document.getElementById("divFormatosTT").style.backgroundColor = colorBotonClic;
    document.getElementById("divFormatosTT").style.borderRadius = borderRadiusClic;
    document.getElementById("botFormatosTT").style.color = "white";
}
function pFormatosTT(){
    document.getElementById("fila1").innerHTML = "";
    document.getElementById("fila2").innerHTML = "";
    document.getElementById("fila3").innerHTML = "";
    document.getElementById("divFormatosTT").setAttribute('onclick', 'dFormatosTT()');
    document.getElementById("imgFormatosTT").src = flechaOriginal;
    document.getElementById("divFormatosTT").style.backgroundColor = colorBotonOriginal;
    document.getElementById("divFormatosTT").style.borderRadius = borderRadiusOriginal;
    document.getElementById("botFormatosTT").style.color = "initial";
}



function dNormatividad(){
    pFormatos();
    pFormatosTT();
    pPropuestas();
    pRecursos();
    document.getElementById("enlacesNormatividad").innerHTML = "<td><a href='" + cronogramaActividades + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosAPA'>Cronograma de Actividades " + semActual + "</p></a></td><td><a href='" + reglamentoTitulacion + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosIEEE'>Reglamento de Titulación</p></a></td><td><a href='" + documentoRector + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosIEEE'>Documento Rector de TTs</p></a></td><td><a href='" + requisitosEmisionTitulo + "' class='enlRecursos' target='_blank'><p class='formatos' id='recursosEvaluacionSitiosWeb'>Requisitos de Titulación</p></a></td>";
    document.getElementById("imgNormatividad").src = flechaClic;
    document.getElementById("divNormatividad").setAttribute('onclick', 'pNormatividad()');
    document.getElementById("divNormatividad").style.backgroundColor = colorBotonClic;
    document.getElementById("divNormatividad").style.borderRadius = borderRadiusClic;
    document.getElementById("botNormatividad").style.color = "white";
}
function pNormatividad(){
    document.getElementById("enlacesNormatividad").innerHTML = "";
    document.getElementById("imgNormatividad").src = flechaOriginal;
    document.getElementById("divNormatividad").setAttribute('onclick', 'dNormatividad()');
    document.getElementById("divNormatividad").style.backgroundColor = colorBotonOriginal;
    document.getElementById("divNormatividad").style.borderRadius = borderRadiusOriginal;
    document.getElementById("botNormatividad").style.color = "initial";
}