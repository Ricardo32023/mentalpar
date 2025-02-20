<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
include"../lib/conexion.php";
$idCuestionario=$_REQUEST['id'];
$consulpreguntas=mysql_query("SELECT rce_cod,p.per_documento,p.per_primernombre,p.per_segundonombre,p.per_primerapellido,p.per_segundoapellido
FROM respuesta_cabeza_encuesta r, persona_contrato pc, persona p WHERE pc.pec_cod=".$idCuestionario." AND r.con_cod=pc.coe_cod AND pc.per_cod=p.per_cod
AND r.cue_cod=pc.cue_cod AND pc.per_cod=r.ter_cod");
if($copregunta=mysql_fetch_array($consulpreguntas)){
  $idRespuesta=$copregunta['rce_cod'];
  $nombretrabajador=$copregunta['per_primernombre']." ".$copregunta['per_segundonombre']." ".$copregunta['per_primerapellido']." ".$copregunta['per_segundoapellido'];
  $identificacion=$copregunta['per_documento'];
}

$fisiologico=0;
$social=0;
$intelectual=0;
$psicoemo=0;
$consulrespuesta=mysql_query("SELECT res_valor,rec_orden FROM respuesta_encuesta WHERE rce_id=".$idRespuesta." order by rec_orden");
while($corespuesta=mysql_fetch_array($consulrespuesta)){
  if($corespuesta['rec_orden']<=8){
    $fisiologico=$fisiologico+$corespuesta['res_valor'];
  }
  if($corespuesta['rec_orden']>=9 and $corespuesta['rec_orden']<=12){
    $social=$social+$corespuesta['res_valor'];
  }
  if($corespuesta['rec_orden']>=13 and $corespuesta['rec_orden']<=22){
    $intelectual=$intelectual+$corespuesta['res_valor'];
  }
  if($corespuesta['rec_orden']>=23 and $corespuesta['rec_orden']<=31){
    $psicoemo=$psicoemo+$corespuesta['res_valor'];
  }



}
  $pfisiologico=($fisiologico/8)*4;
  $psocial=($social/4)*3;
  $pintelectual=($intelectual/10)*2;
  $ppsicoemo=$psicoemo/9;
  $totalpregunta=number_format((($pfisiologico+$psocial+$pintelectual+$ppsicoemo)/61.16)*100,1);
  $respuesta="";
  $administrativo=1;

  /*
  la variable $administrativo=0 significa que es operario o auxiliar, cuando $administrativo=1 es para los administrativo o profesional

SI(AJ6<6,6;"MUY BAJO";SI(Y(AJ6>6,5;AJ6<11,9);"BAJO";SI(Y(AJ6>11,8;AJ6<17,1);"MEDIO";SI(Y(AJ6>17,1;AJ6<23,5);"ALTO";"MUY ALTO"
  /****/////

  if($administrativo==0){
    if($totalpregunta<7.9){
      $respuesta="MUY BAJO";
    }
    if($totalpregunta>7.8 and $totalpregunta<12.7){
      $respuesta="BAJO";
    }
    if($totalpregunta>12.6 and $totalpregunta<17.8){
      $respuesta="MEDIO";
    }
    if($totalpregunta>17.7 and $totalpregunta<25.1){
      $respuesta="ALTO";
    }
    if($totalpregunta>25){
      $respuesta="MUY ALTO";
    }
  }

  if($administrativo==1){
    if($totalpregunta<6.6){
      $respuesta="MUY BAJO";
    }
    if($totalpregunta>6.5 and $totalpregunta<11.9){
      $respuesta="BAJO";
    }
    if($totalpregunta>11.8 and $totalpregunta<17.1){
      $respuesta="MEDIO";
    }
    if($totalpregunta>17.1 and $totalpregunta<23.5){
      $respuesta="ALTO";
    }
    if($totalpregunta>23.4){
      $respuesta="MUY ALTO";
    }
  }
?>
<table width="700" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="696" bordercolor="#000000" bgcolor="#DDD9C4"><p align="center"><strong>INFORME DE RESULTADOS DEL CUESTIONARIO PARA LA EVALUACIÓN DEL ESTRÉS –    TERCERA VERSIÓN</strong></p></td>
  </tr>
</table>
<br/>
<table width="700" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="5" bordercolor="1" bgcolor="#DDD9C4"><p align="center"><strong>DATOS GENERALES DEL TRABAJADOR</strong></p></td>
  </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Nombre del trabajador:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"><strong> <?php echo $nombretrabajador;?></strong></div></td>
  </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Número de identificación    (ID):</strong></p></td>
    <td width="360" valign="top" bordercolor="1"><div align="center"><?php echo $identificacion;?></div></td>
  </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Cargo:</strong></p></td>
    <td width="360" valign="top" bordercolor="1"><div align="center"></div></td>
  </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Departamento o sección:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"></div></td>
  </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Edad:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"></div></td>
  </tr>

    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Sexo:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"></div></td>
    </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Fecha de aplicación del    cuestionario:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"></div></td>
  </tr>

  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Nombre de la empresa:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"></div></td>
  </tr>
</table>
<br/>
<table width="700" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td colspan="2" bgcolor="#DDD9C4"><p align="center"><strong>DATOS DEL EVALUADOR</strong></p></td>
  </tr>
  <tr>
    <td width="406" bgcolor="#CCCCCC"><p><strong>Nombre del evaluador:</strong></p></td>
    <td width="288" colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><p><strong>Número de identificación    (C.C.):</strong></p></td>
    <td colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><p><strong>Profesión:</strong></p></td>
    <td colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><p><strong>Posgrado:</strong></p></td>
    <td colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><p><strong>No. Tarjeta profesional*:</strong></p></td>
    <td colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><p><strong>No. Licencia en salud    ocupacional*:</strong></p></td>
    <td colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><p><strong>Fecha de expedición de la    licencia en salud ocupacional*:</strong></p></td>
    <td colspan="-2" valign="top"><div align="center"></div></td>
  </tr>
</table>
<p>* Todo informe que carezca de  estos datos <em>no será válido</em>.</p>

<table width="0" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="1">
  <tr>
    <td width="696" bgcolor="#DDD9C4"><p align="center"><strong>RESULTADOS DEL    CUESTIONARIO</strong></p></td>
  </tr>
</table>
<br/><br/><br/>
<table border="1" cellspacing="0" cellpadding="0" width="0">
  <tr>
    <td width="95" valign="top" bordercolor="#000000"><p align="center"><strong>&nbsp;</strong></p></td>
    <td width="276" bordercolor="#000000"><p align="center" bgcolor="#DDD9C4"><strong>Puntaje </strong>(transformado)<strong> </strong></p></td>
    <td width="321" bordercolor="#000000" bgcolor="#DDD9C4"><p align="center"><strong>Nivel de estrés</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="95" bordercolor="#000000"><p align="center"><strong>TOTAL GENERAL SÍNTOMAS DE ESTRÉS</strong></p></td>
    <td width="276" bordercolor="#000000"><p align="center"><strong><?php echo $totalpregunta;?></strong><strong> </strong></p></td>
    <td width="321" bordercolor="#000000"><p align="center"><strong><?php echo $respuesta;?></strong><strong> </strong></p></td>
  </tr>
</table>
<br/>
<table width="700" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td bgcolor="#DDD9C4"><p align="center"><strong>INTERPRETACIÓN GENÉRICA DE LOS NIVELES DE ESTRÉS ― TERCERA VERSIÓN</strong></p></td>
  </tr>

  <tr>
    <td valign="top"><p align="justify"><strong>&nbsp;</strong></p>
      
      
        <div align="justify">
            <ul>
              <li>
                <em>Muy bajo</em>: ausencia de síntomas de estrés u ocurrencia muy rara que no amerita    desarrollar actividades de intervención específicas, salvo acciones o    programas de promoción en salud.</li>
            </ul>
            <ul>
              <li>
                <em>Bajo</em>: es indicativo de baja frecuencia de síntomas de estrés y por tanto    escasa afectación del estado general de salud. Es pertinente desarrollar    acciones o programas de intervención, a fin de mantener la baja frecuencia de    síntomas.</li>
            </ul>
            <ul>
              <li>
                <em>Medio</em>: la presentación de síntomas es indicativa de una respuesta de estrés    moderada. Los síntomas más frecuentes y críticos ameritan observación y    acciones sistemáticas de intervención para prevenir efectos perjudiciales en    la salud. Además, se sugiere identificar los factores de riesgo psicosocial    intra y extralaboral que pudieran tener alguna relación con los efectos    identificados. </li>
            </ul>
            <ul>
              <li>
                <em>Alto</em>: la cantidad de síntomas y su frecuencia de presentación es    indicativa de una respuesta de estrés alto. Los síntomas más críticos y    frecuentes requieren intervención en el marco de un sistema de vigilancia    epidemiológica. Además, es muy importante identificar los factores de riesgo    psicosocial intra y extralaboral que pudieran tener alguna relación con los    efectos identificados. </li>
            </ul>
            <ul>
              <li>
                <em>Muy alto</em>: la cantidad de síntomas y su frecuencia de presentación es    indicativa de una respuesta de estrés severa y perjudicial para la salud. Los    síntomas más críticos y frecuentes requieren intervención inmediata en el    marco de un sistema de vigilancia epidemiológica. Así mismo, es imperativo    identificar los factores de riesgo psicosocial intra y extralaboral que    pudieran tener alguna relación con los efectos identificados. </li>
            </ul>
      </div>      <p align="justify">&nbsp;</p></td>
  </tr>
  <tr>
    <td valign="top"><p align="center"><strong>&nbsp;</strong></p>      </td>
  </tr>
  <tr>
    <td bgcolor="#DDD9C4"><p align="center"><strong>OBSERVACIONES Y COMENTARIOS DEL EVALUADOR</strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p align="center">&nbsp;</p>      </td>
  </tr>
  <tr>
    <td valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>    </td>
  </tr>
</table>
<br/>
<table border="1" cellspacing="0" cellpadding="0" width="0">
  <tr>
    <td width="700" bordercolor="#000000" bgcolor="#DDD9C4"><p align="center"><strong>RECOMENDACIONES PARTICULARES</strong></p></td>
  </tr>
  <tr>
    <td valign="top" bordercolor="#000000"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
    <p align="center"><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="700" valign="top" bordercolor="#000000"><p align="center"><strong>&nbsp;</strong></p> </td>
  </tr>
</table>
<p><strong>&nbsp;</strong></p>
<table border="1" cellspacing="0" cellpadding="0" width="700">
  <tr>
    <td width="258" height="42" bordercolor="#000000" bgcolor="#CCCCCC"><p><strong>Fecha de elaboración del    informe</strong><strong> </strong></p></td>
    <td width="135" bordercolor="#000000"><p><strong>&nbsp;</strong><strong>&nbsp;</strong></p>      </td>
    <td width="129" bordercolor="#000000"><p><strong>&nbsp;</strong></p></td>
    <td width="168" bordercolor="#000000"><p>&nbsp;</p></td>
  </tr>
  
  <tr>
    <td width="258" height="40" bordercolor="#000000" bgcolor="#CCCCCC"><p><strong>Firma del evaluador:</strong><strong> </strong></p></td>
    <td colspan="3" bordercolor="#000000"><p><strong>&nbsp;</strong></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<script>window.print()</script>
</body>
</html>
