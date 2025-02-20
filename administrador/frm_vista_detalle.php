<?php
include"../lib/conexion.php";
$consulcuestionario=mysql_query("SELECT cue_nombre,cue_descripcion FROM cuestionario WHERE cue_cod=".$_REQUEST['cbocuestionario']);
if($cocuestionario=mysql_fetch_array($consulcuestionario)){
	$titulo=$cocuestionario['cue_nombre'];
	$descripcion=$cocuestionario['cue_descripcion'];
}
?>
<table width="100%" border="1" class="table table-bordered table-striped">
  <tr>
    <td>
    <?php
	echo "<div align='center'><strong>".$titulo."<stron><br/>".$descripcion."</div>";
	?>
    </td>
  </tr>
  <?php
  $consulbloque=mysql_query("SELECT cub_cod,cub_bloque,cub_descripcion FROM cuestionario_bloque WHERE cue_cod=".$_REQUEST['cbocuestionario']." and cub_estado='A' ORDER BY cub_orden");
  while($cobloque=mysql_fetch_array($consulbloque)){
  	echo"
	  <tr>
    	<td><strong>".$cobloque['cub_bloque']."</strong><br/>".$cobloque['cub_descripcion']."
			<table border='0' width='98%'>

		";

		//echo "SELECT cup_cod,cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$cobloque['cub_cod']." and cup_estado='A' ORDER BY cup_orden";
		$consulpregunta=mysql_query("SELECT cup_cod,cup_pregunta FROM cuestionario_pregunta WHERE cub_cod=".$cobloque['cub_cod']." and cup_estado='A' ORDER BY cup_orden");
		while($copregunta=mysql_fetch_array($consulpregunta)){
			//echo $i++;
			echo"
			<tr>
				<td width='80%'>$copregunta[1]</td>
				<td>
					<select name='cbopregunta$i' id='cbopregunta$i' class='form-control'>
				";

						  $consulrespuesta=mysql_query("SELECT rp.rep_cod,rp.res_cod,res_nombre,rep_valor FROM respuesta_pregunta rp INNER JOIN respuesta r ON rp.res_cod = r.res_cod
INNER JOIN cuestionario_pregunta c ON rp.cup_cod = c.cup_cod WHERE rp.rep_estado='A' AND c.cup_cod=".$copregunta['cup_cod']);
						  while($coregunta=mysql_fetch_array($consulrespuesta)){
							  echo"<option value=".$coregunta['res_cod'].">".$coregunta['res_nombre']."</option>";
						  }
			echo"
                  </select>
				</td>
			</tr>
			";
		}

		echo"
			</table>
		</td>
  	  </tr>
	";
  }
	echo"<script>$('#divmsn').html('');</script>";
  ?>

  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
