<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?
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

  $m50=0;
  $m30_50=0;
  $m15_30=0;
  $m5_15=0;
  $m1_5=0;

  $m50_2=0;
  $m30_50_2=0;
  $m15_30_2=0;
  $m5_15_2=0;
  $m1_5_2=0;

  $consulrespuesta=mysql_query("SELECT r.res_valor,r.rec_orden FROM respuesta_encuesta r, cuestionario_pregunta p, cuestionario_bloque cb WHERE rce_id=".$idRespuesta."
  and r.pre_cod=p.cup_cod and  p.cub_cod=cb.cub_cod  AND cub_orden=1 order by rec_orden");
  while($corespuesta=mysql_fetch_array($consulrespuesta)){
    if($corespuesta['rec_orden']==17 or $corespuesta['rec_orden']==18){
      $m50=$m50+$corespuesta['res_valor'];
    }
    if($corespuesta['rec_orden']==8 or $corespuesta['rec_orden']==12){
      $m30_50=$m30_50+$corespuesta['res_valor'];
    }
    if($corespuesta['rec_orden']==6 or $corespuesta['rec_orden']==7 or $corespuesta['rec_orden']==9 or $corespuesta['rec_orden']==10
    or $corespuesta['rec_orden']==11 or $corespuesta['rec_orden']==13){
      $m15_30=$m15_30+$corespuesta['res_valor'];
    }

    if($corespuesta['rec_orden']==3 or $corespuesta['rec_orden']==4 or $corespuesta['rec_orden']==5 or $corespuesta['rec_orden']==14
    or $corespuesta['rec_orden']==16 or $corespuesta['rec_orden']==20){
      $m5_15=$m5_15+$corespuesta['res_valor'];
    }

    if($corespuesta['rec_orden']==1 or $corespuesta['rec_orden']==2 or $corespuesta['rec_orden']==15 or $corespuesta['rec_orden']==19){
      $m1_5=$m1_5+$corespuesta['res_valor'];
    }


  }


  $consulrespuesta=mysql_query("SELECT r.res_valor,r.rec_orden FROM respuesta_encuesta r, cuestionario_pregunta p, cuestionario_bloque cb WHERE rce_id=".$idRespuesta."
  and r.pre_cod=p.cup_cod and  p.cub_cod=cb.cub_cod  AND cub_orden=2 order by rec_orden");
  while($corespuesta=mysql_fetch_array($consulrespuesta)){
    if($corespuesta['rec_orden']==17 or $corespuesta['rec_orden']==18){
      $m50_2=$m50_2+$corespuesta['res_valor'];
    }
    if($corespuesta['rec_orden']==8 or $corespuesta['rec_orden']==12){
      $m30_50_2=$m30_50_2+$corespuesta['res_valor'];
    }
    if($corespuesta['rec_orden']==6 or $corespuesta['rec_orden']==7 or $corespuesta['rec_orden']==9 or $corespuesta['rec_orden']==10
    or $corespuesta['rec_orden']==11 or $corespuesta['rec_orden']==13){
      $m15_30_2=$m15_30_2+$corespuesta['res_valor'];
    }

    if($corespuesta['rec_orden']==3 or $corespuesta['rec_orden']==4 or $corespuesta['rec_orden']==5 or $corespuesta['rec_orden']==14
    or $corespuesta['rec_orden']==16 or $corespuesta['rec_orden']==20){
      $m5_15_2=$m5_15_2+$corespuesta['res_valor'];
    }

    if($corespuesta['rec_orden']==1 or $corespuesta['rec_orden']==2 or $corespuesta['rec_orden']==15 or $corespuesta['rec_orden']==19){
      $m1_5_2=$m1_5_2+$corespuesta['res_valor'];
    }

  }
//  echo"---------------->".$m50;
    $m50=number_format($m50/2,1);
    $rm50="";
    if($m50<=0.5){ $rm50="Nada de Ansiedad"; }
    if($m50>0.5 and $m50<=1.5){ $rm50="Casi Nada de Ansiedad"; }
    if($m50>1.5 and $m50<=2.5){ $rm50="Ligeramente Ansioso";   }
    if($m50>2.5 and $m50<=3.5){ $rm50="Medianamente Ansioso";  }
    if($m50>3.5 and $m50<=4.5){ $rm50="Moderamente Ansioso";   }
    if($m50>4.5 and $m50<=5.5){ $rm50="Moderamente Alto Ansioso"; }
    if($m50>5.5){ $rm50="extremadamente Ansioso";  }

    $m30_50=number_format($m30_50/2,1);
    $rm30_50="";
    if($m30_50<=0.5){ $rm30_50="Nada de Ansiedad";  }
    if($m30_50>0.5 and $m30_50<=1.5){ $rm30_50="Casi Nada de Ansiedad";  }
    if($m30_50>1.5 and $m30_50<=2.5){ $rm30_50="Ligeramente Ansioso";    }
    if($m30_50>2.5 and $m30_50<=3.5){ $rm30_50="Medianamente Ansioso";   }
    if($m30_50>3.5 and $m30_50<=4.5){ $rm30_50="Moderamente Ansioso";    }
    if($m30_50>4.5 and $m30_50<=5.5){ $rm30_50="Moderamente Alto Ansioso"; }
    if($m30_50>5.5){ $rm30_50="extremadamente Ansioso";  }

    $m15_30=number_format($m15_30/6,1);
    $rm15_30="";
    if($m15_30<=0.5){ $rm15_30="Nada de Ansiedad";    }
    if($m15_30>0.5 and $m15_30<=1.5){ $rm15_30="Casi Nada de Ansiedad";    }
    if($m15_30>1.5 and $m15_30<=2.5){ $rm15_30="Ligeramente Ansioso";    }
    if($m15_30>2.5 and $m15_30<=3.5){ $rm15_30="Medianamente Ansioso";   }
    if($m15_30>3.5 and $m15_30<=4.5){ $rm15_30="Moderamente Ansioso";    }
    if($m15_30>4.5 and $m15_30<=5.5){ $rm15_30="Moderamente Alto Ansioso";  }
    if($m15_30>5.5){ $rm15_30="extremadamente Ansioso"; }

    $m5_15=number_format($m5_15/6,1);
    $rm5_15="";
    if($m5_15<=0.5){ $rm5_15="Nada de Ansiedad";    }
    if($m5_15>0.5 and $m5_15<=1.5){ $rm5_15="Casi Nada de Ansiedad";    }
    if($m5_15>1.5 and $m5_15<=2.5){ $rm5_15="Ligeramente Ansioso";    }
    if($m5_15>2.5 and $m5_15<=3.5){ $rm5_15="Medianamente Ansioso";   }
    if($m5_15>3.5 and $m5_15<=4.5){ $rm5_15="Moderamente Ansioso";    }
    if($m5_15>4.5 and $m5_15<=5.5){ $rm5_15="Moderamente Alto Ansioso";  }
    if($m5_15>5.5){ $rm5_15="extremadamente Ansioso"; }


    $m1_5=number_format($m1_5/4,1);
    $rm1_5="";
    if($m1_5<=0.5){ $rm1_5="Nada de Ansiedad";    }
    if($m1_5>0.5 and $m1_5<=1.5){ $rm1_5="Casi Nada de Ansiedad";    }
    if($m1_5>1.5 and $m1_5<=2.5){ $rm1_5="Ligeramente Ansioso";    }
    if($m1_5>2.5 and $m1_5<=3.5){ $rm1_5="Medianamente Ansioso";   }
    if($m1_5>3.5 and $m1_5<=4.5){ $rm1_5="Moderamente Ansioso";    }
    if($m1_5>4.5 and $m1_5<=5.5){ $rm1_5="Moderamente Alto Ansioso";  }
    if($m1_5>5.5){ $rm1_5="extremadamente Ansioso"; }






    ////////////////////////777******SEGUNDO BLOQUE***************////////////////////////
    $m50_2=number_format($m50_2/2,1);
    $rm50_2="";
    if($m50_2<=0.5){ $rm50_2="No Intentaria Evitarla"; }
    if($m50_2>0.5 and $m50_2<=1.5){ $rm50_2="Inetaria Evitarla"; }
    if($m50_2>1.5 and $m50_2<=2){ $rm50_2="No lo Soportaria Bajo Ninguan Circunstancia";   }


    $m30_50_2=number_format($m30_50_2/2,1);
    $rm30_50_2="";
    if($m30_50_2<=0.5){ $rm30_50_2="No Intentaria Evitarla";  }
    if($m30_50_2>0.5 and $m30_50_2<=1.5){ $rm30_50_2="Inetaria Evitarla";  }
    if($m30_50_2>1.5 and $m30_50_2<=2){ $rm30_50_2="No lo Soportaria Bajo Ninguan Circunstancia";    }


    $m15_30_2=number_format($m15_30_2/6,1);
    $rm15_30_2="";
    if($m15_30_2<=0.5){ $rm15_30_2="No Intentaria Evitarla";    }
    if($m15_30_2>0.5 and $m15_30_2<=1.5){ $rm15_30_2="Inetaria Evitarla";    }
    if($m15_30_2>1.5 and $m15_30_2<=2){ $rm15_30_2="No lo Soportaria Bajo Ninguan Circunstancia";    }


    $m5_15_2=number_format($m5_15_2/6,1);
    $rm5_15_2="";
    if($m5_15_2<=0.5){ $rm5_15_2="No Intentaria Evitarla";    }
    if($m5_15_2>0.5 and $m5_15_2<=1.5){ $rm5_15_2="Inetaria Evitarla";    }
    if($m5_15_2>1.5 and $m5_15_2<=2){ $rm5_15_2="No lo Soportaria Bajo Ninguan Circunstancia";    }


    $m1_5_2=number_format($m1_5_2/4,1);
    $rm1_5_2="";
    if($m1_5_2<=0.5){ $rm1_5_2="No Intentaria Evitarla";    }
    if($m1_5_2>0.5 and $m1_5_2<=1.5){ $rm1_5_2="Inetaria Evitarla";    }
    if($m1_5_2>1.5 and $m1_5_2<=2){ $rm1_5_2="No lo Soportaria Bajo Ninguan Circunstancia";    }



    /////////////////////7**********FIN SEGUNDO BLOQUE***************////////////////77

?>




<table width="700" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="696" bordercolor="#000000" bgcolor="#DDD9C4"><p align="center"><strong>INFORME DE RESULTADOS DE ACROFOBIA  &ndash;    TRABAJO EN ALTURAS</strong></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="700" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="5" bordercolor="1" bgcolor="#DDD9C4"><p align="center"><strong>DATOS GENERALES DEL TRABAJADOR</strong></p></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Nombre del trabajador:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"><strong> <?php echo $nombretrabajador;?></strong></div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>N&uacute;mero de identificaci&oacute;n    (ID):</strong></p></td>
    <td width="360" valign="top" bordercolor="1"><div align="center"><?php echo $identificacion;?></div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Cargo:</strong></p></td>
    <td width="360" valign="top" bordercolor="1"><div align="center">PROFESIONAL</div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Departamento o secci&oacute;n:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center">HUILA</div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Edad:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center">28</div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Sexo:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center">MASCULINO</div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Fecha de aplicaci&oacute;n del    cuestionario:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center">TEST AQ ACROFOBIA </div></td>
  </tr>
  <tr>
    <td colspan="4" bordercolor="1" bgcolor="#CCCCCC"><p align="left"><strong>Nombre de la empresa:</strong></p></td>
    <td valign="top" bordercolor="1"><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="justify">El test AQ mide los s&iacute;ntomas psicol&oacute;gicos, que son de  preocupaci&oacute;n, temor, inseguridad y miedo social, ya que quienes sufren de  acrofobia se ven en una situaci&oacute;n de desnivel o de p&eacute;rdida de equilibrio,  aparecen tambi&eacute;n los indicios fisiol&oacute;gicos de que el p&aacute;nico se apodera de  ellos. Algunos de ellos son:</p>
<ol>
  <li>Aumento del ritmo card&iacute;aco.</li>
  <li>Aumento de la temperatura corporal.</li>
  <li>Tensi&oacute;n muscular.</li>
  <li>Problemas digestivos.</li>
  <li>Temblores.</li>
  <li>Mareos.</li>
</ol>

<table width="700" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="696" bordercolor="#000000" bgcolor="#DDD9C4"><p align="center"><strong>NIVELES DE ANSIEDAD</strong></p></td>
  </tr>
</table>
<p align="justify"><strong>0 Nada de ansiedad tranquilo  relajado;<br />
1 casi nada<br />
2 Ligeramente ansioso<br />
3 medianamente ansioso<br />
4 moderadamente ansioso<br />
5 moderadamente alto<br />
6 extremadamente ansioso</strong></p>

<div align="justify">
  <table border="1" cellspacing="0" cellpadding="0" width="698">
    <tr>
      <td width="328" valign="top" bordercolor="#000000" bgcolor="#CCCCCC"><p align="center"><strong>NIVEL DE ANSIEDAD</strong></p></td>
      <td width="329" valign="top" bordercolor="#000000" bgcolor="#CCCCCC"><p align="center"><strong>ALTURA</strong></p></td>
    </tr>
    <tr>
      <td valign="top" bordercolor="#000000"><p><strong><?php echo$rm50;?></strong></p></td>
      <td valign="top" bordercolor="#000000"><p align="center"><strong>50    Metros o Mas </strong></p></td>
    </tr>
    <tr>
      <td valign="top" bordercolor="#000000"><p><strong><?php echo $rm30_50;?></strong></p></td>
      <td valign="top" bordercolor="#000000"><p align="center"><strong>30 Metros a 50    Metros</strong></p></td>
    </tr>
    <tr>
      <td valign="top" bordercolor="#000000"><p><strong><?php echo $rm15_30;?></strong></p></td>
      <td valign="top" bordercolor="#000000"><p align="center"><strong>15 Metros a 30    Metros </strong></p></td>
    </tr>
    <tr>
      <td valign="top" bordercolor="#000000"><p><strong><?php echo $rm5_15;?></strong></p></td>
      <td valign="top" bordercolor="#000000"><p align="center"><strong>5 Metros a 15 Metros</strong></p></td>
    </tr>
    <tr>
      <td valign="top" bordercolor="#000000"><p><strong><?php echo $rm1_5;?></strong></p></td>
      <td valign="top" bordercolor="#000000"><p align="center"><strong>1 Metro a 5    Metros </strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<table width="700" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="696" bordercolor="#000000" bgcolor="#DDD9C4"><p align="center"><strong>NIVELES DE EVITACI&Oacute;N </strong></p></td>
  </tr>
</table>
<p align="justify"><strong>0 Nada de evitaci&oacute;n</strong></p>
<p align="justify"><strong>1 Moderada evitaci&oacute;n</strong></p>
<p align="justify"><strong>2 Con evitaci&oacute;n</strong></p>
<table border="1" cellspacing="0" cellpadding="0" width="698">
  <tr>
    <td width="304" valign="top" bordercolor="#000000" bgcolor="#CCCCCC"><p align="center"><strong>ALTURA</strong></p></td>
    <td width="388" valign="top" bordercolor="#000000" bgcolor="#CCCCCC"><p align="center"><strong>NIVEL DE EVITACI&Oacute;N</strong></p></td>
  </tr>
  <tr>
    <td valign="top" bordercolor="#000000"><p align="center"><strong>1 a 5 Metros</strong></p></td>
    <td valign="top" bordercolor="#000000"><p align="center"><?php echo $rm1_5_2;?></p></td>
  </tr>
  <tr>
    <td valign="top" bordercolor="#000000"><p align="center"><strong>5 a 15 Metros</strong></p></td>
    <td valign="top" bordercolor="#000000"><p align="center"><?php echo $rm5_15_2;?></p></td>
  </tr>
  <tr>
    <td valign="top" bordercolor="#000000"><p align="center"><strong>15 a 30 Metros</strong></p></td>
    <td valign="top" bordercolor="#000000"><p align="center"><?php echo $rm15_30_2;?></p></td>
  </tr>
  <tr>
    <td valign="top" bordercolor="#000000"><p align="center"><strong>30 a 50 Metros</strong></p></td>
    <td valign="top" bordercolor="#000000"><p align="center"><?php echo $rm30_50_2;?></p></td>
  </tr>
  <tr>
    <td valign="top" bordercolor="#000000"><p align="center"><strong>50 Metros o Mas </strong></p></td>
    <td valign="top" bordercolor="#000000"><p align="center"><?php echo $rm50_2;?></p></td>
  </tr>
</table>




<br clear="all" />
<p><strong>CONCLUSION:</strong></p>
<p>Puntea un nivel de ansiedad casi ausente; esto quiere decir que es  apta para manejar el miedo que repercute en el trabajo en alturas. en el &aacute;rea  de evitaci&oacute;n su puntuaci&oacute;n es leve, quiere decir que tiene las aptitudes  necesarias para ejecutar su trabajo</p>
<p><img width="111" height="48" src="../../../../Users/Carlos/AppData/Roaming/Macromedia/Dreamweaver 8/OfficeImageTemp/clip_image003.gif" /><br />
    <strong><em>Carlos Eduardo Paredes Trujillo</em></strong><br />
  Esp.sg-sst<br />
  Psic&oacute;logo tp: 124797</p>

<script>window.print()</script>
</body>
</html>
