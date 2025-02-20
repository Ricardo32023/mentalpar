<?php
@session_start();


/********GRAFICO 1 ESTRES

***///
$a1=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=27 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp1"){
    $a1=$copregunta1['total'];
  }
}

$a2=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=28 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

if($copregunta1['rce_nombre']=="rp2"){
  $a2=$copregunta1['total'];
  }
}

$a3=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=29 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp3"){
    $a3=$copregunta1['total'];
    }
  }

$a4=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=30 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp4"){
    $a4=$copregunta1['total'];
    }
  }

$a5=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=31 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp5"){
    $a5=$copregunta1['total'];
    }
  }

$a6=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=32 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp6"){
    $a6=$copregunta1['total'];
    }
  }

$a7=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=33 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp7"){
    $a7=$copregunta1['total'];
    }
  }

$a8=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=34 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp8"){
    $a8=$copregunta1['total'];
  }
}

  $sumatoriaA=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8;
  @$porcentajeFisiologico=(($sumatoriaA/8)*4);

$b1=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=35 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp9"){
    $b1=$copregunta1['total'];
  }
}
$b2=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=36 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp10"){
    $b2=$copregunta1['total'];
  }
}
$b3=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=37 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp11"){
    $b3=$copregunta1['total'];
  }
}
$b4=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=38 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp12"){
    $b4=$copregunta1['total'];
    }
  }

  $sumatoriaB=$b1+$b2+$b3+$b4;
  @$porcentajeSocial=(($sumatoriaB/4)*3);

$c1=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=39 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp13"){
    $c1=$copregunta1['total'];
  }
}

$c2=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=40 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";
  if($copregunta1['rce_nombre']=="rp14"){
    $c2=$copregunta1['total'];
  }
 }

$c3=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=41 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp15"){
    $c3=$copregunta1['total'];
  }
}

$c4=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=42 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp16"){
    $c4=$copregunta1['total'];
  }
}

$c5=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=43 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp17"){
    $c5=$copregunta1['total'];
  }
}

$c6=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=44 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp18"){
    $c6=$copregunta1['total'];
  }
}

$c7=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=45 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp19"){
    $c7=$copregunta1['total'];
  }
}

$c8=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=46 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp20"){
    $c8=$copregunta1['total'];
  }
}

$c9=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=47 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp21"){
    $c9=$copregunta1['total'];
  }
}

$c10=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=48 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp22"){
    $c10=$copregunta1['total'];
  }
}

$sumatoriaC=$c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10;
@$porcentajeintelectual=(($sumatoriaC/10)*2);

$d1=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=49 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp23"){
    $d1=$copregunta1['total'];
  }
  }

$d2=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=50 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp24"){
    $d2=$copregunta1['total'];
  }
  }

$d3=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=51 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp25"){
    $d3=$copregunta1['total'];
  }
  }

$d4=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=52 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp26"){
    $d4=$copregunta1['total'];
  }
  }

$d5=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=53 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp27"){
    $d5=$copregunta1['total'];
  }
  }

$d6=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=54 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp28"){
    $d6=$copregunta1['total'];
  }
  }

$d7=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=55 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp29"){
    $d7=$copregunta1['total'];
  }
  }

$d8=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=56 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp30"){
    $d8=$copregunta1['total'];
  }
  }

$d9=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=57 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="rp31"){
    $d9=$copregunta1['total'];
  }
  }

$sumatoriaD=$d1+$d2+$d3+$d4+$d5+$d6+$d7+$d8+$d9;
@$porcentajepsicoemo=(($sumatoriaD/9)*1);

$sumaporcentajeestres=((($porcentajeFisiologico+$porcentajeSocial+$porcentajeintelectual+$porcentajepsicoemo)/61,16)*100);

// Calculo para auxiliar y operador

var resultadoestres=$sumaporcentajeestres;
var muy_bajo=7,9;
var bajo=12,7;
var medio=17,8;
var alto=25,1;
var muy_alto=61,16;

if (resultadoestres <= muy_bajo)
        {
        var estres_final;
        estres_final=$sumaporcentajeestres;
        document.write("Tu Nivel de Estres es <strong>" + estres_final + " Riesgo Muy Bajo</strong>");
        }
    else if (resultadoestres >muy_bajo && resultadoestres< bajo)
        {
          var estres_final;
          estres_final=$sumaporcentajeestres;
          document.write("Tu Nivel de Estres es <strong>" + estres_final + " Riesgo Bajo</strong>");
              }
    else if (resultadoestres >bajo && resultadoestres< medio)
          {
          var estres_final;
          estres_final=$sumaporcentajeestres;
          document.write("Tu Nivel de Estres es <strong>" + estres_final + " Riesgo Medio</strong>");
          }
    else if (resultadoestres >medio && resultadoestres< muy_alto)
          {
          var estres_final;
          estres_final=$sumaporcentajeestres;
          document.write("Tu Nivel de Estres es <strong>" + estres_final + " Riesgo Alto</strong>");
          }
    else if (resultadoestres >alto && resultadoestres< alto)
          {
          var estres_final;
          estres_final=$sumaporcentajeestres;
          document.write("Tu Nivel de Estres es <strong>" + estres_final + " Riesgo Muy Alto</strong>");
          }
    else
          {
          document.write("<strong>valla y coja oficio</strong>");
          }

echo"<script>graficoestres($a,$b)</script>";
echo" <script>$('#divgraficoestres').html
('El ".number_format($porcentajemasculino,1)."% de la población trabajadora evaluada es masculina y un
".number_format($porcentafemenino,1)."% es femenina.);</script>";



?>
