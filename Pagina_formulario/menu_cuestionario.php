<?php
@session_start();
include"../lib/conexion.php";

?>
<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>WebThemez - Single page website</title>
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

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i>Doctor</b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#services" class="scroll-link">Services</a></li>
          <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
          <li><a href="#work" class="scroll-link">Portfolio</a></li>
          <li><a href="#team" class="scroll-link">Team</a></li>
          <li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
          <li><a href="#usuario.php" class="scroll-link">Usuario</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse-->
    </nav>
    <!--/.navbar-->
  </div>
  <!--/.container-->
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home"><br/>
  <div class="banner-container"> </div>
</section>

<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Cuestionario</h2>
      <p>Seleccione el cuestionario que va a completar, a medida que va completando los cuestionarios van desapareciendo de la lista.</p>
    </div>
    <div class="row">
    <?php

		$consuldocumento=mysql_query("SELECT cu.cue_cod,cu.cue_nombre,cu.cue_descripcion,c.coe_cod ,p.per_cod FROM persona p, persona_contrato c, cuestionario cu WHERE p.per_cod=c.per_cod AND pec_estado='A' and
		per_documento='".$_SESSION['sper_documento']."' AND cu.cue_cod=c.cue_cod ");
		while($co=mysql_fetch_array($consuldocumento)){
			$_SESSION['sper_cod']=$co['per_cod'];
			$_SESSION['sper_documento']=$_POST['txtdocumento'];
      $_SESSION['scontrato']=$co['coe_cod'];
			$red++;
			echo'
			  <div class="col-md-3 text-center c'.$red.'"><a href="frm_vista.php?a='.$co[0].'" target="blanck"> <i class="fa fa-life-ring fa-2x circle"></i>
				<h3><span class="id-color">'.$co['cue_nombre'].'</span></h3>
				<p>'.$co['cue_descripcion'].'</p></a>
			  </div>
			';
			if($red==2){
				$red=0;
			}
		}
	?>
      <!-- item -->

      <!-- end: -->

      <!-- item -->

      <!-- end:-->
    </div>
  </div>
  <!--/.container-->
</section>

<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio"> </div>
      </div>
    </div>
  </div>


</section>

<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2016 | All Rights Reserved -- Template by <a href="http://webThemez.com">WebThemez.com</a> </div>
    </div>
    <!-- / .row -->
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/waypoints.js"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
