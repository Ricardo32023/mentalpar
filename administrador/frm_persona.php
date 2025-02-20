<?php
session_start();
$_SESSION['scar_cod']="";
include"../lib/conexion.php";
?>
<div class="col-md-8">
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Persona</h3>
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
			var datos = "accion=1&txtdocumento="+document.getElementById('txtdocumento').value
                                +"&txtprimernombre="+document.getElementById('txtprimernombre').value
                                +"&txtsegundonombre="+document.getElementById('txtsegundonombre').value
                                +"&txtprimerapellido="+document.getElementById('txtprimerapellido').value
                                +"&txtsegundoapellido="+document.getElementById('txtsegundoapellido').value
                                +"&txtfechanacimiento="+document.getElementById('txtfechanacimiento').value
                                +"&txtdireccion="+document.getElementById('txtdireccion').value
                                +"&txttelefono="+document.getElementById('txttelefono').value
                                +"&txtemail="+document.getElementById('txtemail').value
                                +"&cbomunicipio="+document.getElementById('cbomunicipio').value
                                +"&cbocontrato_cargo="+document.getElementById('cbocontrato_cargo').value;

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
		function llenardepartamento(){
			alert('ddd');
		}
		function buscar_departamento(){

			//alert(document.getElementById('cbopais').value);
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=9"+"&cbopais="+document.getElementById('cbopais').value;
			$('#cbodepartamento').load('administrador/frm_persona_detalle.php',datos)

		}
		function buscar_municipio(){
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=10"+"&cbodepartamento="+document.getElementById('cbodepartamento').value;
			$('#cbomunicipio').load('administrador/frm_persona_detalle.php',datos)
		}
		function buscar_tercero(){
			$('#divmsn').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
			var datos = "accion=11"+"&txtdocumento="+document.getElementById('txtdocumento').value;

			$('#divmsn').load('administrador/frm_persona_detalle.php',datos)
		}
	</script>
    <div id="divmsn"></div>
	<div id="div_contenido_cargo"></div>
              <div class="box-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="exampleInputEmail1">Documento: </label>                                
                        </div>
                        <div class="col-md-6">
                            <input type="text" onkeyup="buscar_tercero()" class="form-control" id="txtdocumento" name="txtdocumento" placeholder="Digite la identificacion">
                        </div>
                    </div> 
                    <div class="row">                            
                        <div class="col-md-3">
                                    <label>Primer Nombre</label>
                                    <input type="text" id="txtprimernombre" name="txtprimernombre" class="form-control" placeholder="" />
                        </div>
                         <div class="col-md-3">
                                    <label>Segundo Nombre</label>
                                    <input type="text" class="form-control" id="txtsegundonombre" name="txtsegundonombre" placeholder="" />
                        </div>
                         <div class="col-md-3">
                                    <label>Primer Apellido</label>
                                    <input type="text" class="form-control" id="txtprimerapellido" name="txtprimerapellido" placeholder="" />
                        </div>
                         <div class="col-md-3">
                                    <label>Segundo Apellido</label>
                                    <input type="text" class="form-control"  id="txtsegundoapellido" name="txtsegundoapellido" placeholder="" />
                        </div>
                    </div>


                    <div class="row">
                	<div class="col-md-3">
                            <label>Fecha Nacimiento</label>
                            <input type="text" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento" />
                        </div>

                        <div class="col-md-9">
                            <label>Direcci&oacute;n</label>
                            <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" />
                        </div>                    
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Tel&eacute;fono</label>
                            <input type="text" class="form-control" id="txttelefono" name="txttelefono" placeholder="Digite No Telefono" />
                        </div>
                        <div class="col-md-9">
                            <label>E-mail</label>
                            <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Digite Email" />
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                            <label>Pais</label>
                                            <select id="cbopais" name="cbopais"  class="form-control" onchange="buscar_departamento()">
                                                    <option value="0">Seleccione..</option>
                                                    <?php
                                                    $consulpais=mysql_query("select pas_cod, pas_nombre from pais where pas_estado='A'");
                                                    while($copais=mysql_fetch_array($consulpais)){
                                                            echo"<option value='$copais[pas_cod]'>$copais[pas_nombre]</option>";
                                                    }
                                                     ?>
                                            </select>
                            </div>
                            <div class="col-md-4">
                                            <label>Departamento</label>
                                            <select id="cbodepartamento" name="cbodepartamento"  class="form-control" onchange="buscar_municipio()">
                                                    <?php
                                                    $consuldpto=mysql_query("SELECT dep_cod,dep_nombre FROM departamento WHERE dep_estado='A'");
                                                    while($codpto=mysql_fetch_array($consuldpto)){
                                                            echo"<option value='$codpto[dep_cod]'>$codpto[dep_nombre]</option>";
                                                    }
                                                     ?>
                                            </select>
                            </div>

                                    <div class="col-md-4">
                                            <label>Municipio</label>
                                            <select id="cbomunicipio" name="cbomunicipio"  class="form-control">
                                                    <?php
                                                    $consulmunicipio=mysql_query("SELECT ciu_cod,ciu_nombre FROM ciudad WHERE ciu_estado='A'");
                                                    while($comunicipio=mysql_fetch_array($consulmunicipio)){
                                                            echo"<option value='$comunicipio[ciu_cod]'>$comunicipio[ciu_nombre]</option>";
                                                    }

                                                     ?>
                                            </select>
                                    </div>

                    </div>
                  <div class="row">
                    <div class="col-md-8">
                        <label>Cargo</label>
                        <select class="form-control" id="cbocontrato_cargo" name="cbocontrato_cargo">
                          <option value="0">Seleccione..</option>
                          <?php
                                $sqlr1 = mysql_query("SELECT car_cod,car_nombre FROM cargo WHERE car_estado='A' ORDER BY car_nombre ASC ");
                                while($rowr1 = mysql_fetch_array($sqlr1)){
                                    echo"<option value=".$rowr1['car_cod'].">".$rowr1['car_nombre']."</option>";
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
