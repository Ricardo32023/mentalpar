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
				echo"<script>llamar_cuestionario_pregunta()</script>";
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
	echo"<option value='0'>Seleccione</option>";
	while($co=mysql_fetch_array($consul)){

			echo"<option value=".$co['cub_cod'].">".$co['cub_bloque']."</option>";
		//echo"<script>llamar_cargo()
	}


	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==8){
	$consul=mysql_query("SELECT cup_cod,cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$_REQUEST['cbobloque']." AND cup_estado='A' ORDER BY cup_orden");

	echo"<option value='0'>Seleccione</option>";
	while($co=mysql_fetch_array($consul)){

		echo"<option value=".$co['cup_cod'].">".$co['cup_pregunta']."</option>";
		//echo"<script>llamar_cargo()
	}


	echo"<script>$('#divmsn').html('');</script>";
}

function consultarrepuesta($codpregunta){

	echo"

	<br/>
	<table border=1 style='width=95%' class='table table-bordered table-striped'>
		<tr>
			<th width=80%>Respuesta</th>
			<th>Valor</th>
			<th>Accion</th>
		</tr>
	";
	$consulrespuesta=mysql_query("SELECT rp.rep_cod,res_nombre,rep_valor FROM respuesta_pregunta rp INNER JOIN respuesta r ON rp.res_cod = r.res_cod
INNER JOIN cuestionario_pregunta c ON rp.cup_cod = c.cup_cod WHERE rp.rep_estado='A' AND c.cup_cod=".$codpregunta);
	while($corespuesta=mysql_fetch_array($consulrespuesta)){
		echo"
		<tr>
			<td>$corespuesta[res_nombre]</td>
			<td>$corespuesta[rep_valor]</td>
			<td><button type='button' onclick='feliminarrespuesta(".$corespuesta['rep_cod'].")' class='btn btn-danger'><i class='fa fa-trash'></i></button></td>
		</tr>

		";
	}
	echo"</table>";
}
if($_REQUEST['accion']==20){
	$cborespuesta=$_REQUEST['cborespuesta'];
	$cbopregunta=$_REQUEST['cbopregunta'];
	$txtvalor=$_REQUEST['txtvalor'];
	$consul=mysql_query("INSERT INTO respuesta_pregunta (cup_cod, res_cod, rep_valor)values(".$cbopregunta.",".$cborespuesta.",".$txtvalor.")");
	if($consul==true){
		
	}
	else{
		echo"<script>alert('Error')</script>";
	}

	consultarrepuesta($cbopregunta);

}
if($_REQUEST['accion']==21){
	$cbopregunta=$_REQUEST['cbopregunta'];
	consultarrepuesta($cbopregunta);
}
if($_REQUEST['accion']==22){
	mysql_query("UPDATE respuesta_pregunta SET rep_estado='I' WHERE rep_cod=".$_REQUEST['ideliminar']);
	$cbopregunta=$_REQUEST['cbopregunta'];
	consultarrepuesta($cbopregunta);
}
	echo"<script>$('#divmsn').html('');</script>";
?>
