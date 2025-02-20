<?php
@session_start();

/********GRAFICO 1

***///

$_SESSION['secontrato']=2;
$a=0;
$b=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=216 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";
  if($copregunta1['rce_nombre']=="Femenino"){
    $a=$copregunta1['total'];

  }
  if($copregunta1['rce_nombre']=="Masculino"){
    $b=$copregunta1['total'];
  }

}

$sumatoriagenero=$a+$b;
@$porcentajemasculino=($b*100)/$sumatoriagenero;
$porcentafemenino=100-$porcentajemasculino;
//echo'<script>$("#micapa").html("Nuevo contenido de la capa");</script>';
echo"<script>graficoGenero($a,$b)</script>";
echo"<script>document.getElementById('micapa').innerHTML = 'El ".number_format($porcentajemasculino,1)."% de la población trabajadora evaluada es masculina y un ".number_format($porcentafemenino,1)."% es femenina.';</script>";
//echo"<script>$('#micapa').html('<strong>Ejemplo con html()</strong>');</script>";


/********GRAFICO 2 ETAREO

***///
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;

$consuletereopreguntados=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=217 GROUP BY  rce_nombre");
while($copregunta2=mysql_fetch_array($consuletereopreguntados)){
  echo $copregunta2['rce_nombre']."--".$copregunta2['total']."<br/>";
  if($copregunta2['rce_nombre']=="Menos de 20"){
    $a=$copregunta2['total'];
      }

  if($copregunta2['rce_nombre']=="De 20 a 30 años"){
    $b=$copregunta2['total'];
      }

if($copregunta2['rce_nombre']=="de 31 a 40 años"){
  $c=$copregunta2['total'];
      }

if($copregunta2['rce_nombre']=="de 41 a 50 años"){
  $d=$copregunta2['total'];
      }

if($copregunta2['rce_nombre']=="Más de 50 años"){
  $e=$copregunta2['total'];
      }
}

$sumatoriaetareo=$a+$b+$c+$d+$e;
$porcentajeetareouno=($a*100)/$sumatoriaetareo;
$porcentajeetareodos=($b*100)/$sumatoriaetareo;
$porcentajeetareotres=($c*100)/$sumatoriaetareo;
$porcentajeetareocuatro=($d*100)/$sumatoriaetareo;
$porcentajeetareocinco=($e*100)/$sumatoriaetareo;
echo"<script>graficoEtareo($a,$b,$c,$d,$e)</script>";

echo"<script>document.getElementById('divgraficoEtareo').innerHTML = 'El ".number_format($porcentajeetareouno)."% de la población trabajadora evaluada es menor a 20 años, un' +
'".number_format($porcentajeetareodos)."% es de 20 a 30 años.'+
'".number_format($porcentajeetareotres)."% es de 31 a 40 años.'+
'".number_format($porcentajeetareocuatro)."% es de 41 a 50 años.'+
'".number_format($porcentajeetareocinco)."% es mayor a 50 años.';</script>";



/********GRAFICO 3 ANALISIS POR ESTADO CIVIL TIPO A

***///
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=218 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="Soltero(a)"){
    $a=$copregunta1['total'];
  }
  if($copregunta1['rce_nombre']=="Casado(a)"){
    $b=$copregunta1['total'];
  }
  if($copregunta1['rce_nombre']=="Union Libre"){
    $c=$copregunta1['total'];
  }
    if($copregunta1['rce_nombre']=="Separado (a)"){
  $d=$copregunta1['total'];
  }

