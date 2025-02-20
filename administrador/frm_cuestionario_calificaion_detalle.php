<?php
session_start();

include"../lib/conexion.php";
$txtbloque=$_REQUEST['cbobloque'];
if($_REQUEST['accion']==1){
	$cbocuestionario=$_REQUEST['cbocuestionario'];
	$txtorden=$_REQUEST['txtorden'];
	$txtpregunta=$_REQUEST['txtpregunta'];

	if($_SESSION['scar_cod']==""){

		$consulcargo=mysql_query("select cup_cod,cub_cod,cup_pregunta,cup_orden from cuestionario_pregunta where cup_pregunta ='".$txtpregunta."' and cub_cod=".$txtbloque);
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Pregunta ya Existe Para este Cuestionario')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO cuestionario_pregunta (cub_cod,cup_pregunta,cup_orden) VALUES(".$txtbloque.",'".$txtpregunta."',".$txtorden.")");
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
		$guarda=mysql_query("update cuestionario_pregunta set cub_cod=".$cbocuestionario.", cup_pregunta='".$txtpregunta."' ,cup_orden=".$txtorden." where cup_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_cuestionario_pregunta()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";
		}

	}
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update cuestionario_pregunta set cup_estado='I' where cup_cod=".$_REQUEST['txtid']);
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
	$guarda=mysql_query("update cuestionario_pregunta set cup_estado='A' where cup_cod=".$_REQUEST['txtid']);
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
	$consul=mysql_query("SELECT p.cup_cod, p.cup_pregunta,p.cup_orden,p.cup_estado,b.cub_cod,b.cub_bloque,c.cue_cod,c.cue_nombre FROM cuestionario_pregunta p INNER JOIN cuestionario_bloque b ON p.cub_cod=b.cub_cod INNER JOIN cuestionario c ON c.cue_cod=b.cue_cod where cup_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		echo"<script>document.getElementById('cbocuestionario').value='".$co['cue_cod']."'</script>";
		echo"<script>document.getElementById('txtbloque').value='".$co['cub_bloque']."'</script>";
		echo"<script>document.getElementById('txtorden').value='".$co['cup_orden']."'</script>";
		echo"<script>document.getElementById('txtpregunta').value='".$co['cup_pregunta']."'</script>";
		$_SESSION['scar_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";
	}

	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==7){
	$consul=mysql_query("SELECT cub_cod,cub_bloque FROM cuestionario_bloque WHERE cue_cod=".$_REQUEST['cbocuestionario']." and cub_estado='A'");
	while($co=mysql_fetch_array($consul)){
		echo"<option value=".$co['cub_cod'].">".$co['cub_bloque']."</option>";
		//echo"<script>llamar_cargo()
	}
	

	echo"<script>$('#divmsn').html('');</script>";
}
?>
