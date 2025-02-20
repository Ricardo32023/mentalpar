<?php
session_start();
$_SESSION['semp_cod']="";
?>
<div class="col-md-6">
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Empresa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="frm_empresa" name="frm_empresa" method="post" action="">
            	<script>
            	function fguardar(){
					if(document.getElementById('txtnit').value==""){
						alert('Digite el Cargo');
						return false;	
					}
					$('#divmsn_empresa').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=1&txtnit="+document.getElementById('txtnit').value+"&txtdv="+document.getElementById('txtdv').value+"&txtrazon="+document.getElementById('txtrazon').value+"&txttelefono="+document.getElementById('txttelefono').value+"&txtcelular="+document.getElementById('txtcelular').value+"&txtemail="+document.getElementById('txtemail').value+"&txtcontacto="+document.getElementById('txtcontacto').value+"&txttelefonocon="+document.getElementById('txttelefonocon').value;
					$('#div_contenido_empresa').load("administrador/frm_empresa_detalle.php",datos);
				}
				function fmostrarconsulta(){
					var datos = "accion=2";
					$('#msn_consultacargo').load('consultas/frm_consulta_empresa.php',datos)
				}
				function feliminar(id){
					var r = confirm("Desea Eliminar este Registro!");
					if (r == true) {
						$('#divmsn_empresa').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=3&txtid="+id;
						$('#div_contenido_empresa').load("administrador/frm_empresa_detalle.php",datos);
					}
				}
				function frecuperar(id){
					var r = confirm("Desea Activar este Registro!");
					if (r == true) {
						$('#divmsn_empresa').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
						var datos = "accion=4&txtid="+id;
						$('#div_contenido_empresa').load("administrador/frm_empresa_detalle.php",datos);
					}
				}
				function feditar(id){
					$('#div_titulobutton').html("Editar");
					var datos = "accion=5&txtid="+id;
					$('#div_contenido_empresa').load("administrador/frm_empresa_detalle.php",datos);
				}
				function fmostrartabla(){
					var datos = "accion=2";
					$('#div_mostrar_tabla').load('consultas/frm_consulta_empresa.php',datos)
				}
				function fconsultar(){
					$('#divmsn_empresa').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
					var datos = "accion=6&txtnit="+document.getElementById('txtnit').value;
					$('#div_contenido_empresa').load("administrador/frm_empresa_detalle.php",datos);
				}
            </script>
            <div id="divmsn_empresa"></div>
            <div id="div_contenido_empresa"></div>
              <div class="box-body">
              	<div class="row">
                 	<div class="col-md-10">
                  		<label for="exampleInputEmail1">Nit</label>
                  		<input type="text" class="form-control" id="txtnit" name="txtnit" placeholder="Digite el Numero del Nit" onblur="fconsultar()">
                    </div>
                    <div class="col-md-2">    
                		<label>Dv</label>
                		<input type="text" class="form-control" id="txtdv" name="txtdv" placeholder="Digito" />
                    </div>    
                </div>
                
                <div class="row">
                	<div class="col-md-12">
                    <label>Razon Social</label>
                    <input type="text" class="form-control" id="txtrazon" name="txtrazon" placeholder="Digite la Razon Social" />
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-3">
                    	<label>Telefono</label>
                    	<input type="text" class="form-control" id="txttelefono" name="txttelefono" placeholder="Digite No Telefonico" />
                    </div>
                    <div class="col-md-3">
                    	<label>Celular</label>
                    	<input type="text" class="form-control" id="txtcelular" name="txtcelular" placeholder="Digite No Celular" />
                    </div>
                    <div class="col-md-6">
                    	<label>Email</label>
                    	<input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Digite Email" />
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-8">
                    	<label>Contacto</label>
                    	<input type="text" class="form-control" id="txtcontacto" name="txtcontacto" placeholder="Digite el nombre del contacto" />
                    </div>
                    <div class="col-md-4">
                    	<label>Telefono del Contacto</label>
                    	<input type="text" class="form-control" id="txttelefonocon" name="txttelefonocon" placeholder="Digite No Telefonico del Contacto" />
                    </div>
                </div>
	</div>
              <!-- /.box-body -->

              <div class="box-footer">
                <table width="100%">
                	<tr>
                    	<td>
                        	<button type="button" onclick="llamar_empresa()" class="btn btn-default">Nuevo</button>
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