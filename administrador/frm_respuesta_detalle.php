<?php
session_start();

include"../lib/conexion.php";
if($_REQUEST['accion']==1){
	$txtrespuesta=$_REQUEST['txtrespuesta'];
	if($_SESSION['scar_cod']==""){
		$consulcargo=mysql_query("select res_cod,res_nombre from respuesta where res_nombre ='".$txtcago."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Cargo ya Existe')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO respuesta (res_nombre) VALUES('".$txtrespuesta."')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_respuesta()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";	
			}
		}	
	}
	else{
		$guarda=mysql_query("update respuesta set res_nombre='".$txtrespuesta."' where res_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_respuesta()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";	
		}
	
	}
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update respuesta set res_estado='I' where res_cod=".$_REQUEST['txtid']);
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
	$guarda=mysql_query("update respuesta set res_estado='A' where res_cod=".$_REQUEST['txtid']);
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
	$consul=mysql_query("select res_cod, res_nombre from respuesta  where res_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		echo"<script>document.getElementById('txtrespuesta').value='".$co['res_nombre']."'</script>";
		$_SESSION['scar_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn').html('');</script>";
}
?>