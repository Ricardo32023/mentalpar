
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Cuestionario</th>
                                  <th>Bloque</th>
                                  <th>Orden</th>
                                  <th>Pregunta</th>
                                  <th>Estado</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include"../lib/conexion.php";
                                $consulcargo=mysql_query("SELECT p.cup_cod, p.cup_pregunta,p.cup_orden,p.cup_estado,b.cub_cod,b.cub_bloque,c.cue_cod,c.cue_nombre FROM cuestionario_pregunta p INNER JOIN cuestionario_bloque b ON p.cub_cod=b.cub_cod INNER JOIN cuestionario c ON c.cue_cod=b.cue_cod");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['cup_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                        <td>$cocargo[cue_nombre]</td>
                                        <td>$cocargo[cub_bloque]</td>
										<td>$cocargo[cup_orden]</td>
										<td>$cocargo[cup_pregunta]</td>
                                        <td>".$estado."</td>
                                        <td>";
											if($cocargo['cup_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[cup_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[cup_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[cup_cod])'><i class='fa fa-check-circle'></i> </button>
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
