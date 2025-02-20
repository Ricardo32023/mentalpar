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
  .Estilo6 {font-size: 16px; font-weight: bold; }
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <section class="content">
  	<div class="row">
    	<div class="col-md-6">
    	  <p align="center" class="Estilo3"><strong>INFORME  TEST AQ ACROFOBIA </strong></p>
    	  <p align="center"><span class="Estilo3"><strong>(TRABAJO EN ALTURAS)</strong></span><br>
  	      </p>
    	  <p align="center">&nbsp;</p>
    	  <p><span class="Estilo2"><span class="Estilo3"><strong>Nombre y Apellidos: </strong></span>Jenifer Escobar Torres<br>
              <span class="Estilo6">Numero  de Identificación:</span>  1075249132<br>
              <span class="Estilo3"><strong>Edad:</strong></span>28<br>
          <strong>Sexo:</strong> Femenino<br>
          <strong>Escolaridad</strong>: Profesional<br>
          <strong>Cargo: </strong>Hse<br>
          <strong>Estudio Solicitado: </strong>Test Aq de Acrofobia<br>
          <strong>Fecha de Examen: </strong>28 de Diciembre del 2018</span></p>
    	  <p>&nbsp;</p>
    	  <p align="justify">El test AQ mide los síntomas psicológicos, que son de  preocupación, temor, inseguridad y miedo social, ya que quienes sufren de  acrofobia se ven en una situación de desnivel o de pérdida de equilibrio,  aparecen también los indicios fisiológicos de que el pánico se apodera de  ellos. Algunos de ellos son:</p>
    	  <ol>
    	    <li>Aumento del ritmo cardíaco.</li>
    	    <li>Aumento de la temperatura corporal.</li>
    	    <li>Tensión muscular.</li>
    	    <li>Problemas digestivos.</li>
    	    <li>Temblores.</li>
    	    <li>Mareos.</li>
  	    </ol>
    	  <p>&nbsp;</p>
    	  <p align="center"><span class="text-sm text-sm Estilo1 Estilo2"><strong>ANALISIS DE ANSIEDAD </strong></span></p>
    	  <p align="justify"><strong> NIVEL DE ANSIEDAD </strong></p>
    	  <ol>
