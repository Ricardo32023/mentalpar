<?php
@session_start();
include"../lib/conexion.php";

$consuldocumento=mysql_query("SELECT p.per_cod,c.cue_cod,p.per_primernombre,p.per_primerapellido FROM persona p, persona_contrato c WHERE p.per_cod=c.per_cod AND pec_estado='A' and 
per_documento='".$_POST['txtdocumento']."' ");
if($co=mysql_fetch_array($consuldocumento)){
	$_SESSION['sper_cod']=$co['per_cod'];
	$_SESSION['sper_documento']=$_POST['txtdocumento'];
	echo"<script>location.href='menu_cuestionario.php'</script>";
}
else{
	echo"<script>location.href='usuario.php'</script>";
}
?>