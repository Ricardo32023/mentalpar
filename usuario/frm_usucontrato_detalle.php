<?php
session_start();

include"../lib/conexion.php";
function consultarpersona($idcontrato){
	//echo $idcontrato;
	echo"<script>$('#divmsn_contratocargo').html('');</script>";
	echo"
	<table border=1 style='width=95%' class='table table-bordered table-striped'>
		<tr>
			<td>Cedula</td>
			<td>Tercero</td>
			<td>Formato</td>
			<td>Respuestas</td>
			<td>Informe</td>
		</tr>";

	$consulformato=mysql_query("SELECT pc.pec_cod,pc.per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido,c.cue_cod,cue_nombre
	 FROM persona_contrato pc, persona p, cuestionario c, contrato_empresa ce WHERE pc.per_cod=p.per_cod AND pc.cue_cod=c.cue_cod AND pc.coe_cod=ce.coe_cod AND pc.coe_cod=".$idcontrato);
	while($coformato=mysql_fetch_array($consulformato)){
		$persona=$coformato['per_primernombre']." ".$coformato['per_segundonombre']." ".$coformato['per_primerapellido']." ".$coformato['per_segundoapellido'];
		echo"
		<tr>
			<td>$coformato[per_documento]</td>
			<td>$persona</td>
			<td>$coformato[cue_nombre]</td>
			<td><a href='usuario/consultaCuestionario.php?id=".$coformato['pec_cod']."'  target='_blank'><img src='usuario/imagenes/cuestionario.png' width='40' heigth='40' ></a></td>
			";
                
                        //Informe Estres Personal
			if($coformato['cue_cod']==2){
                            echo "<td><a href='usuario/frm_informe_personal_estres.php?idpersona=".$coformato['per_documento']."&idcontrato=".$idcontrato."'  
                                target='_blank'  title='Estres'><img src='usuario/imagenes/informe.png' width='40' heigth='40'></a></td>";                                                                
			}
                        
                        //Informe Extralaboral Personal
                        if($coformato['cue_cod']==3){
                            echo "<td><a href='usuario/frm_informe_personal_extralaboral.php?idpersona=".$coformato['per_documento']."&idcontrato=".$idcontrato."'  
                                target='_blank'  title='Extralaboral'><img src='usuario/imagenes/informe.png' width='40' heigth='40'></a></td>";                                                                
			}
                        
                        //Informe Intralaboral A (Personal)
                        if($coformato['cue_cod']==4){
                            echo "<td><a href='usuario/frm_informe_personal_intralaboralA.php?idpersona=".$coformato['per_documento']."&idcontrato=".$idcontrato."'  
                                target='_blank' title='Intralaboral A'><img src='usuario/imagenes/informe_IA.png' width='40' heigth='40'></a></td>";                                                                
			}
                        
                        //Informe Intralaboral B (Personal)
                        if($coformato['cue_cod']==6){
                            echo "<td><a href='usuario/frm_informe_personal_intralaboralB.php?idpersona=".$coformato['per_documento']."&idcontrato=".$idcontrato."'  
                                target='_blank' title='Intralaboral A'><img src='usuario/imagenes/informe_IB.png' width='40' heigth='40'></a></td>";                                                                
			}
                        
			if($coformato['cue_cod']==7){
                            echo "<td><a href='usuario/informeCuestionarioAcrofobia.php?id=".$coformato['pec_cod']."'  
                                target='_blank'><img src='usuario/imagenes/informe.png' width='40' heigth='40'></a></td>";			
			}
                        
                        
                        
		echo"
		</tr>
		";
	}
	echo"
	</table>
	";
}
if($_REQUEST['accion']==1){
	$cboempresa=$_REQUEST['cboempresa'];
	//echo "SELECT coe_cod, coe_numerocontrato FROM contrato_empresa WHERE emp_cod=".$cboempresa." AND coe_estado='A'";
	$consulcontrato=mysql_query("SELECT coe_cod, coe_numerocontrato FROM contrato_empresa WHERE emp_cod=".$cboempresa." AND coe_estado='A'");
	echo"<option value='0'>Seleccione</option>";
	while($cocontrato=mysql_fetch_array($consulcontrato)){
			echo"<option value='".$cocontrato['coe_cod']."'>".$cocontrato['coe_numerocontrato']."</option>";

	}



	echo"<script>$('#divmsn_contratocargo').html('');</script>";
}
if($_REQUEST['accion']==2){
	$idcontrato=$_REQUEST['cbocontrato'];
	consultarpersona($idcontrato);
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
	$consul=mysql_query("select coe_cod,emp_cod,coe_numerocontrato,coe_fechainicio,coe_fechafin,coe_valorcontrato,coe_cntencuesta,coe_cntpersona,coe_estado from contrato_empresa  where coe_cod=".$_REQUEST['txtcontrato']);
	if($co=mysql_fetch_array($consul)){

		echo"<script>document.getElementById('txtcontrato').value='".$co['coe_numerocontrato']."'</script>";
		echo"<script>document.getElementById('cboempresa').value='".$co['emp_cod']."'</script>";
		echo"<script>document.getElementById('txtfechainicio').value='".$co['coe_fechainicio']."'</script>";
		echo"<script>document.getElementById('txtfechafin').value='".$co['coe_fechafin']."'</script>";
		echo"<script>document.getElementById('txtencuesta').value='".$co['coe_cntencuesta']."'</script>";
		echo"<script>document.getElementById('txtpersona').value='".$co['coe_cntpersona']."'</script>";
		echo"<script>document.getElementById('txtvalorcontrato').value='".$co['coe_valorcontrato']."'</script>";


		//$_SESSION['scoe_cod']=$_REQUEST['txtid'];
		//echo"<script>llamar_cargo()
	}
	else{
		echo"<script>alert('Error')</script>";
	}

	echo"<script>$('#divmsn_contrato').html('');</script>";
}
if($_REQUEST['accion']==6){
	$consulcargo=mysql_query("SELECT coe_cod,e.emp_cod,e.emp_razon_social FROM contrato_empresa c INNER JOIN empresa e ON e.emp_cod=c.emp_cod WHERE coe_cod=".$txtcontrato);
	if($cocargo=mysql_fetch_array($consulcargo)){
		$_SESSION['scontratoc']=$txtcontrato;
		echo"<script>document.getElementById('txtempresa').value='".$cocargo['emp_razon_social']."'</script>";
		//$_SESSION['scoc_cod']=$cocargo[0];
		//echo"<script>$('#div_titulobutton').html('Editar')

	}
	consultarcontrato();
	echo"<script>$('#divmsn_contratocargo').html('');</script>";
}
?>
