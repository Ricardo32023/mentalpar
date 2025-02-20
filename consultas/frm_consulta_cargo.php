
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Nombre del Cargo</th>
                                  <th>Estado</th>
                                  <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                include"../lib/conexion.php";
                                $consulcargo=mysql_query("SELECT car_cod,car_nombre,car_estado FROM cargo");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['car_estado']=='A'){
                                        $estado='<span class="label label-success">Activo</span>';	
                                    }
                                    else{
                                        $estado='<span class="label label-danger">Desactivado</span>';
                                    }
                                    echo"
                                    <tr>
                                        <td>$cocargo[car_cod]</td>
                                        <td>$cocargo[car_nombre]</td>
                                        <td>".$estado."</td>
                                        <td>";
											if($cocargo['car_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[car_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[car_cod])'><i class='fa fa-trash'></i> </button>";
											}
											else{
											echo"
												<button type='button' onclick='frecuperar($cocargo[car_cod])'><i class='fa fa-check-circle'></i> </button>
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
          
