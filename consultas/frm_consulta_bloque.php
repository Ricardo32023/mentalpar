
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Cuestionario</th>
                                  <th>Bloque</th>
                                  <th>Orden</th>
                                  <th>Descripcion</th>
                                  <th>Estado</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include"../lib/conexion.php";
                                $consulcargo=mysql_query("SELECT cub_cod,b.cue_cod,cub_bloque,cub_orden,cub_descripcion,cub_estado,c.cue_nombre FROM cuestionario_bloque b INNER JOIN cuestionario c ON b.cue_cod=c.cue_cod ");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['cub_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                        <td>$cocargo[cue_nombre]</td>
                                        <td>$cocargo[cub_bloque]</td>
										<td>$cocargo[cub_orden]</td>
										<td>$cocargo[cub_descripcion]</td>
                                        <td>".$estado."</td>
                                        <td>";
											if($cocargo['cub_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[cub_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[cub_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[cub_cod])'><i class='fa fa-check-circle'></i> </button>
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
