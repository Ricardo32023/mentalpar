<html>
  <head></head>
  <title>Respuestas</title>
  <body>
    <?php
    include"../lib/conexion.php";
    $idCuestionario=$_REQUEST['id'];
    echo"<div aling='center'>Respuesta del Cuestionarionario</div>";

    $consulpreguntas=mysql_query("SELECT rce_cod,p.per_documento,p.per_primernombre,p.per_segundonombre,p.per_primerapellido,p.per_segundoapellido
FROM respuesta_cabeza_encuesta r, persona_contrato pc, persona p WHERE pc.pec_cod=".$idCuestionario." AND r.con_cod=pc.coe_cod AND pc.per_cod=p.per_cod
AND r.cue_cod=pc.cue_cod AND pc.per_cod=r.ter_cod");
    if($copregunta=mysql_fetch_array($consulpreguntas)){
      $idRespuesta=$copregunta['rce_cod'];
      echo"Documento:".$copregunta['per_documento'];
      echo"Nombres y Apellidos:".$copregunta['per_primernombre']." ".$copregunta['per_segundonombre']." ".$copregunta['per_primerapellido']." ".$copregunta['per_segundoapellido'];
    }
    echo"
    <table border=1>
      <tr>
        <td>Pregunta</td>
        <td>Respuesta</td>
      </tr>
    ";

    $consulrespuesta=mysql_query("SELECT pre_nombre,rce_nombre FROM respuesta_encuesta WHERE rce_id=".$idRespuesta);
    while($corespuesta=mysql_fetch_array($consulrespuesta)){
      echo"
      <tr>
        <td>".$corespuesta['pre_nombre']."</td>
        <td>".$corespuesta['rce_nombre']."</td>
      </tr>
      ";

    }
    echo"
    </table>
    ";
    ?>
    <script>window.print();</script>
  </body>
</html>
