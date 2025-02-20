<?php
session_start();
$_SESSION['scar_cod']="";
include"../lib/conexion.php";
?>
<div class="col-md-6">
	<div class="box box-primary">
    	<div class="box-header with-border">
        	<h3 class="box-title">Vista Preliminar</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" name="frm_cargo" method="post" action="">
        	<script>
            	function fver(){
				
					$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=1&cbocuestionario="+document.getElementById('cbocuestionario').value;
					$('#div_contenido_cargo').load("administrador/frm_vista_detalle.php",datos);
				}
				function fmostrarconsulta(){
					var datos = "accion=2";
					$('#msn_consultacargo').load('consultas/frm_consulta_cargo.php',datos)
				}
				function feliminar(id){
					var r = confirm("Desea Eliminar este Registro!");
					if (r == true) {
						$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=3&txtid="+id;
						$('#div_contenido_cargo').load("administrador/frm_cargo_detalle.php",datos);
					}
				}
				function frecuperar(id){
					var r = confirm("Desea Activar este Registro!");
					if (r == true) {
						$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=4&txtid="+id;
						$('#div_contenido_cargo').load("administrador/frm_cargo_detalle.php",datos);
					}
				}
				function feditar(id){
					$('#div_titulobutton').html("Editar");
					var datos = "accion=5&txtid="+id;
					$('#div_contenido_cargo').load("administrador/frm_cargo_detalle.php",datos);
				}
				function fmostrartabla(){
					var datos = "accion=2";
					$('#div_mostrar_tabla').load('consultas/frm_consulta_cargo.php',datos)
				}
				
            </script>
        	<div class="box-body">
            	<div class="form-group">
                  <label for="exampleInputEmail1">Cuestionario:</label>
                  
                  <select name="cbocuestionario" id="cbocuestionario" class="form-control">
                    <option value="0">Seleccione..</option>
                    <?php
						  $consulcuestionario=mysql_query("select cue_cod,cue_nombre from cuestionario where cue_estado='A'");
						  while($cocuestionario=mysql_fetch_array($consulcuestionario)){
							  echo"<option value=".$cocuestionario['cue_cod'].">".$cocuestionario['cue_nombre']."</option>";
						  }
						  ?>
                  </select>
                  
                  <button type="button" onclick="fver()" class="btn btn-primary"><div id="div_titulobutton">Ver</div></button>
                </div>
                <div class="form-group"></div>
                <div id="divmsn"></div>
                <div id="div_contenido_cargo"></div>
			</div>
              <!-- /.box-body -->
              
			<div id="msn_consultacargo"></div>
            <div class="box-footer">
            	
             </div>   
             <!--MODAL CONSULTA DE CARGOS-->       
             <div class="modal fade" id="modal-default"  ><!-- /.modal-dialog -->
        	</div>
            <!--FIN MODAL CONSULTA DE CARGOS-->   
            
            <script>
            fmostrartabla();
            </script>
        </form>
    </div>
</div>       