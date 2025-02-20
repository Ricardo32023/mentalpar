<?php
session_start();

include"../lib/conexion.php";
if($_REQUEST['accion']==1){
	$txtcago=$_REQUEST['txtcargo'];
	if($_SESSION['scar_cod']==""){
		$consulcargo=mysql_query("select car_cod,car_nombre from cargo where car_nombre ='".$txtcago."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Cargo ya Existe')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO cargo (car_nombre) VALUES('".$txtcago."')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_cargo()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";	
			}
		}	
	}
	else{
		$guarda=mysql_query("update cargo set car_nombre='".$txtcago."' where car_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_cargo()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";	
		}
	
	}
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update cargo set car_estado='I' where car_cod=".$_REQUEST['txtid']);
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
	$guarda=mysql_query("update cargo set car_estado='A' where car_cod=".$_REQUEST['txtid']);
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
	$consul=mysql_query("select car_cod, car_nombre from cargo  where car_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		echo"<script>document.getElementById('txtcargo').value='".$co['car_nombre']."'</script>";
		$_SESSION['scar_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn').html('');</script>";
}
?>