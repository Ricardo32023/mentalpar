<?php
session_start();

include"../lib/conexion.php";
$txtnit=$_REQUEST['txtnit'];
if($_REQUEST['accion']==1){
	$txtdv=$_REQUEST['txtdv'];
	$txtrazon=$_REQUEST['txtrazon'];
	$txttelefono=$_REQUEST['txttelefono'];
	$txtcelular=$_REQUEST['txtcelular'];
	$txtemail=$_REQUEST['txtemail'];
	$txtcontacto=$_REQUEST['txtcontacto'];
	$txttelefonocon=$_REQUEST['txttelefonocon'];
	if($_SESSION['scar_cod']==""){
		$consulcargo=mysql_query("SELECT emp_cod,emp_nit,emp_digito,emp_razon_social,emp_telefono,emp_celular,emp_email,emp_contacto,emp_telefonocontacto FROM empresa WHERE emp_nit ='".$txtnit."'");
		if($cocargo=mysql_fetch_array($consulcargo)){
			echo"<script>alert('Este Nit ya Existe')</script>";
			echo"<script>document.getElementById('txtnit').value='".$cocargo['emp_nit']."'</script>";
			echo"<script>document.getElementById('txtdv').value='".$cocargo['emp_digito']."'</script>";
			echo"<script>document.getElementById('txtrazon').value='".$cocargo['emp_razon_social']."'</script>";
			echo"<script>document.getElementById('txttelefono').value='".$cocargo['emp_telefono']."'</script>";
			echo"<script>document.getElementById('txtcelular').value='".$cocargo['emp_celular']."'</script>";
			echo"<script>document.getElementById('txtemail').value='".$cocargo['emp_email']."'</script>";
			echo"<script>document.getElementById('txtcontacto').value='".$cocargo['emp_contacto']."'</script>";
			echo"<script>document.getElementById('txttelefonocon').value='".$cocargo['emp_telefonocontacto']."'</script>";
		}
		else{
			$guarda=mysql_query("INSERT INTO empresa (emp_nit,emp_digito,emp_razon_social,emp_telefono,emp_celular,emp_email,emp_contacto,emp_telefonocontacto) VALUES('".$txtnit."','".$txtdv."','".$txtrazon."','".$txttelefono."','".$txtcelular."','".$txtemail."','".$txtcontacto."','".$txttelefonocon."')");
			if($guarda==true){
				echo"<script>alert('Agregado con Exito')</script>";
				echo"<script>llamar_empresa()</script>";
			}
			else{
				echo"<script>alert('Error')</script>";	
			}
		}	
	}
	else{
		$guarda=mysql_query("update empresa set emp_nit='".$txtnit."', emp_digito='".$txtdv."',emp_razon_social='".$txtrazon."',emp_telefono='".$txttelefono."',emp_celular='".$txtcelular."',
		emp_email='".$txtemail."',emp_contacto='".$txtcontacto."',emp_telefonocontacto='".$txttelefonocon."' where emp_cod=".$_SESSION['semp_cod']);
		if($guarda==true){
			echo"<script>alert('Modificado con Exito')</script>";
			echo"<script>llamar_empresa()</script>";
		}
		else{
			echo"<script>alert('Error')</script>";	
		}
	
	}
	echo"<script>$('#divmsn_empresa').html('');</script>";
}
if($_REQUEST['accion']==3){
	$guarda=mysql_query("update empresa set emp_estado='I' where emp_cod=".$_REQUEST['txtid']);
	if($guarda==true){
		echo"<script>fmostrartabla();</script>";

		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn_empresa').html('');</script>";
}
if($_REQUEST['accion']==4){
	$guarda=mysql_query("update empresa set emp_estado='A' where emp_cod=".$_REQUEST['txtid']);
	if($guarda==true){
		echo"<script>fmostrartabla();</script>";

		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn_empresa').html('');</script>";
}
if($_REQUEST['accion']==5){
	$consul=mysql_query("select emp_cod,emp_nit,emp_digito,emp_razon_social,emp_telefono,emp_celular,emp_email,emp_contacto,emp_telefonocontacto from empresa  where emp_cod=".$_REQUEST['txtid']);
	if($co=mysql_fetch_array($consul)){
		echo"<script>document.getElementById('txtnit').value='".$co['emp_nit']."'</script>";
		echo"<script>document.getElementById('txtdv').value='".$co['emp_digito']."'</script>";
		echo"<script>document.getElementById('txtrazon').value='".$co['emp_razon_social']."'</script>";
		echo"<script>document.getElementById('txttelefono').value='".$co['emp_telefono']."'</script>";
		echo"<script>document.getElementById('txtcelular').value='".$co['emp_celular']."'</script>";
		echo"<script>document.getElementById('txtemail').value='".$co['emp_email']."'</script>";
		echo"<script>document.getElementById('txtcontacto').value='".$co['emp_contacto']."'</script>";
		echo"<script>document.getElementById('txttelefonocon').value='".$co['emp_telefonocontacto']."'</script>";
		$_SESSION['semp_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";	
	}
	
	echo"<script>$('#divmsn_empresa').html('');</script>";
}
if($_REQUEST['accion']==6){
	$consulcargo=mysql_query("SELECT emp_cod,emp_nit,emp_digito,emp_razon_social,emp_telefono,emp_celular,emp_email,emp_contacto,emp_telefonocontacto FROM empresa WHERE emp_nit ='".$txtnit."'");
	if($cocargo=mysql_fetch_array($consulcargo)){
		echo"<script>alert('Este Nit ya Existe')</script>";
		echo"<script>document.getElementById('txtnit').value='".$cocargo['emp_nit']."'</script>";
		echo"<script>document.getElementById('txtdv').value='".$cocargo['emp_digito']."'</script>";
		echo"<script>document.getElementById('txtrazon').value='".$cocargo['emp_razon_social']."'</script>";
		echo"<script>document.getElementById('txttelefono').value='".$cocargo['emp_telefono']."'</script>";
		echo"<script>document.getElementById('txtcelular').value='".$cocargo['emp_celular']."'</script>";
		echo"<script>document.getElementById('txtemail').value='".$cocargo['emp_email']."'</script>";
		echo"<script>document.getElementById('txtcontacto').value='".$cocargo['emp_contacto']."'</script>";
		echo"<script>document.getElementById('txttelefonocon').value='".$cocargo['emp_telefonocontacto']."'</script>";
		$_SESSION['semp_cod']=$cocargo[0];
		echo"<script>$('#div_titulobutton').html('Editar')</script>";
		
	}
	echo"<script>$('#divmsn_empresa').html('');</script>";	
}
?>