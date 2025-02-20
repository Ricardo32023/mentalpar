<?php
session_start();
$_SESSION['scar_cod']="";
?>
<div class="col-md-6">
	<div class="box box-primary">
    	<div class="box-header with-border">
        	<h3 class="box-title">Ingresar Cargos</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" name="frm_cargo" method="post" action="">
        	<script>
            	function fguardar(){
					if(document.getElementById('txtcargo').value==""){
						alert('Digite el Cargo');
						return false;	
					}
					$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=1&txtcargo="+document.getElementById('txtcargo').value;
					$('#div_contenido_cargo').load("administrador/frm_cargo_detalle.php",datos);
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
                  <label for="exampleInputEmail1">Digite el Nombre del Cargo</label>
                  <input type="text" class="form-control" id="txtcargo" name="txtcargo" placeholder="Nombre del Cargo">
                </div>
                <div class="form-group"></div>
                <div id="divmsn"></div>
                <div id="div_contenido_cargo"></div>
			</div>
              <!-- /.box-body -->
              
			<div id="msn_consultacargo"></div>
            <div class="box-footer">
            	<table width="100%">
                	<tr>
                    	<td>
                        	<button type="button" onclick="llamar_cargo()" class="btn btn-default">Nuevo</button>
                        	<button type="button" onclick="fguardar()" class="btn btn-primary"><div id="div_titulobutton">Guardar</div></button>
                        </td>
                        <td align="right"><button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-success">Consultar</button></td>
                    </tr>
                </table>    
             </div>   
             <!--MODAL CONSULTA DE CARGOS-->       
             <div class="modal fade" id="modal-default"  >
          		<div class="modal-dialog" style="width:820px">
            		<div class="modal-content">
              			<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  			<span aria-hidden="true">&times;</span></button>
                			<h4 class="modal-title">Consulta de Cargos</h4>
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
</div>       