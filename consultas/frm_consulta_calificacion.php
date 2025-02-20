
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Cuestionario</th>
                                  <th>Bloque</th>
                                  <th>Pregunta</th>
                                  <th>Calificacion</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                include"../lib/conexion.php";
                                $consulcargo=mysql_query("SELECT cuc_cod,cuc_estado,cub_bloque,cup_pregunta,res_nombre,c.cue_nombre FROM cuestinario_calificacion cc INNER JOIN respuesta r ON cc.res_cod=r.res_cod
								INNER JOIN cuestionario_pregunta cp ON cc.cup_cod=cp.cup_cod INNER JOIN cuestionario_bloque cb ON cb.cub_cod=cp.cub_cod INNER JOIN cuestionario c ON c.cue_cod=cb.cue_cod");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['cuc_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';	
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                        <td>$cocargo[cuc_cod]</td>
                                        <td>$cocargo[cue_nombre]</td>
										<td>$cocargo[cub_bloque]</td>
										<td>$cocargo[cup_pregunta]</td>
										<td>$cocargo[res_nombre]</td>
                                        <td>".$estado."</td>
                                        <td>";
											if($cocargo['cuc_cod']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[cuc_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[cuc_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[cuc_cod])'><i class='fa fa-check-circle'></i> </button>
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
          
