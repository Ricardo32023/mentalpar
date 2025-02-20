<?php
session_start();

include"../lib/conexion.php";
$txtbloque=$_REQUEST['txtbloque'];
if($_REQUEST['accion']==1){
	$cbocuestionario=$_REQUEST['cbocuestionario'];
	$txtorden=$_REQUEST['txtorden'];
	$txtdescripcion=$_REQUEST['txtdescripcion'];

	if($_SESSION['scar_cod']==""){

		$consulcargo=mysql_query("select cue_cod,cub_bloque,cub_orden,cub_descripcion from cuestionario_bloque where cue_cod =".$cbocuestionario." and cub_bloque='".$txtbloque."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Bloque ya Existe Para este Cuestionario')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO cuestionario_bloque (cue_cod,cub_bloque,cub_orden,cub_descripcion) VALUES(".$cbocuestionario.",'".$txtbloque."',".$txtorden.",'".$txtdescripcion."')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_cuestionario_bloque()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";
			}
		}
	}
	else{
		$guarda=mysql_query("update cuestionario_bloque set cue_cod=".$cbocuestionario.", cub_bloque='".$txtbloque."' ,cub_orden=".$txtorden." ,cub_descripcion='".$txtdescripcion."' where cub_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_cuestionario_bloque()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";
		}

	}
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update cuestionario_bloque set cub_estado='I' where cub_cod=".$_REQUEST['txtid']);
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
	$guarda=mysql_query("update cuestionario_bloque set cub_estado='A' where cub_cod=".$_REQUEST['txtid']);
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
	$consul=mysql_query("select cub_cod,cue_cod,cub_bloque,cub_orden,cub_descripcion from cuestionario_bloque where cub_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		echo"<script>document.getElementById('cbocuestionario').value='".$co['cue_cod']."'</script>";
		echo"<script>document.getElementById('txtbloque').value='".$co['cub_bloque']."'</script>";
		echo"<script>document.getElementById('txtorden').value='".$co['cub_orden']."'</script>";
		echo"<script>document.getElementById('txtdescripcion').value='".$co['cub_descripcion']."'</script>";
		$_SESSION['scar_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";
	}

	echo"<script>$('#divmsn').html('');</script>";
}
?>
