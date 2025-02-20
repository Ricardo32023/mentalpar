
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Identificacion</th>
                                  <th>Nombre 1</th>
                                  <th>Nombre 2</th>
                                  <th>Apellido 1</th>
								  <th>Apellido 2</th>
                                  <th>Fecha Nacimiento</th>
                                  <th>Direccion</th>
                                  <th>Telefono</th>
                                  <th>Email</th>	
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                include"../lib/conexion.php";
                                $consulcargo=mysql_query("SELECT per_cod,per_documento,per_primernombre,per_segundonombre,per_primerapellido,per_segundoapellido,per_direccion,per_telefono,per_email,
								per_fechanacimiento,per_estado FROM cargo");
                                while($cocargo=mysql_fetch_array($consulcargo)){
                                    if($cocargo['per_estado']=='A'){
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
											if($cocargo['per_estado']=='A'){
											echo"
												<button type='button' onclick='feditar($cocargo[per_cod])'><i class='fa fa-edit'></i> </button>
												<button type='button' onclick='feliminar($cocargo[per_cod])'><i class='fa fa-trash'></i> </button>";
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
          
