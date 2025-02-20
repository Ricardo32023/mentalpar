
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No Contrato</th>
                                  <th>Empresa</th>
                                  <th>Fecha Inicio</th>
                                  <th>Fecha Fin</th>
                                  <th>Valor</th>
                                  <th>No Encu</th>
                                  <th>No Perso</th>
                                  <th>Estado</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                include"../lib/conexion.php";
								
                                $consulcargo=mysql_query("SELECT coe_cod,c.emp_cod,coe_numerocontrato,coe_fechainicio,coe_fechafin,coe_valorcontrato,coe_cntencuesta,coe_cntpersona,coe_estado,emp_razon_social 
								FROM contrato_empresa c INNER JOIN empresa e ON c.emp_cod=e.emp_cod ");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['coe_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';	
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                 		<td>$cocargo[coe_numerocontrato]</td>
                                        <td>$cocargo[emp_razon_social]</td>
										<td>$cocargo[coe_fechainicio]</td>
										<td>$cocargo[coe_fechafin]</td>
										<td>$cocargo[coe_valorcontrato]</td>
										<td>$cocargo[coe_cntencuesta]</td>
										<td>$cocargo[coe_cntpersona]</td>
										<td>".$estado."</td>
                                        <td>";
											if($cocargo['coe_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[coe_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[coe_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[coe_cod])'><i class='fa fa-check-circle'></i> </button>
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
          
