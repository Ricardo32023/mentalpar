<?php
@session_start();

include"../lib/conexion.php";
$txtdocumento=$_REQUEST['txtdocumento'];
$txtcontrato=$_REQUEST['txtcontrato'];
function consultarcontrato(){
	echo"<script>$('#divmsn_contratocargo').html('');</script>";
	echo"
	<table border=1 style='width=95%' class='table table-bordered table-striped'>
		<tr>
			<td>Cedula</td>
			<td>Tercero</td>
			<td>Formato</td>
		</tr>";

	$consulformato=mysql_query("SELECT pc.pec_cod,pc.per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido,cue_nombre FROM persona_contrato pc, persona p, cuestionario c, contrato_empresa ce
WHERE pc.per_cod=p.per_cod AND pc.cue_cod=c.cue_cod AND pc.coe_cod=ce.coe_cod AND pc.coe_cod=".$_SESSION['scontratoc']);
	while($coformato=mysql_fetch_array($consulformato)){
		$persona=$coformato['per_primernombre']." ".$coformato['per_segundonombre']." ".$coformato['per_primerapellido']." ".$coformato['per_segundoapellido'];
		echo"
		<tr>
			<td>$coformato[per_documento]</td>
			<td>$persona</td>
			<td>$coformato[cue_nombre]</td>
		</tr>
		";
	}
	echo"
	</table>
	";
}
if($_REQUEST['accion']==1){
	$txtcontrato=$_REQUEST['txtcontrato'];
	$cbocuestionario=$_REQUEST['cbocuestionario'];
	$_SESSION['scontratoc']=$txtcontrato;
	if($_SESSION['scar_cod']==""){
		$consulcargo=mysql_query("SELECT per_cod FROM persona_contrato WHERE per_cod=".$_SESSION['ster_cod']." AND coe_cod=".$txtcontrato." and cue_cod=".$cbocuestionario." AND pec_estado='A'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Esta Cuestionario ya Existe para esta Persona')</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO persona_contrato(per_cod,coe_cod,cue_cod)VALUES(".$_SESSION['ster_cod'].",".$txtcontrato.",".$cbocuestionario.")");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				
			}
			else{
				echo"<script>alert('Error')</script>";
			}
		}
	}
	else{
		$guarda=mysql_query("update persona set per_documento=".$txtdocumento.", per_primernombre='".$txtprimernombre."' ,per_segundonombre=".$txtsegundonombre." ,per_primerapellido=".$txtprimerapellido.",per_segundoapellido=".$txtsegundoapellido.", per_fechanacimiento='".$txtfechanacimiento."', per_direccion='".$txtdireccion."',per_telefono='".$txtvalor."',per_email='".$txtvalor."' where cuc_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_persona()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";
		}

	}
	echo"<script>$('#divmsn_contratocargo').html('');</script>";
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

	$consul=mysql_query("SELECT per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido from persona where per_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		$persona=$co[2]." ".$co[3]." ".$co[4]." ".$co[5];
		echo"<script>document.getElementById('txtidentificacion').value='".$co['per_documento']."'</script>";
		echo"<script>document.getElementById('txttercero').value='".$persona."'</script>";

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
if($_REQUEST['accion']==6){
	$consulcargo=mysql_query("SELECT coe_cod,e.emp_cod,e.emp_razon_social FROM contrato_empresa c INNER JOIN empresa e ON e.emp_cod=c.emp_cod WHERE coe_cod=".$txtcontrato);
	if($cocargo=mysql_fetch_array($consulcargo)){
		$_SESSION['scontratoc']=$txtcontrato;
		echo"<script>document.getElementById('txtempresa').value='".$cocargo['emp_razon_social']."'</script>";
		//$_SESSION['scoc_cod']=$cocargo[0];
		//echo"<script>$('#div_titulobutton').html('Editar')

	}

	echo"<script>$('#divmsn_contratocargo').html('');</script>";
}
if($_REQUEST['accion']==9){
	$consul=mysql_query("SELECT per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido FROM persona WHERE per_documento= '".$_REQUEST['txtidentificacion']."' AND per_estado='A'");
	if($co=mysql_fetch_array($consul)){
		$nombre=$co['per_primernombre']." ".$co['per_segundonombre']." ".$co['per_primerapellido']." ".$co['per_segundoapellido'];
		echo"<script>document.getElementById('txttercero').value='".$nombre."'</script>";
		$_SESSION['ster_cod']=$co['per_cod'];
	}
	echo"<script>$('#divmsn_contratocargo').html('');</script>";
}
consultarcontrato();
?>
