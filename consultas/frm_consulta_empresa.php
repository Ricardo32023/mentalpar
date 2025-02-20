
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Nit</th>
                                  <th>Dv</th>
                                  <th>Razon Social</th>
                                  <th>Telefono</th>
                                  <th>Celular</th>
                                  <th>Email</th>
                                  <th>Contacto</th>
                                  <th>Tel. Contacto</th>
                                  <th>Estado</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                include"../lib/conexion.php";
								
                                $consulcargo=mysql_query("SELECT emp_cod,emp_nit,emp_digito,emp_razon_social,emp_telefono,emp_celular,emp_email,emp_contacto,emp_telefonocontacto, emp_estado FROM empresa");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['emp_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';	
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                 		<td>$cocargo[emp_nit]</td>
                                        <td>$cocargo[emp_digito]</td>
										<td>$cocargo[emp_razon_social]</td>
										<td>$cocargo[emp_telefono]</td>
										<td>$cocargo[emp_celular]</td>
										<td>$cocargo[emp_email]</td>
										<td>$cocargo[emp_contacto]</td>
										<td>$cocargo[emp_telefonocontacto]</td>
											  
                                        <td>".$estado."</td>
                                        <td>";
											if($cocargo['emp_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[emp_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[emp_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[emp_cod])'><i class='fa fa-check-circle'></i> </button>
												";	
											}
									echo"		
										</td>
                                    </tr>
                                    ";	
                                }
                                ?>
                             
                                
                                </tbody>
                               
                              </table>
            </div>
            <!-- /.box-body -->
          </div>
          
