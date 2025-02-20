<?php
@session_start();

include"../lib/conexion.php";
$txtbloque=$_REQUEST['cbobloque'];
if($_REQUEST['accion']==1){
	$cbobloque=$_REQUEST['cbobloque'];
	$txtvalor=$_REQUEST['txtvalor'];
	$cbopregunta=$_REQUEST['cbopregunta'];
	$cborespuesta=$_REQUEST['cborespuesta'];
	if($_SESSION['scar_cod']==""){
		$consulcargo=mysql_query("select cup_cod,cuc_valor from cuestinario_calificacion where cup_cod =".$cbopregunta." and res_cod=".$cborespuesta);
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Ya tiene Valor esta Pregunta')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO cuestinario_calificacion ( cup_cod,res_cod,cuc_valor ) VALUES(".$cbopregunta.",".$cborespuesta.",'".$txtvalor."')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_cuestionario_calificacion()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";
			}
		}
	}
	else{
		$guarda=mysql_query("update cuestinario_calificacion set cup_cod=".$cbopregunta.", res_cod='".$txtprecborespuestagunta."' ,cuc_valor=".$txtvalor." where cuc_cod=".$_SESSION['scar_cod']);
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
	echo'<option value="0">Seleccione..</option>';
	$consul=mysql_query("SELECT cub_cod,cub_bloque FROM cuestionario_bloque WHERE cue_cod=".$_REQUEST['cbocuestionario']." and cub_estado='A'");
	while($co=mysql_fetch_array($consul)){
		echo"<option value=".$co['cub_cod'].">".$co['cub_bloque']."</option>";
		//echo"<script>llamar_cargo()
	}


	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==8){
	$consul=mysql_query("SELECT cup_cod,cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$_REQUEST['cbobloque']." AND cup_estado='A' ORDER BY cup_orden");
	echo'<option value="0">Seleccione..</option>';
	while($co=mysql_fetch_array($consul)){
		echo"<option value=".$co['cup_cod'].">".$co['cup_pregunta']."</option>";
		//echo"<script>llamar_cargo()
	}


	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==10){
	$consul=mysql_query("SELECT cup_cod, cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$_REQUEST['cbobloque']);
	echo'<option value="0">Seleccione..</option>';
	while($co=mysql_fetch_array($consul)){
		echo"<option value=".$co['cup_cod'].">".$co['cup_pregunta']."</option>";
		//echo"<script>llamar_cargo()
	}

	echo"<script>$('#divmsn').html('');</script>";
}
?>
