<?php
@session_start();

include"../lib/conexion.php";
$txtdocumento=$_REQUEST['txtdocumento'];
if($_REQUEST['accion']==1){
	$txtprimernombre=$_REQUEST['txtprimernombre'];
	$txtsegundonombre=$_REQUEST['txtsegundonombre'];
	$txtprimerapellido=$_REQUEST['txtprimerapellido'];
	$txtsegundoapellido=$_REQUEST['txtsegundoapellido'];
	$txtfechanacimiento=$_REQUEST['txtfechanacimiento'];
	$txtdireccion=$_REQUEST['txtdireccion'];
	$txttelefono=$_REQUEST['txttelefono'];
	$txtemail=$_REQUEST['txtemail'];
	$cbomunicipio=$_REQUEST['cbomunicipio'];
        $cbocontrato_cargo = $_REQUEST['cbocontrato_cargo'];
        
	if($_SESSION['scar_cod']==""){
		$consulcargo=mysql_query("select per_documento,per_cod from persona where per_documento ='".$txtdocumento."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Esta Persona ya Existe')</script>";
			$modificar=mysql_query("update persona set per_primernombre='".$txtprimernombre."',per_segundonombre='".$txtsegundonombre."',per_primerapellido='".$txtprimerapellido."',
			per_segundoapellido='".$txtsegundoapellido."',per_fechanacimiento='".$txtfechanacimiento."',per_direccion='".$txtdireccion."',per_telefono='".$txttelefono."',per_email='".$txtemail."'
                            ,ciu_cod='".$cbomunicipio."',car_codigo=".$cbocontrato_cargo." where per_cod=".$cocargo['per_cod']);
		}
		else{
			$guarda=mysql_query("INSERT INTO persona (per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido,per_fechanacimiento,per_direccion,per_telefono,per_email,ciu_cod,car_codigo)
			VALUES('".$txtdocumento."','".$txtprimernombre."','".$txtsegundonombre."','".$txtprimerapellido."','".$txtsegundoapellido."','".$txtfechanacimiento."','".$txtdireccion."','".$txttelefono."','".$txtemail."',".$cbomunicipio.",".$cbocontrato_cargo.")");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_persona()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";
			}
		}
	}else{
		$guarda=mysql_query("update persona set per_documento=".$txtdocumento.", per_primernombre='".$txtprimernombre."' ,per_segundonombre=".$txtsegundonombre." 
                    ,per_primerapellido=".$txtprimerapellido.",per_segundoapellido=".$txtsegundoapellido.", per_fechanacimiento='".$txtfechanacimiento."', per_direccion='".$txtdireccion."'
                    ,per_telefono='".$txtvalor."',per_email='".$txtvalor."',car_codigo=".$cbocontrato_cargo." 
                    where cuc_cod=".$_SESSION['scar_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_persona()</script>";
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
	$consul=mysql_query("SELECT per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido where per_cod=".$_REQUEST['txtid']);
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
if($_REQUEST['accion']==9){

	$consul=mysql_query("SELECT dep_cod,dep_nombre FROM departamento WHERE pas_cod=".$_REQUEST['cbopais']." AND dep_estado='A' ORDER BY dep_nombre");
	echo'<option value="0">Seleccione..</option>';
	while($co=mysql_fetch_array($consul)){
		echo"<option value=".$co['dep_cod'].">".$co['dep_nombre']."</option>";
		//echo"<script>llamar_cargo()
	}
	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==10){
	$consul=mysql_query("SELECT ciu_cod,ciu_nombre FROM ciudad WHERE dep_cod=".$_REQUEST['cbodepartamento']." AND ciu_estado='A' ORDER BY ciu_nombre");
	echo'<option value="0">Seleccione..</option>';
	while($co=mysql_fetch_array($consul)){
		echo"<option value=".$co['ciu_cod'].">".$co['ciu_nombre']."</option>";
	}


	echo"<script>$('#divmsn').html('');</script>";
}
if($_REQUEST['accion']==11){
	$consul=mysql_query("SELECT per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido,
		per_direccion,per_telefono,per_email,per_fechanacimiento,ciu_cod,car_codigo from persona where per_documento='".$_REQUEST['txtdocumento']."'");
	if($co=mysql_fetch_array($consul)){
		$consulciudad=mysql_query("SELECT p.pas_cod,d.dep_cod,c.ciu_cod FROM pais p, departamento d, ciudad c WHERE p.pas_cod=d.pas_cod AND d.dep_cod=c.dep_cod AND c.ciu_cod=".$co['ciu_cod']);
		if($cociudad=mysql_fetch_array($consulciudad)){

			echo"<script>document.getElementById('cbopais').value='".$cociudad['pas_cod']."'</script>";


		}

		echo"<script>document.getElementById('txtprimernombre').value='".$co['per_primernombre']."'</script>";
		echo"<script>document.getElementById('txtsegundonombre').value='".$co['per_segundonombre']."'</script>";
		echo"<script>document.getElementById('txtprimerapellido').value='".$co['per_primerapellido']."'</script>";
		echo"<script>document.getElementById('txtsegundoapellido').value='".$co['per_segundoapellido']."'</script>";

		echo"<script>document.getElementById('txtfechanacimiento').value='".$co['per_fechanacimiento']."'</script>";
		echo"<script>document.getElementById('txtdireccion').value='".$co['per_direccion']."'</script>";
		echo"<script>document.getElementById('txttelefono').value='".$co['per_telefono']."'</script>";
		echo"<script>document.getElementById('txtemail').value='".$co['per_email']."'</script>";
                echo"<script>document.getElementById('cbocontrato_cargo').value='".$co['car_codigo']."'</script>";


			echo"<script>document.getElementById('cbopais').value='".$cociudad['pas_cod']."'</script>";



			echo"<script>document.getElementById('cbodepartamento').value='".$cociudad['dep_cod']."'</script>";

			echo"<script>document.getElementById('cbomunicipio').value='".$cociudad['ciu_cod']."'</script>";

	}
	else{
	}

	echo"<script>$('#divmsn').html('');</script>";
}
?>
