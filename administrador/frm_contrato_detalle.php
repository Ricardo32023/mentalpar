<?php
session_start();

include"../lib/conexion.php";
$txtcontrato=$_REQUEST['txtcontrato'];

if($_REQUEST['accion']==1){
	$cboempresa=$_REQUEST['cboempresa'];
	$txtfechainicio=$_REQUEST['txtfechainicio'];
	$txtfechafin=$_REQUEST['txtfechafin'];
	$txtvalorcontrato=$_REQUEST['txtvalorcontrato'];
	$txtencuesta=$_REQUEST['txtencuesta'];
	$txtpersona=$_REQUEST['txtpersona'];

	if($_SESSION['scoe_cod']==""){
		
		$consulcargo=mysql_query("SELECT coe_cod,emp_cod,coe_numerocontrato,coe_fechainicio,coe_fechafin,coe_valorcontrato,coe_cntencuesta,coe_cntpersona,coe_estado FROM contrato_empresa WHERE 
		coe_numerocontrato ='".$txtcontrato."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Nit ya Existe')</script>";
			echo"<script>document.getElementById('txtcontrato').value='".$cocargo['coe_numerocontrato']."'</script>";
			echo"<script>document.getElementById('cboempresa').value='".$cocargo['emp_cod']."'</script>";
			echo"<script>document.getElementById('txtfechainicio').value='".$cocargo['coe_fechainicio']."'</script>";
			echo"<script>document.getElementById('txtfechafin').value='".$cocargo['coe_fechafin']."'</script>";
			echo"<script>document.getElementById('txtencuesta').value='".$cocargo['coe_cntencuesta']."'</script>";
			echo"<script>document.getElementById('txtpersona').value='".$cocargo['coe_cntpersona']."'</script>";
			echo"<script>document.getElementById('txtvalorcontrato').value='".$cocargo['coe_valorcontrato']."'</script>";
		}
		else{
			$guarda=mysql_query("insert into contrato_empresa (emp_cod,coe_numerocontrato,coe_fechainicio,coe_fechafin,coe_valorcontrato,coe_cntencuesta,coe_cntpersona,coe_estado)values(".$cboempresa.",'".$txtcontrato."','".$txtfechainicio."','".$txtfechafin."','".$txtvalorcontrato."','".$txtencuesta."','".$txtpersona."','A')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_contrato()</script>";
			}
			else{
				echo"<script>alert('Error.')</script>";	
			}

		}	
	}
	else{
		$guarda=mysql_query("update contrato_empresa set emp_cod=".$cboempresa.", coe_numerocontrato='".$txtcontrato."',coe_fechainicio='".$txtfechainicio."',coe_fechafin='".$txtfechafin."',
		coe_valorcontrato='".$txtvalorcontrato."',coe_cntencuesta='".$txtencuesta."',coe_cntpersona='".$txtpersona."' where coe_cod=".$_SESSION['scoe_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_contrato()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";	
		}
	
	}
	echo"<script>$('#divmsn_contrato').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update contrato_empresa set coe_estado='I' where coe_cod=".$_REQUEST['txtid']);
	if($guarda==true){
		echo"<script>fmostrartabla();</script>";

		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn_contrato').html('');</script>";
}
if($_REQUEST['accion']==4){
	$guarda=mysql_query("update contrato_empresa set coe_estado='A' where coe_cod=".$_REQUEST['txtid']);
	if($guarda==true){
		echo"<script>fmostrartabla();</script>";

		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn_contrato').html('');</script>";
}
if($_REQUEST['accion']==5){
	$consul=mysql_query("select coe_cod,emp_cod,coe_numerocontrato,coe_fechainicio,coe_fechafin,coe_valorcontrato,coe_cntencuesta,coe_cntpersona,coe_estado from contrato_empresa  where coe_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		
		echo"<script>document.getElementById('txtcontrato').value='".$co['coe_numerocontrato']."'</script>";
		echo"<script>document.getElementById('cboempresa').value='".$co['emp_cod']."'</script>";
		echo"<script>document.getElementById('txtfechainicio').value='".$co['coe_fechainicio']."'</script>";
		echo"<script>document.getElementById('txtfechafin').value='".$co['coe_fechafin']."'</script>";
		echo"<script>document.getElementById('txtencuesta').value='".$co['coe_cntencuesta']."'</script>";
		echo"<script>document.getElementById('txtpersona').value='".$co['coe_cntpersona']."'</script>";
		echo"<script>document.getElementById('txtvalorcontrato').value='".$co['coe_valorcontrato']."'</script>";
			
	
		$_SESSION['scoe_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn_contrato').html('');</script>";
}
if($_REQUEST['accion']==6){
	$consulcargo=mysql_query("SELECT emp_cod,emp_nit,emp_digito,emp_razon_social,emp_telefono,emp_celular,emp_email,emp_contacto,emp_telefonocontacto FROM empresa WHERE emp_nit ='".$txtnit."'");
	if($cocargo=mysql_fetch_array($consulcargo)){
		echo"<script>alert('Este Contrato ya Existe')</script>";
		echo"<script>document.getElementById('txtcontrato').value='".$cocargo['coe_numerocontrato']."'</script>";
		echo"<script>document.getElementById('cboempresa').value='".$cocargo['emp_cod']."'</script>";
		echo"<script>document.getElementById('txtfechainicio').value='".$cocargo['coe_fechainicio']."'</script>";
		echo"<script>document.getElementById('txtfechafin').value='".$cocargo['coe_fechafin']."'</script>";
		echo"<script>document.getElementById('txtencuesta').value='".$cocargo['coe_cntencuesta']."'</script>";
		echo"<script>document.getElementById('txtpersona').value='".$cocargo['coe_cntpersona']."'</script>";
		echo"<script>document.getElementById('txtvalorcontrato').value='".$cocargo['coe_valorcontrato']."'</script>";
		$_SESSION['scoe_cod']=$cocargo[0];
		echo"<script>$('#div_titulobutton').html('Editar')</script>";
		
	}
	echo"<script>$('#divmsn_contrato').html('');</script>";	
}
?>