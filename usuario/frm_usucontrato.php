<?php
@session_start();
include"../lib/conexion.php";
$_SESSION['scoc_cod']="";
?>
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Empresa - Contrato</h3>
        </div>
        <!-- /.box-header -->
        
        <script>
            function fconsultarcontrato(){
                    var datos = "accion=1&cboempresa="+document.getElementById('cboempresa').value;
                    $('#cbocontrato').load('usuario/frm_usucontrato_detalle.php',datos)
            }

            function fmostrartabla(){
                    $('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
                    var datos = "accion=2&cbocontrato="+document.getElementById('cbocontrato').value;
                    $('#div_mostrar_tabla').load('usuario/frm_usucontrato_detalle.php',datos)
            }
            function fconsultar(){
                    $('#divmsn_contratocargo').html("<i class='fa fa-refresh fa-spin fa-3x stat-elem'></i>Procesando..");
                    var datos = "accion=6&txtcontrato="+document.getElementById('txtcontrato').value;
                    $('#div_contenido_contratocargo').load("administrador/frm_contrato_cargo_detalle.php",datos);
            }
            function llamar_cuestionario(id){
                    alert(id);
            }
        </script>
        <!-- form start -->
        <form role="form" id="frm_contrato" name="frm_contrato" method="post" action="">
            <div id="divmsn_contratocargo"></div>
        <div id="div_contenido_contratocargo"></div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <label>Empresa</label>
                    <select class="form-control" id="cboempresa" name="cboempresa" onchange="fconsultarcontrato()" >
                        <option value="0">Seleccione..</option>
                        <?php
                            $consulmpresa=mysql_query("SELECT emp_cod, emp_razon_social FROM empresa WHERE emp_estado='A'");
                            while($coempresa=mysql_fetch_array($consulmpresa)){
                                echo"<option value=".$coempresa['emp_cod'].">".$coempresa['emp_razon_social']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Contrato</label>
                    <select class="form-control" id="cbocontrato" name="cbocontrato" onchange="fmostrartabla()" >
                    </select>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <div id="div_mostrar_tabla"></div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">

        </div><!--MODAL CONSULTA DE CARGOS-->
        </form>
        

    </div>
</div>