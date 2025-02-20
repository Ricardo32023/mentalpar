<?php
session_start();
$txtcuestionario=$_REQUEST['txtcuestionario'];
include"../lib/conexion.php";
if($_REQUEST['accion']==1){
	
	$txtdescripcion=$_REQUEST['txtdescripcion'];
	if($_SESSION['scar_cod']==""){
		
		$consulcargo=mysql_query("select cue_nombre,cue_descripcion from cuestionario where cue_nombre ='".$txtcuestionario."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Cuestionario ya Existe')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO cuestionario (cue_nombre,cue_descripcion) VALUES('".$txtcuestionario."','".$txtdescripcion."')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_cuestionario()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";	
			}
		}	
	}
	else{
		$guarda=mysql_query("update cuestionario set cue_nombre='".$txtcuestionario."',cue_descripcion='".$txtdescripcion."'   where cue_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_cuestionario()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";	
		}
	
	}
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update cuestionario set cue_estado='I' where cue_cod=".$_REQUEST['txtid']);
	if($guarda==true){
		echo"<script>fmostrartabla();</script>";

		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==4){
	$guarda=mysql_query("update cuestionario set cue_estado='A' where cue_cod=".$_REQUEST['txtid']);
	if($guarda==true){
		echo"<script>fmostrartabla();</script>";

		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==5){
	$consul=mysql_query("select cue_cod, cue_nombre,cue_descripcion from cuestionario  where cue_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		echo"<script>document.getElementById('txtcuestionario').value='".$co['cue_nombre']."'</script>";
		echo"<script>document.getElementById('txtdescripcion').value='".$co['cue_descripcion']."'</script>";
		$_SESSION['scar_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn').html('');</script>";
}
?>