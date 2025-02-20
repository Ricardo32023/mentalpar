<?php
@session_start();
$_SESSION['secontrato']=5;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Flot Charts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
<!--
.Estilo1 {
	color: #000000;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo2 {font-size: 14px}
.Estilo3 {font-size: 16px}
.Estilo4 {
	font-size: 16;
	font-weight: bold;
}
.Estilo5 {font-size: 16}
.Estilo9 {font-weight: bold}
.Estilo15 {font-weight: bold}
.Estilo16 {font-weight: bold}
.Estilo17 {font-weight: bold}
.Estilo18 {font-size: 16px; font-weight: bold; }

  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <section class="content">
  	<div class="row">
    	<div class="col-md-6">
    	  <p align="center">&nbsp;</p>
    	  <p align="center">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>COAVIHUILA</strong></p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>INFORME  DE LOS FACTORES DE RIESGO PSICOSOCIAL</strong></p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>Presentado  por:</strong></p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>Psicólogo:  Carlos Eduardo Paredes Trujillo</strong><br>
              <strong>Especialista  en Ssitemas de Gestion de seguridad y salud en el trabajo</strong><br>
              <strong>Licencia  Resolución No. 522 de 2017</strong><br>
              <strong>Tarjeta  Profesional:124797</strong></p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>Neiva,  31 de Octubre del 2018</strong></p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
    	  <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>INTRODUCCIÓN</strong></p>
    	  <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>El siguiente informe presenta las  condiciones  de  Riesgo Psicosocial  encontrados  en  los 16 trabajadores de la empresa COAVIHUILA Neiva-Huila; mediante la aplicación de la batería de riesgo psicosocial validada por  el Ministerio de la Protección Social.</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>El Ministerio de la Protección Social expidió la Resolución 2646 de  2008, por la que se establecen disposiciones y se definen responsabilidades  para la identificación, evaluación, prevención, intervención y monitoreo  permanente de la exposición a factores de riesgo psicosocial en el trabajo y  para la determinación del origen de las patologías causadas por el estrés  ocupacional. Esta resolución señala que los factores psicosociales deben ser  evaluados objetiva y subjetivamente, utilizando instrumentos que para el efecto  hayan sido validados en el país.</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>Como una respuesta a la Resolución 2646 de 2008 el presente informe de  Riesgo Psicosocial de la empresa COAVIHUILA. Presenta la información  sistematizada, agrupada y analizada de la aplicación de los grupos de  colaboradores determinados por su organización; en este reporte podrá hallar un  diagnóstico de la presencia e impacto de los factores de Riesgo Psicosocial  percibido por las personas de su empresa.</strong></p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>OBJETIVOS</strong></p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="justify" class="text-sm text-sm Estilo1 Estilo2"><strong>   OBJETIVO GENERAL</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>Con La  evaluación de los factores psicosociales del trabajo se busca la identificación  tanto de los factores de riesgo como de los factores protectores, con el fin de  establecer acciones de promoción de la salud y prevención de la enfermedad en  la población trabajadora de Coavihuila.</strong></p>
          <p align="justify" class="text-sm text-sm Estilo1 Estilo2"><strong> OBJETIVOS ESPECIFICOS</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>Identificar los  factores de riesgo intralaborales teniendo en cuenta la Gestión organizacional,  Características de la organización del trabajo, Características del grupo  social de trabajo, las condiciones de la tarea, la Carga física, Condiciones  del medioambiente de trabajo, Interfase persona–tarea: Jornada de  trabajo,Número de trabajadores por tipo de contrato. Tipo de beneficios  recibidos a través de los programas de bienestar de la empresa: Programas de  capacitación y formación permanente de los trabajadores.</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>Identificar los  factores de riesgo extralaboral como son la Utilización del tiempo libre, el  tiempo de desplazamiento y medio de transporte utilizado para ir de la casa al  trabajo y viceversa, la pertenencia a redes de apoyo social, Características de  la vivienda, Acceso a servicios de salud.</strong></p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>MARCO CONCEPTUAL Y LEGAL</strong></p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>Hablar de factores psicosociales  desde la perspectiva de riesgo, implica la  capacidad de comprender que tienen  el  potencial de causar efectos nocivos en la salud de los individuos, mediante respuestas de estrés. En este  sentido, cobra importancia la evaluación del riesgo psicosocial como medio para identificar,  prevenir, monitorear e intervenir. En este orden,  es indispensable tener claridad  sobre la forma en la que se asocian estrés y factores de riesgo psicosocial como  mediadores de enfermedades.</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm">&nbsp;</p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>El estrés tiene el potencial de  producir enfermedad básicamente así: Estados  afectivos negativos, resultados de la  percepción de  amenaza ante ciertos  estímulos, que se reflejan mediante la activación de procesos biológicos, hormonales  y conductuales como respuestas de afrontamiento riesgosas para la  salud.  Tanto así, que en Colombia ya tenemos reconocida un gama amplia de  enfermedades  derivadas del estrés: Decreto 2566 de 2009.</strong></p>
          <div align="justify" class="text-sm text-sm Estilo1 Estilo2 Estilo9">
            <ul>
              <li>Depresión Mayor Episodio.</li>
              <li>Único Trastorno de Ansiedad.</li>
              <li>Generalizada Trastorno de</li>
              <li>Estrés Post-Traumático.</li>
              <li>Trastornos de Adaptación.</li>
              <li>Infarto del  miocardio y otras cardiopatías   isquémicas   del  Corazón.</li>
              <li>Accidente Cerebro – Vascular.</li>
              <li>Hipertensión Arterial Esencial o  Primaria, Úlcera  Péptica.</li>
              <li>Síndrome  del Intestino Irritable.</li>
            </ul>
          </div>
          <ul class="text-sm text-sm Estilo1 Estilo2">
          </ul>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center"><strong><span class="Estilo3">DEFINICIONES</span></strong></p>
          <p align="justify"><strong>FACTOR DE RIESGO : Posible causa o condición que puede ser  responsable de la enfermedad, lesión o daño.</strong></p>
          <p align="justify"><strong>FACTOR PROTECTOR PSICOSOCIAL: Condiciones de trabajo que promueven la salud y el bienestar del trabajador.</strong></p>
          <p align="justify"><strong>FACTORES PSICOSPCIALES: Los factores psicosociales comprenden  los aspectos intralaborales, extralaborales o externos a la organización y las  condiciones individuales o características intrínsecas al trabajador, los  cuales en una interrelación dinámica, mediante percepciones y experiencias,  influyen en la salud y el desempeño de las personas.</strong></p>
          <p align="justify"><strong>CONDICIONES INTRALABORALES: Las  condiciones intralaborales son entendidas como aquellas características del  trabajo y de su organización que influyen en la salud y bienestar del  individuo.</strong></p>
          <p align="justify"><strong>  ESTRES: El <em>Estrés </em>que hace referencia a las respuestas de estrés  adaptativas que facilitan el óptimo y equilibrado desempeño del ser humano ante  las demandas del medio. Y el Distrés se  refiere a la relación de exceso esfuerzos ante las demandas del medio, danto como resultado  sufrimiento y desgaste, producto de un  desorden fisiológico por aceleración e interacción de las catecolaminas,  hipotálamo y glándulas suprarrenales. Es decir, tenemos un estrés bueno o  adaptativo <em>(Euestrés) </em>y uno Estrés  Negativo <em>(</em>Distrés) o que genera respuestas des adaptativas en el ser humano, Respuesta de un trabajador tanto a  nivel fisiológico, psicológico como conductual, en su intento de adaptarse a  las demandas resultantes de la interacción de sus condiciones individuales,  intralaborales y extralaborales.</strong></p>
          <p align="justify"><strong>CARGA FÍSICA: Esfuerzo fisiológico que demanda la  ocupación, generalmente se da en términos de postura corporal, fuerza,  movimiento y traslado de cargas e implica el uso de los componentes del sistema  osteomuscular, cardiovascular y metabólico.</strong></p>
          <p align="justify"><strong>CARGA MENTAL: Demanda de actividad cognoscitiva que  implica la tarea. Algunas de las variables relacionadas con la carga mental son  la minuciosidad, la concentración, la variedad de las tareas, el apremio de  tiempo, la complejidad, volumen y velocidad de la tarea.</strong></p>
          <p align="justify"><strong>CARGA PSÍQUICA O EMOCIONAL: Exigencias  psicoafectivas de las tareas o de los procesos propios del rol que desempeña el  trabajador en su labor y/o de las condiciones en que debe realizarlo.</strong></p>
          <p align="justify"><strong>CARGA DE TRABAJO: Tensiones resultado de la convergencia  de las cargas física, mental y emocional.</strong></p>
          <p align="justify"><strong>CONDICIONES EXTRALABORALES: Comprenden  los aspectos del entorno familiar, social y económico del trabajador. A su vez,  abarcan las condiciones del lugar de vivienda, que pueden influir en la salud y  bienestar del individuo.</strong></p>
          <p align="justify"><strong>CONDICIONESCondiciones individuales: Las condiciones individuales aluden a  una serie de características propias de cada trabajador o características  socio-demográficas como el sexo, la edad, el estado civil, el nivel educativo,  la ocupación (profesión u oficio), la ciudad o lugar de residencia, la escala  socio-económica (estrato socio-económico), el tipo de vivienda y el número de  dependientes</strong></p>
          <p align="justify"><strong>Acoso Laboral: Se entenderá por acoso laboral toda  conducta persistente y demostrable, ejercida sobre un empleado, trabajador por  parte de un empleador, un jefe o superior jerárquico inmediato o mediato, un  compañero de trabajo o un subalterno, encaminada a infundir miedo,  intimidación, terror y angustia, a causar perjuicio laboral, generar  desmotivación en el trabajo, o inducir la renuncia del mismo.</strong></p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm">&nbsp;</p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>METODOLOGÍA  Y MATERIALES:</strong></p>
          <p align="justify" class="Estilo2 Estilo1 text-sm text-sm"><strong>Según la  Resolución 2646 de 2008 Los factores psicosociales comprenden los aspectos  intralaborales, extra laborales o externos a la organización y las condiciones  individuales o características intrínsecas al trabajador, los cuales en una  interrelación dinámica, mediante percepciones y experiencias, influyen en la  salud y el desempeño de las personas. Se llevó a cabo la selección y Aplicación  del instrumento de valoración y análisis de los factores de riego psicosocial  diseñado la universidad javeriana y validado por el Ministerio de Protección  social “Batería de instrumentos para la evaluación de factores de riesgo  psicosocial” publicado en el 2010 forma A, Forma B y el cuestionario para la  evaluación del Estrés Tercera versión<br>
  La información recolectada y analizada se presenta en forma de  frecuencias absolutas para poder realizar un análisis descriptivo más amplio de  las variables intervinientes, siendo ALTO el resultado más elevado frente a la percepción individual de los Factores de  Riesgo Psicosocial, MEDIO para los  resultados que son intermedios y potenciales frente a la Percepción de los  Factores de Riesgo Psicosocial y BAJO para  los resultados que son inexistentes o mínimos frente a la Percepción individual  de los Factores de Riesgo Psicosocial<br>
  Población objeto.<br>
  La población  objeto del presente programa de prevención son los trabajadores de Coavihuila, en tanto a toda la  población, se extenderá los programas de promoción y prevención, de acuerdo a  los riesgos identificados, y a los que resulten en niveles de riesgo alto y muy  alto, (producto de la EVALUACIÓN) ya sea por factor o en su totalidad se  incluirán en la etapa de monitoreo e intervención. La implementación del  programa de prevención en riesgo psicosocial, se realizará principalmente en  cumplimiento de los parámetros establecidos en la resolución 2646/08 y  siguiendo las recomendaciones de la propuesta metodológica del estudio  desarrollado por la Pontificia Universidad Javeriana auspiciado por el  MINISTERIO DE PROTECCION SOCIAL. En este orden de ideas, con la información que  se recoja en el diagnóstico se definirá si se requiere vigilancia  epidemiológica o no.</strong></p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <div align="justify">
            <p align="center" class="Estilo3"><strong>ELEMENTOS  DEL PROGRAMA</strong></p>
            <p align="center">&nbsp;</p>
            <div align="justify">
              <p><span class="Estilo3"><strong>APLICACIÓN  DE LA BATERIA PARA DETECCIÓN DE LOS FACTORES  DE RIESGO PSICOSOCIAL </strong></span><strong>(ficha de datos generales, factores de riesgo  intra-laborales, extra-laborales y evaluación del estrés)</strong></p>
              <p><strong><span class="Estilo3">Descripción  de la batería de riesgo psicosocial: </span>La Dirección General de Riesgos Laborales del  Ministerio del trabajo contrató con la Pontificia Universidad Javeriana un  estudio de investigación para el diseño de una batería de instrumentos de  evaluación de los factores de riesgo psicosocial, que se validó en una muestra  de trabajadores afiliados al Sistema General de Riesgos Laborales.Como resultado de este estudio, se cuenta con un  conjunto de instrumentos válidos y confiables que pueden ser utilizados por los  responsables de los sistemas de gestión de seguridad y salud en el trabajo  de las empresas para identificar los factores  de riesgo psicosocial, a los que se encuentran expuestos los trabajadores de  diferentes actividades económicas y oficios.Estas herramientas permitirán cualificar los  procesos de evaluación de factores de riesgo psicosocial y contar con  información que permita focalizar programas, planes y acciones dirigidas a la  prevención y control. </strong></p>
            </div>
          </div>
          <div align="justify">
            <p><strong><span class="Estilo3">&nbsp;Perfil  del profesional avalado para la aplicación de la batería de riesgo psicosocial:</span> </strong></p>
            <p><strong>Según  la Resolución 2646 de 2008, la evaluación de factores psicosociales deberá ser  realizada por un experto, y en particular un “psicólogo con posgrado en salud  ocupacional, con licencia vigente de prestación de servicios en psicología  ocupacional”.&nbsp;</strong></p>
            <p><strong><span class="Estilo3">IDENTIFICACIÓN DE LA POBLACIÓN OBJETO: </span></strong></p>
            <p>&nbsp;</p>
            <p><strong>La encuesta  realizada   inicialmente para identificación del  riesgo psicosocial,  propone actividades para su  control o minimización. La población objeto  es toda la población laboral,  dado que tanto  el personal operativo como el administrativo poseen la misma exposición al factor  de riesgo. A partir del  Diagnóstico de Riesgo psicosocial,  se  determina recomendaciones generales y otras específicas para algunos  trabajadores que indicaron riesgo alto en algunos  de los factores evaluados, a estos se les  realizará un seguimiento detallado de acuerdo a las recomendaciones generadas  mediante la aplicación de los demás instrumentos cualitativos que contiene la  batería de riesgo psicosocial como son:            </strong></p>
            <ul class="Estilo15">
              <li>Guía para el análisis psicosocial de  puestos de trabajo</li>
            </ul>
            <ul class="Estilo16">
              <li>Guía de entrevistas simiestructuradas  para la evaluación de factores de riesgo psicosocial intra-laboral</li>
            </ul>
            <ul class="Estilo17">
              <li>Guía de grupos focales para la evaluación  de factores de riesgo psicosocial intra-laboral</li>
            </ul>
            <p class="Estilo18"> ESTABLECIMIENTO DE MEDIDAS DE CONTROL</p>
            <p><strong>El establecimiento de medidas de control  se lleva a cabo de acuerdo a lo siguiente:</strong></p>
            <p><strong><span class="Estilo3">Control en la fuente y/o en la  organización: </span>Se  realiza mediante la implementación de estrategias que faciliten y organicen la  ejecución de actividades en tiempos determinados, para lo cual la empresa  AIPE  EXPRESS, ha diseñado un programa riesgo psicosocial (Anexo 1).</strong></p>
            <p><strong><span class="Estilo3">Control en el individuo:</span></strong></p>
            <p><strong>Mediante la programación de actividades  de capacitación en temas tales como los descritos a continuación entre otras,  las cuales están incluidas en el programa de riesgo psicosocial: </strong></p>
            <ul>
              <li><strong>Talleres  para  manejo correcto del estrés.</strong></li>
              <li><strong>Técnicas  de relajación.</strong></li>
              <li><strong>Autoestima.</strong></li>
              <li><strong>Resolución  de conflictos.</strong></li>
              <li><strong>Inteligencia  emocional</strong></li>
            </ul>
          </div>
          <ul>
          </ul>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3"><strong>RECOLECCIÓN DE INFORMACIÓN </strong></p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo3">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">Participaron voluntariamente (16) colaboradores durante  el mes de octubre del año 2018 Distribuidos de la así:</p>
          <div align="center" class="text-sm text-sm Estilo1 Estilo2">
            <div align="center">
              <table width="580" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">

                <tr>
                  <td width="86" valign="top"><p align="center"><strong>Formato</strong></p>                  </td>
                  <td width="520" nowrap bordercolor="#000000"><p align="center"><strong>Nombre</strong></p></td>
                  <td width="244" nowrap bordercolor="#000000"><p align="center"><strong>Cargo</strong></p></td>
                </tr>
                <tr>
                  <td rowspan="5" valign="top"><p align="center">&nbsp;</p>                  <p align="center">&nbsp;</p>                  <p align="center"><strong>Formato    A</strong></p></td>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Rubén Darío Tabares Rincón</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Coordinador de Producción</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Cesar    Fredy Loaiza Ramírez</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Contador    Publico</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Karla    Tatiana Loaiza Ramírez</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Ingeniera    Industrial</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Jaime    Eliu Prado Pérez</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Médico    Veterinario Zootecnista</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Mónica    Alejandra Ninco Castro</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Coordinadora    de Calidad</p></td>
                </tr>
                <tr>
                  <td rowspan="11" valign="top"><p align="center">&nbsp;</p>                  <p align="center">&nbsp;</p>                  <p align="center">&nbsp;</p>                  <p align="center">&nbsp;</p>                  <p align="center">&nbsp;</p>                  <p align="center"><strong>Formato    B</strong></p></td>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Cesar Quintero Cerquera</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Operaria</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Cristian    Camilo Quizá Romero</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Operario</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Diego    Fernando Garcia</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Atención    al Usuario</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Elmer    Cruz Aguilar</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Conductor</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Cesar    Augusto Morales</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Servicios    Varios</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">José    Arley Salazar Bocanegra</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Operario    de Aseo</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Martha    Isabel Paz Castillo</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Tesorera</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Yuri    Marcela Rojas Hernández</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Operaria</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Clara    Isabel Rojas Vargas</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Auxiliar    Contable</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Sergio    Leonardo Osorio Ortiz</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Operario    Encarrador</p></td>
                </tr>
                <tr>
                  <td width="254" valign="bottom" nowrap bordercolor="#000000"><p align="center">Jaime    Salazar Oviedo</p></td>
                  <td width="240" valign="bottom" nowrap bordercolor="#000000"><p align="center">Operario    Aseo</p></td>
                </tr>
              </table>
            </div>
          </div>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2"><strong>&nbsp;</strong></p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2"><strong>&nbsp;</strong></p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1 Estilo2">&nbsp;</p>
          <p align="center" class="text-sm text-sm Estilo1"><span class="Estilo3"><strong>CARACTERIZACIÓN  DE LA POBLACIÓN TRABAJADORA </strong><br>
            <strong>TIPO A  </strong></span></p>
          <p align="center" class="text-sm text-sm Estilo1">&nbsp;</p>
    	</div>
    </div>
  </section>

    <section class="content">

    <div class="row">

      <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Genero Tipo A---- </h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="65%"><div id="donut-chart" style="height: 300px;"></div></td>
                    <td width="35%">
                      <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left"><p align="justify">&nbsp;</p>
                          <p align="justify">
                            <div id="micapa">

                            </div>
                          </p>
                        </td>
                      </tr>
                    </table>
                                  <table border="01" cellspacing="0" cellpadding="0" width="0">
                                    <tr>
                                      <td width="209" nowrap colspan="2"><p align="center"><strong>Genero</strong></p></td>
                                    </tr>
                                    <tr>
                                      <td width="125" nowrap valign="bottom">  <strong>Femenino</strong> </td>
                                      <td width="87" nowrap valign="bottom"><p align="center"><div id="dGenero1" align="center"></div></p></td>
                                    </tr>
                                    <tr>
                                      <td width="125" nowrap valign="bottom"><p><strong>Masculino</strong></p></td>
                                      <td width="87" nowrap valign="bottom"><p align="center"><div id="dGenero2" align="center"></div></p></td>
                                    </tr>
                                  </table>
                                </div></td>
                            </tr>
                      </table>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
</div>
        <p>
  <!-- /.col -->

  </section>
</p>
        <p>&nbsp;</p>
        <p>
          <!-- /.content -->

                    <!---

              	ANALISIS ETAREO
              --->

              <section class="content">

          <div class="row">

              <!-- /.col -->
                                    </p>
            <div class="col-md-6">
              <!-- Donut chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>

                  <h3 class="box-title">Analisis Etareo Tipo A</h3>

                </div>
                <div class="box-body">
                   <table width="100%">
                      <tr>
                        <td width="53%">
                          <div id="etareo-chart" style="height: 300px;"></div>
                        </td>
                        <td width="47%">
                          <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                          <tr>
                            <td valign="top" align="left"><p align="justify">&nbsp;</p>
                              <p align="justify"><div id="divgraficoEtareo"></div></p></td>
                          </tr>
                        </table>
                          <div align="center">
                            <table border="1" cellspacing="0" cellpadding="0"  width="0">
                              <tr>
                                <td width="209" nowrap colspan="2"><p align="center"><strong>Análisis Etareo</strong></p></td>
                              </tr>
                              <tr>
                                <td width="113" nowrap valign="bottom"><p><strong>Menos de 20</strong></p></td>
                                <td width="96" nowrap valign="bottom"><p align="center">
                                <div id="dEtareo1" align="center"></div></p></td>
                              </tr>
                              <tr>
                                <td width="113" nowrap valign="bottom"><p><strong>De 20 a 30 años</strong></p></td>
                                <td width="96" nowrap valign="bottom"><p align="center">
                                <div id="dEtareo2" align="center"></div></p></td>
                              </tr>
                              <tr>
                                <td width="113" nowrap valign="bottom"><p><strong>de 31 a 40 años</strong></p></td>
                                <td width="96" nowrap valign="bottom"><p align="center">
                                <div id="dEtareo3" align="center"></div></p></td>
                              </tr>
                              <tr>
                                <td width="113" nowrap valign="bottom"><p><strong>de 41 a 50 años</strong></p></td>
                                <td width="96" nowrap valign="bottom"><p align="center">
                                <div id="dEtareo4" align="center"></div></p></td>
                              </tr>
                              <tr>
                                <td width="113" nowrap valign="bottom"><p><strong>Más de 50 años</strong></p></td>
                                <td width="96" nowrap valign="bottom"><p align="center">
                                <div id="dEtareo5" align="center"></div></p></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                   </table>

                </div>
                <!-- /.box-body-->
              </div>
              <p>
                <!-- /.box -->
              </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;  </p>
          </div>
            <!-- /.col -->

          </section>
          <!-- /.content -->

</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
          <!-- /.content -->

          <!---

    	ANALISIS ESTADO CIVIL
    --->

          <section class="content">


<div class="row">

          <!-- /.col -->

                                </p>
        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Estado Civil Tipo A</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="53%">
                   	  <div id="estadoCivil-chart" style="height: 300px;"></div>
                    </td>
                    <td width="47%">
                      <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left"><p align="justify">&nbsp;</p>
                          <p align="justify"><div id="divgraficoestadocivil"></div></p></td>
                      </tr>
                    </table>
                      <div align="center">
                        <table border="1" cellspacing="0" cellpadding="0"  width="0">
                          <tr>
                            <td width="209" nowrap colspan="2"><p align="center"><strong>Estado Civil</strong></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Soltero(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Casado(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Union Libre</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Separado(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Divorciado(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil5" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Viudo(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil6" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Sacerdote / Monja</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivil7" align="center"></div></p></td>
                          </tr>


                        </table>
                    </div></td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

    </section>
    <!-- /.content -->


     <!---

    	ANALISIS PERSONAS A CARGO
    --->

     <section class="content">


      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title">Analisís por Personas a Cargo Tipo A</h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="52%">
                   	  <div id="personasCargo-chart" style="height: 300px;"></div>
                    </td>
                    <td width="48%">
                     <div align="center">
                       <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                       <tr>
                         <td valign="top" align="left"><p align="justify">&nbsp;</p>
                           <p align="justify"><div id="divPersonasCargo"></div></p></td>
                       </tr>
                     </table>
                     <table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td width="209" nowrap colspan="2"><p align="center"><strong>Personas a Cargo</strong></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 1 Persona</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo1" align="center"></div></p></td>
                          </tr>
						  <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 2 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo2" align="center"></div></p></td>
                          </tr>
						  <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 3 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo3" align="center"></div></p></td>
                          </tr>
						  <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 4 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo4" align="center"></div></p></td>
                          </tr>
              <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 5 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo5" align="center"></div></p></td>
                            </tr>
              <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 6 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo6" align="center"></div></p></td>
                            </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Ninguna</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargo7" align="center"></div></p></td>
                          </tr>
                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

    </section>
    <!-- /.content -->



     <!---

    	ANALISIS POR ESCOLARIDAD TIPO A
    --->

     <section class="content">

      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Escolaridad Tipo A</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="escolaridad-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                       <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                       <tr>
                         <td valign="top" align="left"><p align="justify">&nbsp;</p>
                           <p align="justify"><div id="divgraficoEscolaridad"></div></p></td>
                       </tr>
                     </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Escolaridad</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Ninguna</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Primaria Incompleta</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Primaria Completa</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Bachillerato Incompleto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Bachillerato Completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad5" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Técnico/Tecnológico incompleto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad6" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Técnico/Tecnológico completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad7" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Profesional Incompleto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad8" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Profesional Completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad9" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Carrera Militar / Policía</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad10" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Post-grado completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad11" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Post-grado Incompleto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridad12" align="center"></div></p></td>
                          </tr>
                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

    </section>
    <!-- /.content -->


 <!---

    	ANALISIS TIPO DE VIVIENDA
    --->

     <section class="content">


      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Tipo Vivienda Tipo A</h3>
              <p class="box-title">&nbsp;</p>
              <p class="box-title">&nbsp;</p>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="48%">
                   	  <div id="tipoVivienda-chart" style="height: 300px;"></div>
                    </td>
                    <td width="52%">
                      <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left"><p align="justify">&nbsp;</p>
                          <p align="justify"><div id="divgraficoTipoVivienda"></div></p></td>
                      </tr>
                    </table>
                     <div align="center">

					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Tipo Vivienda</strong></p></td>
                          </tr>
                          <tr>
                            <td width="200" nowrap valign="bottom"><p><strong>Propia</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dTipoVivienda1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>En Arrendo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dTipoVivienda2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Familiar</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dTipoVivienda3" align="center"></div></p></td>
                          </tr>
                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <p>
          <!-- /.col -->

</section>
</p>
        <p>&nbsp;</p>
        <p>
          <!-- /.content -->


          <!---

    	ANALISIS ESTRATO
    --->

          <section class="content">


<div class="row">

          <!-- /.col -->

                        </p>
        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Estrato Tipo A</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="48%">
                   	  <div id="estrato-chart" style="height: 300px;"></div>
                    </td>
                    <td width="52%">
                     <div align="center">

                       <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                       <tr>
                         <td valign="top" align="left"><p align="justify">&nbsp;</p>
                           <p align="justify"><div id="divgraficoEstrato"></div></p></td>
                       </tr>
                     </table>

                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>

                    </table>

					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estrato</strong></p></td>
                          </tr>
                          <tr>
                            <td width="200" nowrap valign="bottom"><p><strong>Estrato 1</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstrato1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 2</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstrato2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 3</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstrato3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 4</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstrato4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 5</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstrato5" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 6</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstrato6" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Finca</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dFinca" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>No se</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dNose" align="center"></div></p></td>
                          </tr>
                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
<!--
<script src="informe_demografico"></script>
    	 <!---

    	ANTIGUEDAD EMPRESA
    --->

     <section class="content">


      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border"> <i class="fa fa-bar-chart-o"></i>
                <h3 class="box-title">Analisís por Antiguedad Empresa Tipo A</h3>
                <p class="box-title">&nbsp;</p>
            </div>
            <div class="box-body">
              <table width="100%">
                <tr>
                  <td width="49%"><div id="antiguedadEmpresa-chart" style="height: 300px;"></div></td>
                  <td width="51%"><div align="center">
                    <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                    <tr>
                      <td valign="top" align="left"><p align="justify">&nbsp;</p>
                        <p align="justify"><div id="divgraficoAntiguedadEmpresa"></div></p></td>
                    </tr>
                  </table>
                      <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                        <tr>
                          <td valign="top" align="left" colspan="2"><p>El 46% de los trabajadores evaluados su antigüedad en la empresa está dada  menos de un año, el 36% entre 1 y 5 años de antigüedad y 18% entre 5 y 10 años de antigüedad en la organización.</p></td>
                        </tr>
                      </table>
                    <table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                        <tr>
                          <td nowrap colspan="2"><p align="center"><strong>Antiguedad Empresa</strong></p></td>
                        </tr>
                        <tr>
                          <td width="200" nowrap valign="bottom"><p><strong>Menos de 1 año</strong></p></td>
                          <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresa1" align="center"></div>
                            <p></p></td>
                        </tr>
                        <tr>
                          <td width="213" nowrap valign="bottom"><p><strong>Entre 2 a 6 años</strong></p></td>
                          <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresa2" align="center"></div>
                            <p></p></td>
                        </tr>
                        <tr>
                          <td width="213" nowrap valign="bottom"><p><strong>Entre 7 y 10 años</strong></p></td>
                          <td width="51" nowrap valign="bottom"><p align="center">
                          <div id="dAntiguedadEmpresa3" align="center"></div>
                        <p></p></td>
                            <tr>
                        <td width="213" nowrap valign="bottom"><p><strong>Entre 10 y 15 años</strong></p></td>
                              <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresa4" align="center"></div>
                          <p></p></td>
                          <tr>
                              <td width="213" nowrap valign="bottom"><p><strong>De 16 o mas años</strong></p></td>
                              <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresa5" align="center"></div>
                              <p></p></td>
                        </tr>
                    </table>
                  </div></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
</p>
          <p>&nbsp;          </p>
</div>
        <!-- /.col -->

    </section>
    <!-- /.content -->




<p align="center"><strong>                    </strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center" class="Estilo3"><strong>  RESULTADOS DEL  CUESTIONARIO ESTRES GRUPO A</strong></p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<!---

    	ANALISIS ESTRES TIPO A
    --->

 	<section class="content">


     	<div class="row">

        <!-- /.col -->

	<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís De Estrés Tipo A </h3>
              <p class="box-title">&nbsp;</p>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="estresA-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de Riesgo Muy ALto, seguido del 27%  de Riesgo Alto,  9% de Riego Medio, 9% Bajo,  y 9% Sin Riesgo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estres Tipo A</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Riesgo Muy Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresA1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresA2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Medio</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresA3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Bajo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresA4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Sin Riesgo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresA5" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>

	</div>
        <p>
          <!-- /.col -->

</section>
        </p>
        <p>
          <!-- /.content -->

</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="212" rowspan="2"><p align="center"><strong>TOTAL    GENERAL</strong><br>
              <strong>SÍNTOMAS    DE ESTRÉS</strong> </p></td>
      <td width="212"><p align="center"><strong>Puntaje    (transformado)</strong></p></td>
      <td width="212"><p align="center"><strong>Nivel de estrés</strong></p></td>
    </tr>
    <tr>
      <td width="212"><p align="center"><strong>13,3</strong></p></td>
      <td width="212" bgcolor="#FFFF00"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="676" height="18" src="informe_completo_clip_image004.gif"><br clear="ALL">-->
</p>
<p align="center"><strong>              </strong> </p>
<p align="center"><br>
  <strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="647" height="94" border="1" bordercolor="#000000">
    <tr>
      <td width="779"><div align="justify">Mantener los factores protectores como las buenas relaciones laborales, por medio de intregraciones y comportamiento de espacios comunes, en el mantenimiento del nivel de estrés bajo. </div></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><strong>               </strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center" class="Estilo3"><strong>INTERPRETACION TOTAL EXTRALABORAL A</strong></p>
<p align="center" class="Estilo3">&nbsp;</p>
<!---

    	ANALISIS EXTRALABORAL TIPO A
    --->

    <section class="content">


     	<div class="row">

        <!-- /.col -->

	<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
               <h3 class="box-title">Analisís De Extralaboral Tipo A </h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="ExtralaboralA-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de Riesgo Muy ALto, seguido del 27%  de Riesgo Alto,  9% de Riego Medio, 9% Bajo,  y 9% Sin Riesgo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estres Tipo A</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Riesgo Muy Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralA1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralA2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Medio</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralA3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Bajo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralA4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Sin Riesgo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralA5" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>

	</div>
        <p>
          <!-- /.col -->

</section>
</p>
        <p>
          <!-- /.content -->

</p>
        <p align="center">&nbsp;</p>
        <p align="center"><strong>&nbsp;</strong></p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="212" rowspan="2"><p align="center"><strong>INTERPRETACION    TOTAL</strong><br>
              <strong>EXTRALABORAL</strong> </p></td>
      <td width="212"><p align="center"><strong>Puntaje    (transformado)</strong></p></td>
      <td width="212"><p align="center"><strong>Nivel de estrés</strong></p></td>
    </tr>
    <tr>
      <td width="212"><p align="center"><strong>11,0</strong></p></td>
      <td width="212"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="676" height="18" src="informe_completo_clip_image004_0000.gif"><br clear="ALL">-->
    <strong> </strong></p>
<p align="center"><strong>&nbsp;</strong></p>
<p align="center">&nbsp;</p>
<p align="center" class="Estilo3"><strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></p>
<p align="center"><strong>&nbsp;</strong></p>
<p align="center">&nbsp;</p>
<!--<p align="center"><img width="642" height="91" src="informe_completo_clip_image001.gif" alt="Cuadro de texto: En términos generales el factor extra laboral del grupo A esta sin riesgo o riesgo despreciable."></p>-->
<p align="center"><strong>&nbsp;</strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center" class="Estilo3"><strong>RIESGO EXTRALABORAL GRUPO A</strong></p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="637">
    <tr>
      <td width="390"><p align="center"><strong>LIDERAZGO</strong><strong> </strong><strong>Y    RELACIONES SOCIALES EN EL TRABAJO </strong></p></td>
      <td width="124"><p align="center"><strong>Puntaje</strong><br>
      <strong>(Transformado)</strong></p></td>
      <td width="123"><p align="center"><strong>Nivel de Riesgo</strong><strong> </strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Tiempo fuera del trabajo</strong></p></td>
      <td width="124"><p align="center"><strong>16,3</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Relaciones familiares</strong></p></td>
      <td width="124"><p align="center"><strong>6,7</strong></p></td>
      <td width="123"><p align="center"><strong>SIN    RIESGO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Comunicación y relaciones    interpersonales</strong></p></td>
      <td width="124"><p align="center"><strong>6,0</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Situación económica del grupo familiar</strong></p></td>
      <td width="124"><p align="center"><strong>13,3</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Características de la vivienda y de su    entorno</strong></p></td>
      <td width="124"><p align="center"><strong>8,3</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Influencia del entorno extralaboral    sobre el trabajo</strong></p></td>
      <td width="124"><p align="center"><strong>16,7</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>Desplazamiento vivienda ? trabajo ?    vivienda</strong></p></td>
      <td width="124"><p align="center"><strong>15,0</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="390"><p align="center"><strong>TOTAL    GENERAL FACTORES DE RIESGOPSICOSOCIAL EXTRALABORAL</strong></p></td>
      <td width="124"><p align="center"><strong>11,8</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO    BAJO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="667" height="18" src="informe_completo_clip_image003.gif"><br clear="ALL">-->
</p>
<p align="center">          </p>
<p align="center">                   <br>
  <strong>OBSERVACIONES Y COMENTARIOS  DEL EVALUADOR</strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="647" height="165" border="1">
    <tr>
      <td width="637"><div align="center">En términos generales el factor extralaboral del grupo A esta sin riesgo o riesgo despreciable </div></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3"><strong>RESULTADOS DEL GRUPO A</strong></p>

<!---

    	ANALISIS INTRALABORAL TIPO A
    --->


 	<section class="content">


     	<div class="row">

        <!-- /.col -->

	<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís Intralaboral Tipo A </h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="IntralaboralA-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de Riesgo Muy ALto, seguido del 27%  de Riesgo Alto,  9% de Riego Medio, 9% Bajo,  y 9% Sin Riesgo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estres Tipo A</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Riesgo Muy Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralA1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralA2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Medio</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralA3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Bajo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralA4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Sin Riesgo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralA5" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>

	</div>
        <div align="center">
 	<!-- /.col -->

 	</section>
    <!-- /.content -->


  INTERPRETACION:  Del total de la población con formato A Intralaboral; que son 5; el 0% tiene un  Riesgo Muy Alto; el 0% tiene un Riesgo Alto; 60% con Riesgo Medio, 20% con  Riesgo Bajo, y 20% Sin Riesgo.
  </p>
        </div>
        <p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3"><strong>RESULTADOS  DEL CUESTIONARIO DE FACTORES </strong></p>
<p align="center" class="Estilo3"><strong>DE RIESGO PSICOSOCIAL INTRALABORAL- </strong></p>
<p align="center" class="Estilo3"><strong>FORMA A</strong></p>
<p align="center" class="Estilo3">&nbsp;</p>
<p align="center" class="Estilo3">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="629">
    <tr>
      <td width="629" colspan="4" bordercolor="#D4D0C8"><div align="center" class="Estilo4">RESULTADOS DEL CUESTIONARIO </div></td>
    </tr>
    <tr>
      <td width="121" bordercolor="#D4D0C8"><p align="center" class="Estilo4">Dominios</p></td>
      <td width="295" bordercolor="#D4D0C8"><p align="center" class="Estilo4">Dimesiones</p></td>
      <td width="142" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>Puntaje</strong><br>
      <strong>(Transformado)</strong></p></td>
      <td width="72" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>Nivel de Riesgo</strong></p></td>
    </tr>
    <tr>
      <td width="121" rowspan="4" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>Liderazgo y relaciones sociales en el trabajo</strong></p></td>
      <td width="295" bordercolor="#D4D0C8"><p class="Estilo5"><strong>Características del    liderazgo.</strong></p></td>
      <td width="142" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>15,8</strong></p></td>
      <td width="72" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="295" bordercolor="#D4D0C8"><p class="Estilo5"><strong>Relaciones sociales en el trabajo.</strong></p></td>
      <td width="142" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>29,6</strong></p></td>
      <td width="72" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="295" bordercolor="#D4D0C8"><p class="Estilo5"><strong>Retroalimentación del    desempeño.</strong></p></td>
      <td width="142" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>19,0</strong></p></td>
      <td width="72" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>RIESGO BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="295" bordercolor="#D4D0C8"><p class="Estilo5"><strong>Relación con los colaboradores (subordinados).</strong></p></td>
      <td width="142" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>33,9</strong></p></td>
      <td width="72" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="415" colspan="2" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>LIDERAZGO Y RELACIONES SOCIALES EN EL TRABAJO</strong></p></td>
      <td width="142" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>40,8</strong></p></td>
      <td width="72" bordercolor="#D4D0C8"><p align="center" class="Estilo5"><strong>RIESGO MEDIO</strong></p></td>
    </tr>

    <tr>
      <td width="123" rowspan="5"><p align="center"><strong>Control sobre el trabajo</strong></p></td>
      <td width="293"><p><strong>Claridad de rol</strong></p></td>
      <td width="132"><p align="center"><strong>26,4</strong></p></td>
      <td width="79"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="293"><p><strong>Capacitación</strong></p></td>
      <td width="132"><p align="center"><strong>18,3</strong></p></td>
      <td width="79"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="293"><p><strong>Participación y manejo del cambio</strong></p></td>
      <td width="132"><p align="center"><strong>15,0</strong></p></td>
      <td width="79"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="293"><p><strong>Oportunidades para el uso y desarrollo de    habilidades y conocimientos</strong></p></td>
      <td width="132"><p align="center"><strong>27,5</strong></p></td>
      <td width="79"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="293"><p><strong>Control y autonomía sobre el trabajo</strong></p></td>
      <td width="132"><p align="center"><strong>11,7</strong></p></td>
      <td width="79"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="415" colspan="2"><p><strong>CONTROL SOBRE EL TRABAJO</strong></p></td>
      <td width="132"><p align="center"><strong>17,8</strong></p></td>
      <td width="79"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="624" height="37" src="informe_completo_clip_image004_0002.gif"></p>-->
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="636">
    <tr>
      <td colspan="2" rowspan="8"><p align="center"><strong>Demandas del trabajo</strong></p></td>
      <td colspan="2"><p align="center"><strong>Demandas ambientales y de esfuerzo físico</strong></p></td>
      <td colspan="2"><p align="center"><strong>22,9</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO BAJO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Demandas emocionales</strong></p></td>
      <td colspan="2"><p align="center"><strong>12,8</strong></p></td>
      <td><p align="center"><strong>SIN RIESGO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Demandas cuantitativas</strong></p></td>
      <td colspan="2"><p align="center"><strong>14,2</strong></p></td>
      <td><p align="center"><strong>SIN RIESGO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Influencia del trabajo sobre el entorno    extralaboral</strong></p></td>
      <td colspan="2"><p align="center"><strong>35,0</strong></p></td>
      <td><p align="center"><strong>RIESGO MEDIO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Exigencias de responsabilidad del cargo</strong></p></td>
      <td colspan="2"><p align="center"><strong>70,0</strong></p></td>
      <td><p align="center"><strong>RIESGO ALTO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Demandas de carga mental</strong></p></td>
      <td colspan="2"><p align="center"><strong>66,0</strong></p></td>
      <td><p align="center"><strong>RIESGO MEDIO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Consistencia del rol</strong></p></td>
      <td colspan="2"><p align="center"><strong>15,0</strong></p></td>
      <td><p align="center"><strong>SIN RIESGO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="center"><strong>Demandas de la jornada de trabajo</strong></p></td>
      <td colspan="2"><p align="center"><strong>33,3</strong></p></td>
      <td><p align="center"><strong>RIESGO MEDIO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="4"><p align="center"><strong>DEMANDAS DEL TRABAJO</strong></p></td>
      <td colspan="2"><p align="center"><strong>61,6</strong></p></td>
      <td><p align="center"><strong>RIESGO BAJO</strong></p>        <div align="center"></div></td>
    </tr>
    <tr>
      <td width="106" rowspan="2" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>Recompensas</strong></p></td>
      <td colspan="2"><p align="center"><strong>Recompensas    derivadas de la pertenencia a la organización y del trabajo que se realiza</strong></p></td>
      <td colspan="2"><p align="center"><strong>7,0</strong></p></td>
      <td colspan="2"><p align="center"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><p align="center"><strong>Reconocimiento y compensación</strong></p></td>
      <td colspan="2"><p align="center"><strong>17,5</strong></p></td>
      <td colspan="2"><p align="center"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td colspan="3" valign="top"><p align="center"><strong>RECOMPENSAS</strong></p></td>
      <td colspan="2"><p align="center"><strong>5,6</strong></p></td>
      <td colspan="2"><p align="center"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td colspan="3" valign="top"><p align="center"><strong>TOTAL GENERAL FACTORES DE RIESGO PSICOSOCIAL INTRALABORAL</strong></p></td>
      <td colspan="2"><p align="center"><strong>25,8</strong></p></td>
      <td colspan="2"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="601" height="37" src="informe_completo_clip_image002_0002.gif"><br clear="ALL">-->
</p>
<p align="center">       <br>
    <strong>                         <span class="Estilo3">OBSERVACIONES Y  COMENTARIOS DEL EVALUADOR</span></strong></p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="767" height="117" border="1">
    <tr>
      <td width="757">En Exigencias de responsabilidad del cargo y demandas de carga mental, puntean un nivel muy alto de riesgo, y con demandas de trabajo alto </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><br>
    <strong>                                         </strong><br>
<span class="Estilo3"><strong>SUGERENCIA Y RECOMENDACIONES</strong></span></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="897" height="147" border="1">
    <tr>
      <td width="887"><div align="justify">Se requiere un programa de vigilancia epidemiologica en el seguimiento del manejo del estres. Identificar cuales son las labores que les implican mayor carga mental y mayor responsabilidad, por medio de la discusion de mesa redonda en la búsqueda en la solución y perfeccionamiento del proceso. </div></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>&nbsp;</strong></p>
<p align="center" class="Estilo3"><strong> RESULTADOS DEL GRUPO B</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><span class="Estilo3"><strong>CARACTERIZACIÓN  DE LA POBLACIÓN TRABAJADORA </strong><br>
    <strong>TIPO  B</strong></span></p>
<p align="center">
  <!---

    	ANALISIS GENERO TIPO B
    --->

  <section class="content">

   <div class="row">

      <!-- /.col -->
</p>
<div class="col-md-6">
          <!-- genero chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Genero Tipo B </h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="65%"><div id="generoTipoB-chart" style="height: 300px;"></div></td>
                    <td width="35%">
                    	<table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                            <tr>
                              <td valign="top" align="left"><p align="justify">El    59% de la población trabajadora evaluada es masculina y un 36% es femenina.</p>
                                <div align="center">
                                  <table border="01" cellspacing="0" cellpadding="0" width="0">
                                    <tr>
                                      <td width="125" nowrap valign="bottom">                                        Femenino </td>
                                      <td width="87" nowrap valign="bottom"><p align="center"><div id="dGeneroB1" align="center"></div></p></td>
                                    </tr>
                                    <tr>
                                      <td width="125" nowrap valign="bottom"><p>Masculino</p></td>
                                      <td width="87" nowrap valign="bottom"><p align="center"><div id="dGeneroB2" align="center"></div></p></td>
                                    </tr>
                                  </table>
                                </div></td>
                            </tr>
                      </table>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box --></p>
          <p>&nbsp;</p>
</div>
        <!-- /.col -->

  </section>
    <!-- /.content -->


    <!---

    	ANALISIS ETARO TIPO B
    --->

 <section class="content">


      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís Etaro Tipo B</h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="64%">
                   	  <div id="etareoB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="36%"><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left"><p align="justify">El    64% de la población trabajadora     evaluada se encuentra en edades entre los 20 y 30 años de edad, seguidos    de 18 % entre los 31y 40 años de edad, el 9% entre las edades de 41 a 50 años,    y de más de 50 años el 9%;  no cuentan    con trabajadores de menos de veinte años de edad.</p></td>
                      </tr>
                    </table>
                      <div align="center">
                        <table border="1" cellspacing="0" cellpadding="0"  width="0">
                          <tr>
                            <td width="209" nowrap colspan="2"><p align="center"><strong>Análisis etario</strong></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Menos de 20</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEtareoB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 20 a    30 años</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEtareoB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>de 31 a    40 años</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEtareoB3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>de 41 a    50 años</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEtareoB4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Más de    50 años</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEtareoB5" align="center"></div></p></td>
                          </tr>

                        </table>
                    </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box --></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

 </section>
    <!-- /.content -->





	 <!---

    	ANALISIS ESTADO CIVIL TIPO B
    --->

 <section class="content">


      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Estado Civil Tipo B</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="53%">
                   	  <div id="estadoCivilB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="47%"><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left"><p align="justify">&nbsp;</p>
                          <p align="justify">El 46% de la población trabajadora  su estado civil es Unión libre ,  seguido del 36 % casado y el 18% en soltero.</p></td>
                      </tr>
                    </table>
                      <div align="center">
                        <table border="1" cellspacing="0" cellpadding="0"  width="0">
                          <tr>
                            <td width="209" nowrap colspan="2"><p align="center"><strong>Estado Civil</strong></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Soltero(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivilB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Casado(a)</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivilB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Union Libre</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dEstadoCivilB3" align="center"></div></p></td>
                          </tr>


                        </table>
                    </div></td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

</section>
    <!-- /.content -->




     <!---

    	ANALISIS PERSONAS A CARGO TIPO B
    --->

<section class="content">


      <div class="row">

        <!-- /.col -->

<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Personas a Cargo Tipo B</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="52%">
                   	  <div id="personasCargoB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="48%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p>El 73% de la población trabajadora tiene una (1) personas a cargo, el 30% tiene una (2) personas a cargo, el 25% tiene una (3) personas a cargo, el 15% tiene una (1) personas a cargo y el 27 % no tiene personas a cargo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td width="209" nowrap colspan="2"><p align="center"><strong>Personas a Cargo</strong></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 1 Persona</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargoB1" align="center"></div></p></td>
                          </tr>
						  <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 2 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargoB2" align="center"></div></p></td>
                          </tr>
						  <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 3 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargoB3" align="center"></div></p></td>
                          </tr>
						  <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>De 4 Personas</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargoB4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="113" nowrap valign="bottom"><p><strong>Ninguna</strong></p></td>
                            <td width="96" nowrap valign="bottom"><p align="center">
                            <div id="dPersonasCargoB5" align="center"></div></p></td>
                          </tr>



                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box --></p>
</div>
        <p>
          <!-- /.col -->

</section>
</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
<p>&nbsp;</p>
        <p>
          <!-- /.content -->





          <!---

    	ANALISIS POR ESCOLARIDAD
    --->

           <section class="content">


<div class="row">

          <!-- /.col -->

                                </p>
        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Escolaridad Tipo B</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="escolaridadB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de profesional incompleto, seguido del 27%  técnico, tecnológico completo,  9% profesional completo, 9% bachiller completo, 9& bachillerato incompleto y 9% sin escolaridad.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Escolaridad</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Ninguna</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridadB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Bachillerato Incompleto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridadB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Bachillerato Completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridadB3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Técnico/Tecnológico completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridadB4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Profesional Incompleto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridadB5" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Profesional Completo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEscolaridadB6" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <p>
  <!-- /.col -->

  </section>
</p>
        <p>&nbsp;</p>
        <p>
          <!-- /.content -->


           <!---

    	ANALISIS TIPO DE VIVIENDA TIPO B
    --->

           <section class="content">


<div class="row">

          <!-- /.col -->

                        </p>
        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Tipo Vivienda Tipo B</h3>
              <p class="box-title">&nbsp;</p>
              <p class="box-title">&nbsp;</p>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="48%">
                   	  <div id="tipoViviendaB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="52%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p>El 46 % de los trabajadores evaluados viven en arriendo, el 27% en vivienda familiar y el 27 % en vivienda propia.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Tipo Vivienda</strong></p></td>
                          </tr>
                          <tr>
                            <td width="200" nowrap valign="bottom"><p><strong>Propia</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dTipoViviendaB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>En Arriendo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dTipoViviendaB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Familiar</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dTipoViviendaB3" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <p>
  <!-- /.col -->

  </section>
</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
          <!-- /.content -->


          <!---

    	ANALISIS ESTRATO
    --->

            <section class="content">


<div class="row">

          <!-- /.col -->

                                        </p>
        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís por Estrato Tipo B</h3>

            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="48%">
                   	  <div id="estratoB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="52%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p>El 55% de los trabajadores evaluados habitan en estrato tres (3), seguido del 36% habitan en estrato dos (2), el 9% refiere que vive en Estrato uno  (1).</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estrato</strong></p></td>
                          </tr>
                          <tr>
                            <td width="200" nowrap valign="bottom"><p><strong>Estrato 1</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstratoB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 2</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstratoB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Estrato 3</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dEstratoB3" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;  </p>
</div>
        <!-- /.col -->

 </section>
    <!-- /.content -->


    	 <!---

    	ANTIGUEDAD EMPRESA
    --->

    <section class="content">


       <div class="row">

        <!-- /.col -->

        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border"> <i class="fa fa-bar-chart-o"></i>
                <h3 class="box-title">Analisís por Antiguedad Empresa Tipo B</h3>
            </div>
            <div class="box-body">
              <table width="100%">
                <tr>
                  <td width="49%"><div id="AntiguedadEmpresaB-chart" style="height: 300px;"></div></td>
                  <td width="51%"><div align="center">
                      <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                        <tr>
                          <td valign="top" align="left" colspan="2"><p>El 46% de los trabajadores evaluados su antigüedad en la empresa está dada  menos de un año, el 36% entre 1 y 5 años de antigüedad y 18% entre 5 y 10 años de antigüedad en la organización.</p></td>
                        </tr>
                      </table>
                    <table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                        <tr>
                          <td nowrap colspan="2"><p align="center"><strong>Antiguedad Empresa</strong></p></td>
                        </tr>
                        <tr>
                          <td width="200" nowrap valign="bottom"><p><strong>Menos de1 año</strong></p></td>
                          <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresaB1" align="center"></div>
                            <p></p></td>
                        </tr>
                        <tr>
                          <td width="213" nowrap valign="bottom"><p><strong>Entre 1 y 5 años</strong></p></td>
                          <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresaB2" align="center"></div>
                            <p></p></td>
                        </tr>
                        <tr>
                          <td width="213" nowrap valign="bottom"><p><strong>Entre 5 y 10 años</strong></p></td>
                          <td width="51" nowrap valign="bottom"><p align="center">
                              <div id="dAntiguedadEmpresaB3" align="center"></div>
                            <p></p></td>
                        </tr>
                    </table>
                  </div></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
</div>
        <!-- /.col -->

    </section>
    <!-- /.content -->



<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>                      <span class="Estilo3">RESULTADOS DEL  CUESTIONARIO ESTRES GRUPO B</span></strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<!---

    	ANALISIS ESTRES TIPO A
    --->

 	<section class="content">


     	<div class="row">

        <!-- /.col -->

	<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís De Estrés Tipo B </h3>
              <p class="box-title">&nbsp;</p>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="estrestipoB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de Riesgo Muy ALto, seguido del 27%  de Riesgo Alto,  9% de Riego Medio, 9% Bajo,  y 9% Sin Riesgo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estres Tipo A</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Riesgo Muy Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Medio</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresB3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Bajo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresB4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Sin Riesgo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dEstresB5" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>

	</div>
        <p>
          <!-- /.col -->

</section>
        </p>
        <p>
          <!-- /.content -->

</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="212" rowspan="2"><p align="center"><strong>TOTAL    GENERAL</strong><br>
              <strong>SÍNTOMAS    DE ESTRÉS</strong> </p></td>
      <td width="212"><p align="center"><strong>Puntaje    (transformado)</strong></p></td>
      <td width="212"><p align="center"><strong>Nivel de Estrés</strong></p></td>
    </tr>
    <tr>
      <td width="212"><p align="center"><strong>13,8</strong></p></td>
      <td width="212"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="676" height="18" src="informe_completo_clip_image004_0005.gif"><br clear="ALL">-->
</p>
<p align="center"><span class="Estilo3"><strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></span></p>
<p align="center">&nbsp;</p>
<!--<p align="center"><img width="642" height="91" src="informe_completo_clip_image005_0000.gif" alt="Cuadro de texto: Mantener los factores protectores como las buenas relaciones laborales, por medio de integraciones y compartimiento de espacios comunes, en el mantenimiento del nivel de estrés bajo."><br>-->
<strong>               </strong> </p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>INTERPRETACION TOTAL EXTRALABORAL B</strong></p>
<p align="center">
  <!---

    	ANALISIS EXTRALABORAL TIPO B    --->

 	<section class="content">


     	<div class="row">

        <!-- /.col -->
</p>
<div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís Extralaboral Tipo B </h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="ExtralaboralB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de Riesgo Muy ALto, seguido del 27%  de Riesgo Alto,  9% de Riego Medio, 9% Bajo,  y 9% Sin Riesgo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Estres Tipo B </strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Riesgo Muy Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Medio</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralB3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Bajo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralB4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Sin Riesgo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dExtralaboralB5" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>

</div>
        <p>
          <!-- /.col -->

</section>
</p>
        <p>
          <!-- /.content -->


</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="212" rowspan="2"><p align="center"><strong>INTERPRETACION    TOTAL</strong><br>
      <strong>EXTRALABORAL</strong> </p></td>
      <td width="212"><p align="center"><strong>Puntaje    (transformado)</strong></p></td>
      <td width="212"><p align="center"><strong>Nivel de estrés</strong></p></td>
    </tr>
    <tr>
      <td width="212" valign="bottom"><p align="center"><strong>19,4</strong></p></td>
      <td width="212" valign="bottom"><p align="center"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="676" height="18" src="informe_completo_clip_image004_0006.gif"><br clear="ALL">-->
    <strong> </strong></p>
<p align="center">&nbsp;</p>
<p align="center"><strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></p>
<p align="center">&nbsp;</p>
<p align="center"><br>
  <!--<img width="642" height="46" src="informe_completo_clip_image001_0000.gif" alt="Cuadro de texto: En términos generales el factor extra laboral del grupo B esta con Riesgo Medio.">--></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>RIESGO EXTRALABORAL GRUPO B</strong></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="632">
    <tr>
      <td width="386"><p align="center"><strong>LIDERAZGO    Y RELACIONES SOCIALES EN EL TRABAJO</strong></p></td>
      <td width="123"><p align="center"><strong>Puntaje</strong><br>
      <strong>(Transformado)</strong></p></td>
      <td width="123"><p align="center"><strong>Nivel    de riesgo</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Tiempo fuera del trabajo</strong></p></td>
      <td width="123"><p align="center"><strong>23,3</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Relaciones familiares</strong></p></td>
      <td width="123"><p align="center"><strong>16,7</strong></p></td>
      <td width="123"><p><strong>RIESGO    BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Comunicación y relaciones    interpersonales</strong></p></td>
      <td width="123"><p align="center"><strong>18,2</strong></p></td>
      <td width="123"><p><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Situación económica del grupo familiar</strong></p></td>
      <td width="123"><p align="center"><strong>22,7</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Características de la vivienda y de su    entorno</strong></p></td>
      <td width="123"><p align="center"><strong>17,7</strong></p></td>
      <td width="123"><p><strong>RIESGO    ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Influencia del entorno extralaboral    sobre el trabajo</strong></p></td>
      <td width="123"><p align="center"><strong>25,0</strong></p></td>
      <td width="123"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>Desplazamiento vivienda  trabajo vivienda</strong></p></td>
      <td width="123"><p align="center"><strong>16,5</strong></p></td>
      <td width="123"><p><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="386"><p><strong>TOTAL GENERAL FACTORES DE</strong><br>
      <strong> RIESGOPSICOSOCIAL EXTRALABORAL</strong></p></td>
      <td width="123"><p align="center"><strong>15,7</strong></p></td>
      <td width="123"><p><strong>RIESGO MEDIO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p align="center"><!--<img width="630" height="20" src="informe_completo_clip_image003_0002.gif"><br clear="ALL">-->
</p>
<p align="center">&nbsp;</p>
<p align="center">OBSERVACIONES Y COMENTARIOS  DEL EVALUADOR</p>
<p align="center">&nbsp;</p>
<!--<p align="center"><img width="642" height="53" src="informe_completo_clip_image004_0007.gif" alt="Cuadro de texto: En términos generales el factor extralaboral del grupo B esta Riesgo Medio"></p>-->
<p align="center"><strong>&nbsp;</strong></p>
<p align="center"><strong>RESULTADOS DEL GRUPO B</strong><br>
<br>
  INTERPRETACION:  Del total de la población con formato B Intralaboral; que son 11; el 28% tiene  un Riesgo Muy Alto; el 18% tiene un Riesgo Alto; 18% con Riesgo Medio, 27% con  Riesgo Bajo, y 9% Sin Riesgo.</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>RESULTADOS  DEL CUESTIONARIO DE FACTORES DE RIESGO </strong></p>
<p align="center"><strong>PSICOSOCIAL INTRALABORAL - FORMA B</strong></p>
<p>
       <!---

    	ANALISIS INTRALABORAL TIPO B
    --->
</p>
     <p>&nbsp;</p>
     <p>
       <section class="content">


<div class="row">

       <!-- /.col -->

      </p>
     <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Analisís Intralaboral Tipo B </h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="50%">
                   	  <div id="IntralaboralB-chart" style="height: 300px;"></div>
                    </td>
                    <td width="50%">
                     <div align="center">
                     <table border="0" cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left" colspan="2"><p align="justify">El 37 % de la población trabajadora se ubica dentro del rango de Riesgo Muy ALto, seguido del 27%  de Riesgo Alto,  9% de Riego Medio, 9% Bajo,  y 9% Sin Riesgo.</p></td>
                      </tr>
                    </table>
					<table border="1" cellspacing="0" cellpadding="0" hspace="0" vspace="0">
                          <tr>
                            <td nowrap colspan="2"><p align="center"><strong>Intralaboral Tipo B</strong></p></td>
                          </tr>
                          <tr>
                            <td width="270" nowrap valign="bottom"><p><strong>Riesgo Muy Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralB1" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Alto</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralB2" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Medio</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralB3" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Riesgo Bajo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralB4" align="center"></div></p></td>
                          </tr>
                          <tr>
                            <td width="213" nowrap valign="bottom"><p><strong>Sin Riesgo</strong></p></td>
                            <td width="51" nowrap valign="bottom"><p align="center">
                            <div id="dIntralaboralB5" align="center"></div></p></td>
                          </tr>


                       </table>
                      </div>
                    </td>
                  </tr>
               </table>

            </div>
            <!-- /.box-body-->
          </div>
          <p>
            <!-- /.box -->
          </p>

	</div>
        <!-- /.col -->

 	</section>
    <!-- /.content -->




<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>&nbsp;</strong></p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="617">
    <tr>
      <td width="617" colspan="5" valign="top"><p><strong>RESULTADOS    DEL CUESTIONARIO</strong></p></td>
    </tr>
    <tr>
      <td width="139" valign="top"><p align="center"><strong>Dominios</strong></p></td>
      <td width="281" colspan="2" valign="top"><p align="center"><strong>Dimensiones</strong></p></td>
      <td width="122" valign="top"><p align="center"><strong>Puntaje</strong><br>
              <strong>(Transformado)</strong></p></td>
      <td width="76" valign="top"><p align="center"><strong>Nivel de Riesgo</strong></p></td>
    </tr>
    <tr>
      <td width="139" rowspan="3" valign="top"><p align="center"><strong>Liderazgo y relaciones sociales en el    trabajo</strong></p></td>
      <td width="281" colspan="2" valign="top"><p><strong>Características    del liderazgo</strong></p></td>
      <td width="122" valign="bottom"><p align="center"><strong>35,1</strong></p></td>
      <td width="76" valign="bottom"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="281" colspan="2" valign="top"><p><strong>Relaciones    sociales en el trabajo</strong></p></td>
      <td width="122" valign="bottom"><p align="center"><strong>25,0</strong></p></td>
      <td width="76" valign="bottom"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="281" colspan="2" valign="top"><p><strong>Retroalimentación    del desempeño</strong></p></td>
      <td width="122"><p align="center"><strong>43,2</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="419" colspan="3" valign="top"><p><strong>LIDERAZGO    Y RELACIONES SOCIALES EN EL TRABAJO</strong></p></td>
      <td width="122"><p align="center"><strong>32,4</strong></p></td>
      <td width="76"><p align="center"><strong>38,9</strong></p></td>
    </tr>
    <tr>
      <td width="144" colspan="2" rowspan="5" valign="top"><p align="center"><strong>&nbsp;</strong></p>
          <p align="center"><strong>&nbsp;</strong></p>
        <p align="center"><strong>&nbsp;</strong></p>
        <p align="center"><strong>Control    sobre el trabajo</strong></p></td>
      <td width="275" valign="top"><p><strong>Claridad de rol</strong></p></td>
      <td width="122"><p align="center"><strong>29,5</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO    ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="275" valign="top"><p><strong>Capacitación</strong></p></td>
      <td width="122"><p align="center"><strong>22,7</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO    MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="275" valign="top"><p><strong>Participación y manejo    del cambio</strong></p></td>
      <td width="122"><p align="center"><strong>47,0</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="275" valign="top"><p><strong>Oportunidades para el    uso y desarrollo de habilidades y conocimientos</strong></p></td>
      <td width="122"><p align="center"><strong>39,8</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="275" valign="top"><p><strong>Control y autonomía    sobre el trabajo</strong></p></td>
      <td width="122"><p align="center"><strong>56,1</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="419" colspan="3" valign="top"><p><strong>CONTROL    SOBRE EL TRABAJO</strong></p></td>
      <td width="122"><p align="center"><strong>38,0</strong></p></td>
      <td width="76"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
  </table>
</div>
<!--<p align="center"><img width="609" height="37" src="informe_completo_clip_image002_0004.gif"><br clear="ALL">-->
</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="617">
    <tr>
      <td width="144" rowspan="6" valign="top"><p><strong>&nbsp;</strong></p>
          <p><strong>&nbsp;</strong></p>
        <p align="center"><strong>Demandas    del trabajo</strong></p></td>
      <td width="274" valign="top"><p><strong>Demandas    ambientales y de esfuerzo físico</strong></p></td>
      <td width="113"><p align="center"><strong>37,3</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="274" valign="top"><p><strong>Demandas    emocionales</strong></p></td>
      <td width="113"><p align="center"><strong>11,6</strong></p></td>
      <td width="85"><p align="center"><strong>SIN RIESGO</strong></p></td>
    </tr>
    <tr>
      <td width="274" valign="top"><p><strong>Demandas    cuantitativas</strong></p></td>
      <td width="113"><p align="center"><strong>39,4</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="274" valign="top"><p><strong>Influencia    del trabajo sobre el entorno Extra laboral</strong></p></td>
      <td width="113"><p align="center"><strong>34,1</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
    <tr>
      <td width="274" valign="top"><p><strong>Demandas    de carga mental</strong></p></td>
      <td width="113"><p align="center"><strong>62,3</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="274" valign="top"><p><strong>Demandas    de la jornada de trabajo</strong></p></td>
      <td width="113"><p align="center"><strong>37,5</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO BAJO</strong></p></td>
    </tr>
    <tr>
      <td width="418" colspan="2" valign="top"><p><strong>DEMANDAS    DEL TRABAJO</strong></p></td>
      <td width="113"><p align="center"><strong>34,4</strong></p></td>
      <td width="85"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<!--<p align="center"><img width="623" height="37" src="informe_completo_clip_image003_0003.gif"></p>-->
<p align="center">&nbsp;</p>

<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" align="center" width="613">
    <tr>
      <td width="425" valign="top"><p><strong>Recompensas derivadas de    la pertenencia a la organización y del trabajo que se realiza</strong></p></td>
      <td width="113"><p align="center"><strong>11,4</strong></p></td>
      <td width="75"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="425" valign="top"><p><strong>Reconocimiento y    compensación</strong></p></td>
      <td width="113"><p align="center"><strong>24,2</strong></p></td>
      <td width="75"><p align="center"><strong>RIESGO MEDIO</strong></p></td>
    </tr>
    <tr>
      <td width="425" valign="top"><p><strong>RESULTADO TOTAL </strong></p></td>
      <td width="113"><p align="center"><strong>19,1</strong></p></td>
      <td width="75"><p align="center"><strong>RIESGO ALTO</strong></p></td>
    </tr>
  </table>
  <br clear="ALL">
</div>
<p align="center"><strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></p>
<!--<p align="center"><img width="642" height="91" src="informe_completo_clip_image004_0008.gif" alt="Cuadro de texto: En demandas de carga mental y demandas de jornada de trabajo puntean un nivel alto de riesgo con referente también a las demandas cuantitativas, y con demandas de trabajo alto; con un balance en riesgo alto intralaboral B.    "></p>-->
<p align="center"><strong>SUGERENCIA Y RECOMENDACIONES</strong></p>
<!--<p align="center"><img width="642" height="108" src="informe_completo_clip_image005_0001.gif" alt="Cuadro de texto: Revisar si se están poniendo en práctica los cronogramas con referente a las pausas activas, en cuanto a la carga mental revisar si las indicaciones que se dan a los trabajadores si son claras o están siendo muy complejas o se están dando de manera simultánea, por medio de reunión de grupos focales, donde se identifiquen los factores de riesgo y su posterior corrección."></p>--->
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><strong>CONCLUSIONES</strong></p>
<div align="center">
  <ul>
    <li>El  ejercicio y la aplicación del cuestionario permiten evidenciar los elementos  asociados al sistema de gestión de factores Psicolabórales en el trabajo para  su prevención e intervención desde la estructura organizacional de la empresa</li>
  </ul>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="633">
    <tr>
      <td width="246" valign="top"><p align="center"><strong>AREAS</strong></p></td>
      <td width="387" valign="top"><p align="center"><strong>ACTIVIDADES</strong></p></td>
    </tr>
    <tr>
      <td width="246"><p align="center"><strong>FACTORES    EXTRALABORALES</strong></p></td>
      <td width="387"><p align="justify">Cabe resaltar    que el 45% de la población trabajadora de Coavihuila , no cuenta con vivienda    propia , es importante considerar     dentro del programa de bienestar de la organización planes de ahorro    para vivienda,  que le permita al trabajador    visualizarse en la adquisición de vivienda propia.</p></td>
    </tr>
    <tr>
      <td width="246"><p align="center"><strong>CUESTIONARIO    DE ESTRÉS</strong></p></td>
      <td width="387"><p align="justify">Inoculación    del estrés, pausas activas, capacitación sobre ergonomía, estrategias de    autocontrol y control estimular; Inspeccionar permanentemente el medio    ambiente del trabajo, controlando riesgos laborales, adecuando el ambiente    físico-temperatura, iluminación etc.</p>
          <p align="justify">La    intervención sobre el trabajador consiste en dotarle de estrategia y    actividades sobre estilos de afrontamiento y resolución de conflictos    organizativos.</p></td>
    </tr>
    <tr>
      <td width="246"><p align="center"><strong>FACTORES    INTRALABORALES</strong></p></td>
      <td width="387"><p align="justify">Campañas sobre    el afecto, integración familia- empresa, fortalecer el clima social de la    empresa, programas de contingencias empresarial, capacitación sobre talento    humano, empoderamiento y relaciones interpersonales.<br>
        Fortalecimiento    del bienestar laboral y calidad de vida: actividades educativas o formativas    con los trabajadores, capacitación, selección de talentos, gestión del    cambio, clima y cultura organizacional.</p></td>
    </tr>
    <tr>
      <td width="246"><p align="center"><strong>OTROS</strong></p></td>
      <td width="387"><p align="justify"> <br>
        Garantizar el    seguimiento a los factores de riesgo encontrados para la efectividad de las    acciones y las actividades que se plantean.<br>
        Racionalizar    el tiempo de trabajo estableciendo pausas activas, físicas y metacognitivas.</p></td>
    </tr>
  </table>
</div>
<p align="center"><strong>RESPONSABLE DEL INFORME</strong></p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="635">
    <tr>
      <td width="211" valign="top" bordercolor="#000000"><div align="center"><strong>NOMBRE</strong> </div></td>
      <td width="212" valign="top" bordercolor="#000000"><p align="center"><strong>PEROFESION</strong></p></td>
      <td width="213" valign="top" bordercolor="#000000"><p align="center"><strong>FIRMA</strong></p></td>
    </tr>
    <tr>
      <td width="211" valign="top" bordercolor="#000000"><p align="justify"><strong>Carlos Eduardo Paredes Trujillo</strong></p></td>
      <td width="212" valign="top" bordercolor="#000000"><p align="justify">Psicólogo    Esp. Gerencia de sistemas de Gestion     de la calidad  y Esp en Gestion    de la seguridad y salud  en el trabajo<br>
      Licencia SST. 0502 de 2017.</p></td>
      <td width="213" valign="top" bordercolor="#000000"><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td width="635" colspan="3" valign="top" bordercolor="#000000"><p><strong>CONTACTO Y NUMEROS DE    TELEFONO  VERIFICACIÓN VERACIDAD DEL    INFORME</strong><br>
      318 2959 301</p></td>
    </tr>
  </table>
</div>


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../bower_components/Flot/jquery.flot.categories.js"></script>


<!-- Page script -->
<p align="center"><br clear="ALL">
<script src="js/graficosTipoA.js"></script>
<?php
include"lib/crear_grafico.php";
?>




</body>
</html>
