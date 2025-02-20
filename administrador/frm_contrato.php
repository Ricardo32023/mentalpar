<?php
session_start();
include"../lib/conexion.php";
$_SESSION['scoe_cod']="";
?>
<div class="col-md-6">
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contrato - Empresa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="frm_contrato" name="frm_contrato" method="post" action="">
            	<script>
            	function fguardar(){
					if(document.getElementById('txtcontrato').value==""){
						alert('Digite el No del Contrato');
						return false;	
					}
					$('#divmsn_contrato').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=1&cboempresa="+document.getElementById('cboempresa').value+"&txtcontrato="+document.getElementById('txtcontrato').value+"&txtfechainicio="+document.getElementById('txtfechainicio').value+"&txtfechafin="+document.getElementById('txtfechafin').value+"&txtvalorcontrato="+document.getElementById('txtvalorcontrato').value+"&txtencuesta="+document.getElementById('txtencuesta').value+"&txtpersona="+document.getElementById('txtpersona').value;
					$('#div_contenido_contrato').load("administrador/frm_contrato_detalle.php",datos);
				}
				function fmostrarconsulta(){
					var datos = "accion=2";
					$('#msn_consultacontrato').load('consultas/frm_consulta_contrato.php',datos)
				}
				function feliminar(id){
					var r = confirm("Desea Eliminar este Registro!");
					if (r == true) {
						$('#divmsn_contrato').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=3&txtid="+id;
						$('#div_contenido_contrato').load("administrador/frm_contrato_detalle.php",datos);
					}
				}
				function frecuperar(id){
					var r = confirm("Desea Activar este Registro!");
					if (r == true) {
						$('#divmsn_contrato').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=4&txtid="+id;
						$('#div_contenido_contrato').load("administrador/frm_contrato_detalle.php",datos);
					}
				}
				function feditar(id){
					$('#div_titulobutton').html("Editar");
					var datos = "accion=5&txtid="+id;
					$('#div_contenido_contrato').load("administrador/frm_contrato_detalle.php",datos);
				}
				function fmostrartabla(){
					var datos = "accion=2";
					$('#div_mostrar_tabla').load('consultas/frm_consulta_contrato.php',datos)
				}
				function fconsultar(){
					$('#divmsn_contrato').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=6&txtnit="+document.getElementById('txtnit').value;
					$('#div_contenido_contrato').load("administrador/frm_contrato_detalle.php",datos);
				}
            </script>
            <div id="divmsn_contrato"></div>
            <div id="div_contenido_contrato"></div>
              <div class="box-body">
              	<div class="row">
                 	<div class="col-md-2">    
                		<label>No Contrato</label>
                		<input type="text" class="form-control" id="txtcontrato" name="txtcontrato" placeholder="No Contrato" />
                    </div>
                    <div class="col-md-10">
                  		<label for="exampleInputEmail1">Empresa</label>
                  		<select class="form-control" id="cboempresa" name="cboempresa">
                        	<?php 
							$consulempresa=mysql_query("select emp_cod, emp_razon_social from empresa where emp_estado='A'");
								echo"<option value=0>Seleccione..</option>";
							while($coempresa=mysql_fetch_array($consulempresa)){
								echo"<option value=".$coempresa['emp_cod'].">".$coempresa['emp_razon_social']."</option>";
							}
							?>
                            
                  		</select>
                    </div>
                        
                </div>
              
                <div class="row">
                	<div class="col-md-3">
                    	<label>Fecha Inicio</label>
                    	<div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="txtfechainicio">
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<label>Fecha Fin</label>
                    	<div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="txtfechafin">
                        </div>
                    </div>
                    <div class="col-md-2">
                    	<label>Valor Contrato</label>
                    	<input type="text" class="form-control" id="txtvalorcontrato" placeholder="Digite el Valor" />
                    </div>
                    <div class="col-md-2">
                    	<label>No Encuesta</label>
                    	<input type="text" class="form-control" id="txtencuesta" placeholder="Cantidad" />
                    </div>
                    <div class="col-md-2">
                    	<label>No Personas</label>
                    	<input type="text" class="form-control" id="txtpersona" placeholder="Cantidad" />
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
               <!--MODAL CONSULTA DE CARGOS-->       
             <div class="modal fade" id="modal-default"  >
          		<div class="modal-dialog" style="width:1050px">
            		<div class="modal-content">
              			<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  			<span aria-hidden="true">&times;</span></button>
                			<h4 class="modal-title">Consulta de Empresas</h4>
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
    