0. Nada de ansiedad tranquilo  relajado.<br>
1. Casi nada.<br>
2. Ligeramente ansioso.<br>
3. medianamente ansioso.<br>
4. moderadamente ansioso.<br>
5. moderadamente alto.<br>
6. extremadamente ansioso.</p>
    	  </ol>
		  <div align="center">
    	    <table border="2" cellspacing="0" cellpadding="0" width="663">
              <tr>
                <td width="104" valign="top" bordercolor="#000000"><p align="center"><strong>ALTURA</strong></p></td>
                <td width="559" valign="top" bordercolor="#000000"><p align="center"><strong>NIVEL DE ANSIEDAD </strong></p></td>
              </tr>
              <tr>
                <td width="104" valign="top" bordercolor="#000000"><p align="center"><strong> 1-5 mt</strong></p></td>
                <td width="559" valign="top" bordercolor="#000000"><p align="center">50    o mas (17-18)</p></td>
              </tr>
              <tr>
                <td width="104" valign="top" bordercolor="#000000"><p align="center"><strong>5-15 mt</strong></p></td>
                <td width="559" valign="top" bordercolor="#000000"><p align="center">30-50    mt (8-12)</p></td>
              </tr>
              <tr>
                <td width="104" valign="top" bordercolor="#000000"><p align="center"><strong>15-30 mt</strong></p></td>
                <td width="559" valign="top" bordercolor="#000000"><p align="center">15-30    mt (6-7-9-10-11-13)</p></td>
              </tr>
              <tr>
                <td width="104" valign="top" bordercolor="#000000"><p align="center"><strong>30-50 mt</strong></p></td>
                <td width="559" valign="top" bordercolor="#000000"><p align="center">5-15    mt (3-4-5-14-16-20)</p></td>
              </tr>
              <tr>
                <td width="104" valign="top" bordercolor="#000000"><p align="center"><strong>50 o mas </strong></p></td>
                <td width="559" valign="top" bordercolor="#000000"><p align="center">1-5    mt ( 1-2-15-19)</p></td>
              </tr>
            </table>
    	  </div>
    	  <p>&nbsp;</p>
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

              <h3 class="box-title">Analisís Nivel de Ansiedad </h3>
            </div>
            <div class="box-body">
               <table width="100%">
               	  <tr>
                  	<td width="65%"><div id="donut-chart" style="height: 300px;"></div></td>
                    <td width="35%">
                      <table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="right">
                      <tr>
                        <td valign="top" align="left"><p align="justify">&nbsp;</p>
                          <p align="justify"><div id="#divgraficoGenero"></div></p></td>
                      </tr>
                    </table>
                                  <table border="01" cellspacing="0" cellpadding="0" width="0">
                                    <tr>
                                      <td width="209" nowrap colspan="2"><p align="center"><strong>Nivel de Ansiedad </strong></p></td>
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
        <p align="center">
  <!-- /.col -->
  <span class="Estilo6">ANALISIS DE EVITACION </span>
        <p align="center">
        
        <p>&nbsp;</p>
        <p>NIVEL DE EVITACIÓN </p>
        <ol>
          <li>Nada de evitación</li>
          <li>Moderada evitación</li>
          <li>Con evitación</li>
        </ol>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div align="center">
          <table border="2" cellspacing="0" cellpadding="0" width="698">
            <tr>
              <td width="349" valign="top" bordercolor="#000000"><p align="center"><strong>ALTURA</strong></p></td>
              <td width="349" valign="top" bordercolor="#000000"><p align="center"><strong>NIVEL DE EVITACION</strong></p></td>
            </tr>
            <tr>
              <td width="349" valign="top" bordercolor="#000000"><p><strong>1-5 mt</strong></p></td>
              <td width="349" valign="top" bordercolor="#000000"><p>&nbsp;</p></td>
            </tr>
            <tr>
              <td width="349" valign="top" bordercolor="#000000"><p><strong>5-15 mt</strong></p></td>
              <td width="349" valign="top" bordercolor="#000000"><p>&nbsp;</p></td>
            </tr>
            <tr>
              <td width="349" valign="top" bordercolor="#000000"><p><strong>15-30 mt</strong></p></td>
              <td width="349" valign="top" bordercolor="#000000"><p>&nbsp;</p></td>
            </tr>
            <tr>
              <td width="349" valign="top" bordercolor="#000000"><p><strong>30-50 mt</strong></p></td>
              <td width="349" valign="top" bordercolor="#000000"><p>&nbsp;</p></td>
            </tr>
            <tr>
              <td width="349" valign="top" bordercolor="#000000"><p><strong>50 o mas </strong></p></td>
              <td width="349" valign="top" bordercolor="#000000"><p>&nbsp;</p></td>
            </tr>
          </table>
        </div>
        <p>&nbsp;</p>
        <p><strong>&nbsp;</strong></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center">        
        <p align="center"><strong>NIVEL DE EVITACION</strong>  
</section>
    <section class="content">
<div class="row">
<!-- /.col -->
<div class="col-md-6">
              <!-- Donut chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>

                  <h3 class="box-title">Analisis Nivel de Evitación </h3>

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
                              <p align="justify"><div id="#divgraficoEtareo"></div></p></td>
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
    <!-- /.box --></p>
          </div>
            <!-- /.col -->
            <p align="center"><strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></p>
            <div align="center">
              <table width="667" height="166" border="1">
                <tr>
                  <td width="707">&nbsp;</td>
                </tr>
              </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><strong>RESPONSABLE DEL INFORME</strong></p>
<div align="center">
  <table border="1" cellspacing="0" cellpadding="0" width="681">
    <tr>
      <td width="202" valign="top" bordercolor="#000000"><div align="center"><strong>NOMBRE</strong> </div></td>
      <td width="212" valign="top" bordercolor="#000000"><p align="center"><strong>PEROFESION</strong></p></td>
      <td width="233" valign="top" bordercolor="#000000"><p align="center"><strong>FIRMA</strong></p></td>
    </tr>
    <tr>
      <td width="202" valign="top" bordercolor="#000000"><p align="justify"><strong>Carlos Eduardo Paredes Trujillo</strong></p></td>
      <td width="212" valign="top" bordercolor="#000000"><p align="justify">Psicólogo    Esp. Gerencia de sistemas de Gestion     de la calidad  y Esp en Gestion    de la seguridad y salud  en el trabajo<br>
      Licencia SST. 0502 de 2017.</p></td>
      <td width="233" valign="top" bordercolor="#000000"><p align="center"><img width="111" height="48" src="informe_acrofobia_clip_image003.gif"></p></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" bordercolor="#000000"><p><strong>CONTACTO Y NUMEROS DE    TELEFONO  VERIFICACIÓN VERACIDAD DEL    INFORME</strong><br>
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
