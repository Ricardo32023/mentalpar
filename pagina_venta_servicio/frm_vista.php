<?php
@session_start();
$_SESSION['scar_cod']="";
include"../lib/conexion.php";
$_SESSION['cntpregunta']=0;
$_SESSION['nombrepregunta'][]="";
$_SESSION['codpregunta'][]="";
$_SESSION['cuestionario']="";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>WebThemez - Single page website</title>
<head>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>
<body bgcolor="#005F8C">

      <section id="services" class="page-section colord" >
        <div class="col-md-6" align="center">
        <div class="box box-primary" align="center">
          <div class="box-header with-border" align="center">
            <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->

          <form role="form" name="frm_cargo" method="post" action="guardar_encuesta.php">

            <?php
			//$_REQUEST['cbocuestionario']=1;
include"../lib/conexion.php";

$consulcuestionario=mysql_query("SELECT cue_cod,cue_nombre,cue_descripcion FROM cuestionario WHERE cue_cod=".$_REQUEST['a']);
if($cocuestionario=mysql_fetch_array($consulcuestionario)){
  $_SESSION['cuestionario']=$cocuestionario['cue_cod'];
	$titulo=$cocuestionario['cue_nombre'];
	$descripcion=$cocuestionario['cue_descripcion'];
  $_REQUEST['cbocuestionario']=$cocuestionario['cue_cod'];
}
?>
            <table width="100%" border="1" class="table table-bordered table-striped">
              <tr>
                <td>
                  <?php
	echo "<div align='center'><strong>".$titulo."<stron><br/>".$descripcion."</div>";
	?>
                  </td>
                </tr>
                <?php
              	$consulbloque=mysql_query("SELECT cub_cod,cub_bloque,cub_descripcion FROM cuestionario_bloque WHERE cue_cod=".$_REQUEST['cbocuestionario']." and cub_estado='A' ORDER BY cub_orden");
              	while($cobloque=mysql_fetch_array($consulbloque)){
              		echo"
              		<tr>
              			<td><strong>".$cobloque['cub_bloque']."</strong><br/>".$cobloque['cub_descripcion']."
              			<table border='0' width='98%'>

              		";

              		//echo "SELECT cup_cod,cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$cobloque['cub_cod']." and cup_estado='A' ORDER BY cup_orden";
              		$consulpregunta=mysql_query("SELECT cup_cod,cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$cobloque['cub_cod']." and cup_estado='A' ORDER BY cup_orden");
              		while($copregunta=mysql_fetch_array($consulpregunta)){
              			$i++;
                    $_SESSION['cntpregunta']=$i;
                    $_SESSION['nombrepregunta'][$i]=$copregunta[1];
                      $_SESSION['codpregunta'][$i]=$copregunta['cup_cod'];
              			echo"
              			<tr>
              				<td width='80%'>$copregunta[1]</td>
              				<td>
              					<select name='cbopregunta$i' id='cbopregunta$i' >
              				";

              							$consulrespuesta=mysql_query("SELECT rp.rep_cod,rp.res_cod,res_nombre,rep_valor FROM respuesta_pregunta rp INNER JOIN respuesta r ON rp.res_cod = r.res_cod
              	INNER JOIN cuestionario_pregunta c ON rp.cup_cod = c.cup_cod WHERE rp.rep_estado='A' AND c.cup_cod=".$copregunta['cup_cod']);
                            	echo"<option value=''></option>";
                            while($coregunta=mysql_fetch_array($consulrespuesta)){
              								echo"<option value=".$coregunta['res_cod'].">".$coregunta['res_nombre']."</option>";
              							}
              			echo"
              									</select>
              				</td>
              			</tr>
              			";
              		}

              		echo"
              			</table>
              		</td>
              			</tr>
              	";
              	}
              	echo"<script>$('#divmsn').html('');</script>";
              	?>

              <tr>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                </tr>
              </table>
            <button type="submit" onclick="fguardar()" class="btn btn-primary"><div id="div_titulobutton">Guardar</div></button>

            </form>
          </div>
        </section>
      </div>

</div>
</div>
</body>
</html>
