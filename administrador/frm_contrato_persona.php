<?php
@session_start();
include"../lib/conexion.php";
$_SESSION['scoc_cod']="";
$_SESSION['ster_cod']="";
?>
<div class="col-md-6">
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contrato - Persona</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="frm_contrato" name="frm_contrato" method="post" action="">
            	<script>
            	function fguardar(){
					$('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=1&txtcontrato="+document.getElementById('txtcontrato').value+"&cbocuestionario="+document.getElementById('cbocuestionario').value;
					$('#div_contenido_contratocargo').load("administrador/frm_contrato_persona_detalle.php",datos);
				}
				function fmostrarconsulta(){
					var datos = "accion=2";
					$('#divmsn_contratocargo').load('consultas/frm_consulta_persona.php',datos)
				}
				function feliminar(id){
					var r = confirm("Desea Eliminar este Registro!");
					if (r == true) {
						$('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=3&txtid="+id;
						$('#div_contenido_contratocargo').load("administrador/frm_contrato_persona_detalle.php",datos);
					}
				}
				function frecuperar(id){
					var r = confirm("Desea Activar este Registro!");
					if (r == true) {
						$('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=4&txtid="+id;
						$('#div_contenido_contratocargo').load("administrador/frm_contrato_persona_detalle.php",datos);
					}
				}
				function feditar(id){
					//$('#div_titulobutton').html("Editar");
					var datos = "accion=5&txtid="+id;
					$('#div_contenido_contratocargo').load("administrador/frm_contrato_persona_detalle.php",datos);
				}
				function fmostrartabla(){
					var datos = "accion=2";
					$('#div_mostrar_tabla').load('consultas/frm_consulta_persona.php',datos)
				}
				function fconsultar(){
					$('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=6&txtcontrato="+document.getElementById('txtcontrato').value;
					$('#div_contenido_contratocargo').load("administrador/frm_contrato_persona_detalle.php",datos);
				}
				function buscar_persona(){
					$('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=9&txtidentificacion="+document.getElementById('txtidentificacion').value;
					$('#div_contenido_contratocargo').load("administrador/frm_contrato_persona_detalle.php",datos);
				}
            </script>
            <div id="divmsn_contratocargo"></div>

              <div class="box-body">
              	<div class="row">
                 	<div class="col-md-2">
                		<label>No Contrato</label>
                		<select class="form-control" id="txtcontrato" name="txtcontrato" onchange="fconsultar()" >
                		  <option value="0">Seleccione..</option>
                		  <?php
							$consulcargo=mysql_query("SELECT coe_cod,coe_numerocontrato FROM contrato_empresa WHERE coe_estado='A'");
							while($cocargo=mysql_fetch_array($consulcargo)){
								echo"<option value=".$cocargo['coe_cod'].">".$cocargo['coe_numerocontrato']."</option>";
							}
							?>
              		  </select>
                 	</div>
                    <div class="col-md-10">
                		<label>Empresa</label>
                		<input type="text" class="form-control" id="txtempresa" name="txtempresa" readonly="readonly"  />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                		<label>Documento</label>
                		<input type="text" class="form-control" id="txtidentificacion" name="txtidentificacion" onkeyup="buscar_persona()" />
                    </div>
                    <div class="col-md-10">
                		<label>Tercero</label>
                		<input type="text" class="form-control" id="txttercero" name="txttercero" readonly="readonly"  />
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                		<label>Cuestionario</label>
                		<select class="form-control" id="cbocuestionario" name="cbocuestionario">
                		  <option value="0">Seleccione..</option>
                		  <?php
							$consulcargo=mysql_query("SELECT cue_cod, cue_nombre FROM cuestionario WHERE cue_estado='A'");
							while($cocargo=mysql_fetch_array($consulcargo)){
								echo"<option value=".$cocargo['cue_cod'].">".$cocargo['cue_nombre']."</option>";
							}
							?>
              		  </select>
                    </div>
                </div>



	</div>
              <!-- /.box-body -->

             <div class="box-footer">
                <table width="100%">
                	<tr>
                    	<td>
                        	<button type="button" onclick="llamar_contrato()" class="btn btn-default">Nuevo</button>
                        	<button type="button" onclick="fguardar()" class="btn btn-primary"><div id="div_titulobutton">Guardar</div></button>
                        </td>
                        <td align="right"><button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-success">Consultar</button></td>
                    </tr>
                </table>
              </div>
							<div id="div_contenido_contratocargo"></div>
               <!--MODAL CONSULTA DE CARGOS-->
             <div class="modal fade" id="modal-default"  >
          		<div class="modal-dialog" style="width:1050px">
            		<div class="modal-content">
              			<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  			<span aria-hidden="true">&times;</span></button>
                			<h4 class="modal-title">Consulta de Tercero</h4>
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
          <script>fmostrartabla()</script>
            </form>
          </div>
   </div>