if($copregunta1['rce_nombre']=="Divorciado (a)"){
  $e=$copregunta1['total'];
}
if($copregunta1['rce_nombre']=="Viudo (a)"){
  $f=$copregunta1['total'];
}
if($copregunta1['rce_nombre']=="Sacerdote / Monja"){
  $g=$copregunta1['total'];
}
}
$sumatoriaestado=$a+$b+$c+$d+$e+$f+$g;
@$porcentasoltero=($a*100)/$sumatoriaestado;
@$porcentacasado=($b*100)/$sumatoriaestado;
@$porcentaunion=($c*100)/$sumatoriaestado;
@$porcentaseparado=($d*100)/$sumatoriaestado;
@$porcentadivorciado=($e*100)/$sumatoriaestado;
@$porcentaviudo=($f*100)/$sumatoriaestado;
@$porcentamonja=($g*100)/$sumatoriaestado;
echo"<script>graficoEstadoCivil($a,$b,$c,$d,$e,$f,$g)</script>";
echo" <script>$('#divgraficoestadocivil').html
('El ".number_format($porcentasoltero)."% de la población trabajadora su estado civil es Soltero(a) , seguido del
".number_format($porcentacasado)."% casado, el
".number_format($porcentaunion)."% es Union Libre,
".number_format($porcentaseparado)."% es Separado,
".number_format($porcentadivorciado)."% es Divorciado,
".number_format($porcentaviudo)."% es Viudo,
".number_format($porcentamonja)."% es Sacerdote / Monja.');</script>";



/********GRAFICO 4 ANALISIS PERSONAS A CARGO

***///
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
include"lib/conexion.php";
$consulgeneropreguntauno=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=224 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulgeneropreguntauno)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";

  if($copregunta1['rce_nombre']=="1"){
    $a=$copregunta1['total'];
  }
  if($copregunta1['rce_nombre']=="2"){
    $b=$copregunta1['total'];
  }
  if($copregunta1['rce_nombre']=="3"){
    $c=$copregunta1['total'];
  }
    if($copregunta1['rce_nombre']=="4"){
  $d=$copregunta1['total'];
  }

if($copregunta1['rce_nombre']=="5"){
  $e=$copregunta1['total'];
}
if($copregunta1['rce_nombre']=="6"){
  $f=$copregunta1['total'];
}
if($copregunta1['rce_nombre']=="Ninguno"){
  $g=$copregunta1['total'];
}
}
$sumatoriaacargo=$a+$b+$c+$d+$e+$f+$g;
@$porcentaunapersona=($a*100)/$sumatoriaacargo;
@$porcentadospersonas=($b*100)/$sumatoriaacargo;
@$porcentatrespersonas=($c*100)/$sumatoriaacargo;
@$porcentacuatropersonas=($d*100)/$sumatoriaacargo;
@$porcentacincopersonas=($e*100)/$sumatoriaacargo;
@$porcentaseispersonas=($f*100)/$sumatoriaacargo;
@$porcentasieteninguna=($g*100)/$sumatoriaacargo;
echo"<script>graficoPersonasCargo($a,$b,$c,$d,$e,$f,$g)</script>";
echo" <script>$('divPersonasCargo').html
('El ".number_format($porcentaunapersona)."% de la población trabajadora tiene una persona a cargo, seguido del
".number_format($porcentadospersonas)."% con Dos personas a cargo, el
".number_format($porcentatrespersonas)."% con Tres personas,
".number_format($porcentacuatropersonas)."% con Cuatro,
".number_format($porcentacincopersonas)."% con Cinco,
".number_format($porcentaseispersonas)."% con Seis,
".number_format($porcentasieteninguna)."% con Ninguna.');</script>";


/********GRAFICO 5 ANALISIS POR ESCOLARIDAD

***///

$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
$h=0;
$j=0;
$k=0;
$l=0;
include"lib/conexion.php";
$consulescolaridadpregunta=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=219 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulescolaridadpregunta)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";
  if($copregunta1['rce_nombre']=="Ninguna"){
    $a=$copregunta1['total'];
      }

  if($copregunta1['rce_nombre']=="Primaria Incompleta"){
    $b=$copregunta1['total'];
      }
      if($copregunta1['rce_nombre']=="Primaria Completa"){
        $c=$copregunta1['total'];
          }
  if($copregunta1['rce_nombre']=="Bachillerato Incompleto"){
    $d=$copregunta1['total'];
                }
