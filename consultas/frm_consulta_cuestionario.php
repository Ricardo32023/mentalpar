
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Cuestionario</th>
                                  <th>Descripcion</th>
                                  <th>Estado</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                include"../lib/conexion.php";
                                $consulcargo=mysql_query("SELECT cue_cod,cue_nombre,cue_descripcion,cue_estado FROM cuestionario");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['cue_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';	
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                        <td>$cocargo[cue_cod]</td>
                                        <td>$cocargo[cue_nombre]</td>
										<td>$cocargo[cue_descripcion]</td>
                                        <td>".$estado."</td>
                                        <td>";
											if($cocargo['cue_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[cue_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[cue_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[cue_cod])'><i class='fa fa-check-circle'></i> </button>
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
          
