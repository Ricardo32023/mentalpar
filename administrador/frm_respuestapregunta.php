<?php
session_start();
$_SESSION['scar_cod']="";
include"../lib/conexion.php";
?>
<div class="col-md-6">
	<form role="form" name="frm_cuestionario_pregunta" id="frm_cuestionario_pregunta" method="post" action="">
	<script>
	function fguardar(){
		if(document.getElementById('txtpregunta').value==""){
		alert('Digite la Pregunta');
		return false;
		}
		$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
		var datos = "accion=1&cbocuestionario="+document.getElementById('cbocuestionario').value+"&cbobloque="+document.getElementById('cbobloque').value+"&txtorden="+document.getElementById('txtorden').value+"&txtpregunta="+document.getElementById('txtpregunta').value;

		$('#div_contenido_cargo').load("administrador/frm_cuestionario_pregunta_detalle.php",datos);
	}
	function fmostrarconsulta(){
		var datos = "accion=2";
		$('#msn_consultacargo').load('consultas/frm_consulta_pregunta.php',datos)
	}
	function feliminar(id){
		var r = confirm("Desea Eliminar este Registro!");
		if (r == true) {
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=3&txtid="+id;
			$('#div_contenido_cargo').load("administrador/frm_cuestionario_pregunta_detalle.php",datos);
		}
	}
	function frecuperar(id){
		var r = confirm("Desea Activar este Registro!");
		if (r == true) {
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=4&txtid="+id;
			$('#div_contenido_cargo').load("administrador/frm_cuestionario_pregunta_detalle.php",datos);
		}
	}
	function feditar(id){
		$('#div_titulobutton').html("Editar");
		var datos = "accion=5&txtid="+id;
		$('#div_contenido_cargo').load("administrador/frm_cuestionario_pregunta_detalle.php",datos);
	}
	function fmostrartabla(){
		var datos = "accion=2";
		$('#div_mostrar_tabla').load('consultas/frm_consulta_pregunta.php',datos)
	}
	function buscar_bloque(){
		$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
		var datos = "accion=7"+"&cbocuestionario="+document.getElementById('cbocuestionario').value;
		$('#cbobloque').load('administrador/frm_cuestionario_pregunta_detalle.php',datos)
	}
	function buscar_pregunta(){
		$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
		var datos = "accion=8"+"&cbobloque="+document.getElementById('cbobloque').value;
		$('#cbopregunta').load('administrador/frm_cuestionario_pregunta_detalle.php',datos)

	}
	function fguardarrespuesta(){
		$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
		var datos = "accion=20"+"&cborespuesta="+document.getElementById('cborespuesta').value+"&cbopregunta="+document.getElementById('cbopregunta').value+"&txtvalor="+document.getElementById('txtvalor').value;
		$('#divmsnr').load('administrador/frm_cuestionario_pregunta_detalle.php',datos)
	}
	function fconsultarrespuesta(){
		$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
		var datos = "accion=21"+"&cbopregunta="+document.getElementById('cbopregunta').value;
		$('#divmsnr').load('administrador/frm_cuestionario_pregunta_detalle.php',datos)
	}
	function feliminarrespuesta(ideliminar){
		$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
		var datos = "accion=22"+"&ideliminar="+ideliminar+"&cbopregunta="+document.getElementById('cbopregunta').value;
		$('#divmsnr').load('administrador/frm_cuestionario_pregunta_detalle.php',datos)
	}
	</script>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tipo Respuestas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div id="divmsn"></div>
			<div id="div_contenido_cargo"></div>
              <div class="box-body">
              	<div class="row">
                 	<div class="col-md-4">
                		<label>Cuestionario</label>
                		<select name="cbocuestionario" id="cbocuestionario" onchange="buscar_bloque()" class="form-control">
                		  <option value="0">Seleccione..</option>
                		  <?php
						  $consulcuestionario=mysql_query("select cue_cod,cue_nombre from cuestionario where cue_estado='A'");
						  while($cocuestionario=mysql_fetch_array($consulcuestionario)){
							  echo"<option value=".$cocuestionario['cue_cod'].">".$cocuestionario['cue_nombre']."</option>";
						  }
						  ?>
              		  </select>
                 	</div>
                    <div class="col-md-6">
                		<label>Bloque</label>
                		<select name="cbobloque" id="cbobloque" onchange="buscar_pregunta()" class="form-control">

              		  </select>
                	</div>

                </div>
                <div class="row">
                  <div class="col-md-10">
                		<label>Pregunta</label>
                		<select name="cbopregunta" id="cbopregunta" onchange="fconsultarrespuesta()" class="form-control">

										</select>
                  </div>
                    <div class="col-md-2">


                </div>



						</div>
						<div class="row">
							<div class="col-md-6">
							<label>Respuesta</label>
							<select name="cborespuesta" id="cborespuesta" class="form-control">
								<?php
								$consulrespuesta=mysql_query("SELECT res_cod,res_nombre FROM respuesta WHERE res_estado='A'");
								while($corespuesta=mysql_fetch_array($consulrespuesta)){
									echo"<option value='".$corespuesta['res_cod']."'>".$corespuesta['res_nombre']."</option>";

								}
								?>
							</select>
						 </div>
						 <div class="col-md-3">
						   <label>Valor</label>
							 <input type="text" name="txtvalor" id="txtvalor" value="" class="form-control" />
						 </div>
						 <div class="col-md-1">
						   <br/>
							 <button type="button" onclick="fguardarrespuesta()" class="btn btn-primary">+</button>
						 </div>
						</div>
              <!-- /.box-body -->
<div id="divmsnr"></div>
             <div class="box-footer">

             </div>
             <!--MODAL CONSULTA DE CARGOS-->
             <div class="modal fade" id="modal-default"  >
          		<div class="modal-dialog" style="width:820px">
            		<div class="modal-content">
              			<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  			<span aria-hidden="true">&times;</span></button>
                			<h4 class="modal-title">Consulta de Preguntas</h4>
              			</div>
              			<div class="modal-body" >
                			<p>

                             <div id="div_mostrar_tabla"></div>

                            <!-- jQuery 3 -->
                            <script src="bower_components/jquery/dist/jquery.min.js"></script>
                            <!-- Bootstrap 3.3.7 -->
                            <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                            <!-- DataTables -->
                            <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
                            <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                            <!-- SlimScroll -->
                            <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
                            <!-- FastClick -->
                            <script src="bower_components/fastclick/lib/fastclick.js"></script>
                            <!-- AdminLTE App -->
                            <script src="dist/js/adminlte.min.js"></script>
                            <!-- AdminLTE for demo purposes -->
                            <script src="dist/js/demo.js"></script>
                            <!-- page script -->
                            <script>
                              $(function () {
                                $('#example1').DataTable()
                                $('#example2').DataTable({
                                  'paging'      : true,
                                  'lengthChange': false,
                                  'searching'   : false,
                                  'ordering'    : true,
                                  'info'        : true,
                                  'autoWidth'   : false
                                })
                              })
                            </script>

        					</p>
              			</div>
              			<div class="modal-footer">
                			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

              			</div>
            		</div>
            <!-- /.modal-content -->
          		</div>
          <!-- /.modal-dialog -->
        	</div>
            <!--FIN MODAL CONSULTA DE CARGOS-->

            <script>
            fmostrartabla();
            </script>
			</form>
   </div>