if($copregunta1['rce_nombre']=="Bachillerato Completo"){
  $e=$copregunta1['total'];
      }
if($copregunta1['rce_nombre']=="Técnico/Tecnológico Incompleto"){
  $f=$copregunta1['total'];
      }
if($copregunta1['rce_nombre']=="Técnico/Tecnológico Completo"){
  $g=$copregunta1['total'];
            }
if($copregunta1['rce_nombre']=="Profesional Incompleto"){
  $h=$copregunta1['total'];
      }
if($copregunta1['rce_nombre']=="Profesional Completo"){
  $i=$copregunta1['total'];
            }
if($copregunta1['rce_nombre']=="Carrera Militar /Policía"){
  $j=$copregunta1['total'];
      }
if($copregunta1['rce_nombre']=="Post-grado Incompleto"){
  $k=$copregunta1['total'];
            }
if($copregunta1['rce_nombre']=="Post-grado Completo"){
  $l=$copregunta1['total'];
          }
    }
$sumatoriaescolaridad=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l;
@$porcentajeescolaridadninguno=($a*100)/$sumatoriaescolaridad;
@$porcentajeetaescolaridadpi=($b*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadpc=($c*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadbi=($d*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadbc=($e*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadtti=($f*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadttc=($g*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadpi=($h*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadpc=($i*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadcmp=($j*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadpgi=($k*100)/$sumatoriaescolaridad;
@$porcentajeescolaridadpgc=($l*100)/$sumatoriaescolaridad;
echo"<script>graficoEscolaridad($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)</script>";
echo" <script>$('#divgraficoEscolaridad').html
('El
".number_format($porcentajeescolaridadninguno)."% Ninguna formación, un
".number_format($porcentajeetaescolaridadbi)."% es Bachillerato Incompleto.
".number_format($porcentajeescolaridadbc)."% es Bachillerato Completo.
".number_format($porcentajeescolaridadttc)."% es Técnico/Tecnológico completo.
".number_format($porcentajeescolaridadpi)."% es Profesional Incompleto.
".number_format($porcentajeescolaridadpc)."% es Profesional Completo.');</script>";

/********GRAFICO 6 TIPO DE VIVIENDA

***///
$a=0;
$b=0;
$b=0;
include"lib/conexion.php";
$consulvivienda=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=223 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulvivienda)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";
  if($copregunta1['rce_nombre']=="Propia"){
    $a=$copregunta1['total'];

  }
  if($copregunta1['rce_nombre']=="En Arrendo"){
    $b=$copregunta1['total'];
  }
  if($copregunta1['rce_nombre']=="Familiar"){
    $c=$copregunta1['total'];
  }

}

$sumatoriavivienda=$a+$b+$c;
@$porcentajepropia=($a*100)/$sumatoriavivienda;
@$porcentaarrendo=($c*100)/$sumatoriavivienda;
@$porcentafamiliar=($d*100)/$sumatoriavivienda;
echo"<script>graficoTipoVivienda($a,$b,$c)</script>";
echo" <script>$('#divgraficoTipoVivienda').html
('El ".number_format($porcentajepropia)."% Tiene casa Propia,
".number_format($porcentaarrendo)."% en Arrendo y el
".number_format($porcentafamiliar)."% en vivienda familiar.');</script>";

/********GRAFICO 5 ANALISIS POR ESCOLARIDAD

***///

$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
$h=0;
include"lib/conexion.php";
$consulestratopregunta=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND con_cod=".$_SESSION['secontrato']." AND pre_cod=222 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulestratopregunta)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";
  if($copregunta1['rce_nombre']=="1"){
    $a=$copregunta1['total'];
      }

  if($copregunta1['rce_nombre']=="2"){
    $b=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="3"){
  $c=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="4"){
  $d=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="5"){
  $e=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="6"){
  $f=$copregunta1['total'];
      }
if($copregunta1['rce_nombre']=="Finca"){
  $g=$copregunta1['total'];
            }
if($copregunta1['rce_nombre']=="No sé"){
  $h=$copregunta1['total'];
                  }
    }
$sumatoriaestrato=$a+$b+$c+$d+$e+$f+$g+$h;
@$porcentajeestrato1=($a*100)/$sumatoriaestrato;
@$porcentajeestrato2=($b*100)/$sumatoriaestrato;
@$porcentajeestrato3=($c*100)/$sumatoriaestrato;
@$porcentajeestrato4=($d*100)/$sumatoriaestrato;
@$porcentajeestrato5=($e*100)/$sumatoriaestrato;
@$porcentajeestrato6=($f*100)/$sumatoriaestrato;
@$porcentajefinca=($g*100)/$sumatoriaestrato;
@$porcentajenose=($h*100)/$sumatoriaestrato;
echo"<script>graficoEstrato($a,$b,$c,$d,$e,$f,$g,$h)</script>";
echo" <script>$('#divgraficoEstrato').html ('El ".number_format($porcentajeestrato1)."% Vive en estrato 1, un ".number_format($porcentajeestrato2)."% Vive en estrato 2.
".number_format($porcentajeestrato3)."% en estrato 3. ".number_format($porcentajeestrato4)."% en estrato 4. ".number_format($porcentajeestrato5)."% en estrato 5.'
".number_format($porcentajeestrato6)."% en estrato 6. ".number_format($porcentajefinca)."% en Fica. ".number_format($porcentajenose)."% No sabe.');
      </script>";

/********GRAFICO Antiguedad Empresarial

***///

$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
$h=0;
include"lib/conexion.php";
$consulantiguedadreguntapregunta=mysql_query("SELECT COUNT(*) AS total,rce_nombre FROM respuesta_cabeza_encuesta c, respuesta_encuesta d WHERE c.rce_cod=rce_id
AND cue_cod=".$_SESSION['secontrato']." AND pre_cod=226 GROUP BY  rce_nombre");
while($copregunta1=mysql_fetch_array($consulantiguedadreguntapregunta)){
  echo $copregunta1['rce_nombre']."--".$copregunta1['total']."<br/>";
  if($copregunta1['rce_nombre']=="Menos de 1 Año"){
    $a=$copregunta1['total'];
      }

  if($copregunta1['rce_nombre']=="De 2 a 6 Años"){
    $b=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="7 a 10 Años"){
  $c=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="10 a 15 Años"){
  $d=$copregunta1['total'];
      }

if($copregunta1['rce_nombre']=="16 o más Años"){
  $e=$copregunta1['total'];
      }
    }
$sumatoriaantiguedad=$a+$b+$c+$d+$e;
@$porcentajeantiguedad1=($a*100)/$sumatoriaantiguedad;
@$porcentajeantiguedad2=($b*100)/$sumatoriaantiguedad;
@$porcentajeantiguedad3=($c*100)/$sumatoriaantiguedad;
@$porcentajeantiguedad4=($d*100)/$sumatoriaantiguedad;
@$porcentajeantiguedad5=($e*100)/$sumatoriaantiguedad;

echo"<script>graficoAntiguedadEmpresa($a,$b,$c,$d,$e)</script>";
echo" <script>$('#divantiguedadEmpresa').html
('El ".number_format($porcentajeantiguedad1)."% Tiene menos de un año de Antiguedad ".number_format($porcentajeantiguedad2)."% Tiene entre 2 a 6 años de Antiguedad.
".number_format($porcentajeantiguedad3)."% Tiene entre 7 y 10 años de antiguedad. ".number_format($porcentajeantiguedad4)."% Tiene entre 10 a 15 Años de Antiguedad.
".number_format($porcentajeantiguedad5)."% Tiene 16 años o mas.');</script>";

?>
