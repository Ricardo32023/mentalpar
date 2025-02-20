<?php
@session_start();
include"../lib/conexion.php";

echo "INSERT INTO respuesta_cabeza_encuesta(rce_fecha,rce_hora,con_cod,ter_cod,cue_cod)VALUES('".date('Y-m-d')."','".date('H-i-s')."',
".$_SESSION['scontrato'].",".$_SESSION['sper_cod'].",".$_SESSION['cuestionario'].")";
  $guarda=mysql_query("INSERT INTO respuesta_cabeza_encuesta(rce_fecha,rce_hora,con_cod,ter_cod,cue_cod)VALUES('".date('Y-m-d')."','".date('H-i-s')."',".$_SESSION['scontrato'].",".$_SESSION['sper_cod'].",".$_SESSION['cuestionario'].")");
  if($guarda==true){
      for($i=1;$i<=$_SESSION['cntpregunta'];$i++){

      $respuesta=0;

        $consulrespuesta=mysql_query("SELECT res_cod,res_nombre FROM respuesta WHERE res_cod=".$_POST['cbopregunta'.$i]);
        if($corespuesta=mysql_fetch_array($consulrespuesta)){
          $respuesta=$corespuesta['res_nombre'];

        }
        $valor=0;
        $consulvalor=mysql_query("SELECT rep_valor FROM respuesta_pregunta WHERE cup_cod=".$_SESSION['codpregunta'][$i]." AND res_cod=".$_POST['cbopregunta'.$i]);
        if($covalor=mysql_fetch_array($consulvalor)){
          $valor=$covalor['rep_valor'];
        }
        $gurarpregunta=mysql_query("INSERT INTO respuesta_encuesta(rce_id,pre_cod,res_cod,rce_nombre,pre_nombre,res_valor)VALUES(1,".$_SESSION['codpregunta'][$i].",".$_POST['cbopregunta'.$i].",
        '".$respuesta."','".$_SESSION['nombrepregunta'][$i]."',".$valor.")");
      }
  }

?>
