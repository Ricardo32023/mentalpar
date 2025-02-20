<?php
session_start();
$_SESSION['scar_cod']="";
include"../lib/conexion.php";
?>
<div class="col-md-8">
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos Personales</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
        <script>
		function fguardar(){
			if(document.getElementById('txtdocumento').value==""){
			alert('Digite la Pregunta');
			return false;
			}
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=1&txtdocumento="+document.getElementById('txtdocumento').value+"&txtprimernombre="+document.getElementById('txtprimernombre').value+"&txtsegundonombre="+document.getElementById('txtsegundonombre').value+"&txtprimerapellido="+document.getElementById('txtprimerapellido').value+"&txtsegundoapellido="+document.getElementById('txtsegundoapellido').value+"&txtfechanacimiento="+document.getElementById('txtfechanacimiento').value+"&txtdireccion="+document.getElementById('txtdireccion').value+"&txttelefono="+document.getElementById('txttelefono').value+"&txtemail="+document.getElementById('txtemail').value;

			$('#div_contenido_cargo').load("administrador/frm_persona_detalle.php",datos);
		}
		function fmostrarconsulta(){
			var datos = "accion=2";
			$('#msn_consultacargo').load('consultas/frm_consulta_persona.php',datos)
		}
		function feliminar(id){
			var r = confirm("Desea Eliminar este Registro!");
			if (r == true) {
				$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
				var datos = "accion=3&txtid="+id;
				$('#div_contenido_cargo').load("administrador/frm_persona_detalle.php",datos);
			}
		}
		function frecuperar(id){
			var r = confirm("Desea Activar este Registro!");
			if (r == true) {
				$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
				var datos = "accion=4&txtid="+id;
				$('#div_contenido_cargo').load("administrador/frm_persona_detalle.php",datos);
			}
		}
		function feditar(id){
			$('#div_titulobutton').html("Editar");
			var datos = "accion=5&txtid="+id;
			$('#div_contenido_cargo').load("administrador/frm_persona_detalle.php",datos);
		}
		function fmostrartabla(){
			var datos = "accion=2";
			$('#div_mostrar_tabla').load('consultas/frm_consulta_persona.php',datos)
		}
		function buscar_bloque(){
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=7"+"&cbocuestionario="+document.getElementById('cbocuestionario').value;
			$('#cbobloque').load('administrador/frm_persona_detalle.php',datos)
		}
	</script>
    <div id="divmsn"></div>
			<div id="div_contenido_cargo"></div>
              <div class="box-body">
              	<div class="row">
                 	<div class="col-md-2">
                  		<label for="exampleInputEmail1">Identificacion*</label>
                    </div>
                    <div class="col-md-4">    
                  		<input type="text" class="form-control" id="txtdocumento" name="txtdocumento" placeholder="Digite la identificacion">
                    </div>
                    <div class="col-md-2">
                  		<label for="exampleInputEmail1">Tipo Identificacion*</label>
                    </div>
                    <div class="col-md-4">    
                  		<input type="text" class="form-control" id="txtdocumento" name="txtdocumento" placeholder="Digite la identificacion">
                    </div>
                </div>
                <hr /> 
                <div class="row">   
                    <div class="col-md-2">
                  		<label>Primer Nombre*</label>
                    </div>
                    <div class="col-md-4">    
                   		<input type="text" id="txtprimernombre" name="txtprimernombre" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-2">    
                		<label>Segundo Nombre</label>
                    </div>   
                    <div class="col-md-4">
                		<input type="text" class="form-control" id="txtsegundonombre" name="txtsegundonombre" placeholder="" />
                    </div>   
                     
                </div>
                <hr />
                <div class="row">    
                  	<div class="col-md-2">    
                		<label>Primer Apellido*</label>
                  	</div>
                  	<div class="col-md-4">      
                		<input type="text" class="form-control" id="txtprimerapellido" name="txtprimerapellido" placeholder="" />
                  	</div>
                    <div class="col-md-2">    
                		<label>Segundo Apellido</label>
                    </div>
                    <div class="col-md-4">   
                		<input type="text" class="form-control"  id="txtsegundoapellido" name="txtsegundoapellido" placeholder="" />
                    </div> 
                </div>
               
                <hr />
                
                <div class="row">
                	<div class="col-md-2">
                    	<label>Fecha Nacimiento*</label>
                    </div>
                    <div class="col-md-2">
                    	<input type="text" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento" placeholder="Digite la Fecha Nacimiento" />
                    </div>
                    <div class="col-md-1">
                    	<label>Genero</label>
                    </div>
                    <div class="col-md-1">    
                    	<select name="cbogenero" id="cbogenero" class="form-control">
                        	<option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                    	<label>Lugar de Nacimiento</label>
                    </div>
                    <div class="col-md-4">    
                    	<select name="cbogenero" id="cbogenero" class="form-control">
                        	
                        </select>
                    </div>
                </div>
                <hr />
                <div class="row">
                	<div class="col-md-2">
                    	<label>Grupo Sanguineo*</label>
                    </div>
                    <div class="col-md-2">
                    	<input type="text" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento" placeholder="Digite la Fecha Nacimiento" />
                    </div>
                    <div class="col-md-1">
                    	<label>Est. Civil</label>
                    </div>
                    <div class="col-md-1">    
                    	<select name="cbogenero" id="cbogenero" class="form-control">
                        	
                        </select>
                    </div>
                    <div class="col-md-2">
                    	<label>Ocupacion</label>
                    </div>
                    <div class="col-md-4">    
                    	<select name="cbogenero" id="cbogenero" class="form-control">
                        	
                        </select>
                    </div>
                </div>
                <hr />
              </div>
               <div class="box-header with-border">
              		<h3 class="box-title">Ubicacion</h3>
            	</div>
              <div class="box-body">
              
               
                <div class="row">
                	<div class="col-md-1">
                    	<label>Barrio*</label>
                    </div>
                    <div class="col-md-2">
                    	<input type="text" class="form-control" id="txtbarrio" name="txtbarrio" placeholder="Digite Barrio" />
                    </div>
                    <div class="col-md-1">
                    	<label>Municipio</label>
                    </div>
                    <div class="col-md-3">
                    	<input type="text" class="form-control" id="txtmunicipio" name="txtmunicipio" placeholder="Digite Municipio" />
                    </div>
                    <div class="col-md-1">
                    	<label>Departamento</label>
                    </div>
                    <div class="col-md-4">
                    	<input type="text" class="form-control" id="txtdepartamento" name="txtdepartamento" placeholder="Digite Dpto" />
                    </div>
                </div>
                <hr />
                <div class="row">    
                	<div class="col-md-1">
                    	<label>Estrato*</label>
                    </div>
                    <div class="col-md-2">    
                    	<select name="cbogenero" id="cbogenero" class="form-control">
                        	
                        </select>
                    </div> 
                    <div class="col-md-1">
                    	<label>Direccion*</label>
                    </div>
                    <div class="col-md-3">    
                    	<input type="text" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="Digite la direccion" />
                    </div>
                    <div class="col-md-1">
                    	<label>Zona*</label>
                    </div>
                    <div class="col-md-4">    
                    	<select name="cbogenero" id="cbogenero" class="form-control">
                        	
                        </select>
                    </div>
                </div>
                <hr />
                <div class="row">    
                    
                    <div class="col-md-1">
                    	<label>Telefono</label>
                    </div>
                    <div class="col-md-2">    
                    	<input type="text" class="form-control" id="txttelefono" name="txttelefono" placeholder="Digite No Telefono" />
                    </div>
                    <div class="col-md-1">
                    	<label>Movil</label>
                    </div>
                    <div class="col-md-3">    
                    	<input type="text" class="form-control" id="txtmovil" name="txtmovil" placeholder="Digite No Movil" />
                    </div>
                    <div class="col-md-1">
                    	<label>Email</label>
                    </div>
                    <div class="col-md-4">    
                    	<input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Digite Email" />
                    </div>
                </div>
                <hr />
           </div>
               <div class="box-header with-border">
              		<h3 class="box-title">Datos de Afiliacion</h3>
            	</div>
           <div class="box-body">
               <div class="row">
                 	<div class="col-md-2">
                  		<label for="exampleInputEmail1">Condicion Dispacidad*</label>
                    </div>
                    <div class="col-md-4">
                      <select name="cbogenero2" id="cbogenero2" class="form-control">
                      </select>
                    </div>
                    <div class="col-md-2">
                  		<label for="exampleInputEmail1">Grupo Etnico*</label>
                    </div>
                    <div class="col-md-4">
                      <select name="cbogenero3" id="cbogenero3" class="form-control">
                      </select>
                    </div>
             </div>
                <hr /> 
                <div class="row">   
                    <div class="col-md-2">
                  		<label>Nivel Educativo*</label>
                    </div>
                    <div class="col-md-10">
                      <select name="cbogenero4" id="cbogenero4" class="form-control">
                      </select>
                    </div>
                   
                     
                </div>
                <hr />
                <div class="row">    
                  	<div class="col-md-2">    
                		<label>Aseguradora(ARS)*</label>
                  	</div>
                  	<div class="col-md-4">
                  	  <select name="cbogenero5" id="cbogenero5" class="form-control">
               	      </select>
                  	</div>
                    <div class="col-md-2">    
                		<label>Tipo Vinculacion</label>
                    </div>
                    <div class="col-md-4">
                      <select name="cbogenero6" id="cbogenero6" class="form-control">
                      </select>
                    </div> 
                </div>
              
              
                
			</div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <table width="100%">
                	<tr>
                    	<td>
                        	<button type="button" onclick="llamar_persona()" class="btn btn-default">Nuevo</button>
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
        	</div>
            <!--FIN MODAL CONSULTA DE CARGOS-->   
            </form>
          </div>
   </div>       