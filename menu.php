<script>
function llamar_cargo(){
	$('#main-contenido').load("administrador/frm_cargo.php");
}
function llamar_empresa(){
	$('#main-contenido').load("administrador/frm_empresa.php");
}
function llamar_contrato(){
	$('#main-contenido').load("administrador/frm_contrato.php");
}
function llamar_infogeneral(){
        $('#main-contenido').load("administrador/frm_informe_general.php");
}

function llamar_contrato_cargo(){
	$('#main-contenido').load("administrador/frm_contrato_cargo.php");
}
function llamar_cuestionario(){
	$('#main-contenido').load("administrador/frm_cuestionario.php");
}
function llamar_cuestionario_bloque(){
	$('#main-contenido').load("administrador/frm_cuestionario_bloque.php");
}
function llamar_cuestionario_pregunta(){
	$('#main-contenido').load("administrador/frm_cuestionario_pregunta.php");
}
function llamar_respuesta(){
	$('#main-contenido').load("administrador/frm_respuesta.php");
}
function llamar_cuestionario_calificacion(){
	$('#main-contenido').load("administrador/frm_cuestionario_calificacion.php");
}
function llamar_cuestionario_contrato(){
	$('#main-contenido').load("administrador/frm_cuestionario_contrato.php");
}
function llamar_persona(){
	$('#main-contenido').load("administrador/frm_persona.php");
}
function llamar_vista(){
	$('#main-contenido').load("administrador/frm_vista.php");
}

function llamar_persona_contrato(){
	$('#main-contenido').load("administrador/frm_contrato_persona.php");
}
function llamar_paciente(){
	$('#main-contenido').load("administrador/frm_paciente.php");
}
function llamar_respuestapregunta(){
	$('#main-contenido').load("administrador/frm_respuestapregunta.php");
}
function llamar_usuariocontrato(){
		$('#main-contenido').load("usuario/frm_usucontrato.php");
}
function llamar_paquetes(){
		$('#main-contenido').load("administrador/frm_paquetes.php");
}

</script>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ricardo Paredes</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Panel Principal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="javascript:llamar_empresa()"><i class="fa fa-circle-o"></i> Crear Empresa</a></li>
            <li><a href="javascript:llamar_contrato()"><i class="fa fa-circle-o"></i> Asignar Contrato</a></li>
            <!-- <li><a href="javascript:llamar_contrato_cargo()"><i class="fa fa-circle-o"></i> Contratos Cargos</a></li> -->   
            <li><a href="javascript:llamar_cargo()"><i class="fa fa-circle-o"></i>Ingresar Cargos</a></li>
            <li><a href="javascript:llamar_persona()"><i class="fa fa-circle-o"></i> Ingresar Personal</a></li>
            <li><a href="javascript:llamar_persona_contrato()"><i class="fa fa-circle-o"></i> Asignar Persona Al Contrato</a></li>
            <li><a href="javascript:llamar_vista()"><i class="fa fa-circle-o"></i> Vista Preliminar</a></li>
          </ul>
        </li>

        <li class="active treeview">
                <a href="#">
              <i class="fa fa-dashboard"></i> <span>Crear Cuestionario</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:llamar_cuestionario()"><i class="fa fa-circle-o"></i> Crear Cuestionarios</a></li>
                <li><a href="javascript:llamar_cuestionario_bloque()"><i class="fa fa-circle-o"></i> Crear Bloques</a></li>
                <li><a href="javascript:llamar_cuestionario_pregunta()"><i class="fa fa-circle-o"></i> Crear Preguntas</a></li>
                <li><a href="javascript:llamar_respuesta()"><i class="fa fa-circle-o"></i>Crear Respuestas</a></li>
						    <li><a href="javascript:llamar_respuestapregunta()"><i class="fa fa-circle-o"></i>Crear Tipo Respuestas</a></li>
                <!--<li><a href="javascript:llamar_cuestionario_calificacion()"><i class="fa fa-circle-o"></i> Cuestionario Calificacion</a></li>
                <li><a href="javascript:llamar_cuestionario_contrato()"><i class="fa fa-circle-o"></i> Cuestionario Contrato</a></li>
						    <li><a href="javascript:llamar_paquetes()"><i class="fa fa-circle-o"></i> Crear Paquestes</a></li>-->
              </ul>
          </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Reportes</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">4</span>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="javascript:llamar_usuariocontrato()"><i class="fa fa-circle-o"></i> Contratos</a></li>
                <li><a href="javascript:llamar_infogeneral()"><i class="fa fa-bar-chart"></i> Informe General</a></li>
            </ul>            
        </li>
		   <!--<li class="header">LABELS</li>-->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
