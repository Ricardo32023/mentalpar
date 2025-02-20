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
          <p>Alexander Pierce</p>
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
        <li class="header">MENU DE NAVEGACION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Configuracion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="javascript:llamar_cargo()"><i class="fa fa-circle-o"></i> Cargos</a></li>
            <li class="active"><a href="javascript:llamar_empresa()"><i class="fa fa-circle-o"></i> Empresas</a></li>
            <li><a href="javascript:llamar_contrato()"><i class="fa fa-circle-o"></i> Contratos</a></li>
            <li><a href="javascript:llamar_contrato_cargo()"><i class="fa fa-circle-o"></i> Contratos Cargos</a></li>
            <li><a href="javascript:llamar_cuestionario()"><i class="fa fa-circle-o"></i> Cuestionarios</a></li>
            <li><a href="javascript:llamar_cuestionario_bloque()"><i class="fa fa-circle-o"></i> Cuestionario Bloque</a></li>
            <li><a href="javascript:llamar_cuestionario_pregunta()"><i class="fa fa-circle-o"></i> Cuestionario Pregunta</a></li>
            <li><a href="javascript:llamar_respuesta()"><i class="fa fa-circle-o"></i> Respuestas</a></li>
						<li><a href="javascript:llamar_respuestapregunta()"><i class="fa fa-circle-o"></i>Tipo Respuestas</a></li>
            <li><a href="javascript:llamar_cuestionario_calificacion()"><i class="fa fa-circle-o"></i> Cuestionario Calificacion</a></li>
            <li><a href="javascript:llamar_cuestionario_contrato()"><i class="fa fa-circle-o"></i> Cuestionario Contrato</a></li>
            <li><a href="javascript:llamar_persona()"><i class="fa fa-circle-o"></i> Persona</a></li>
            <li><a href="javascript:llamar_persona_contrato()"><i class="fa fa-circle-o"></i> Persona Contrato</a></li>
            <li><a href="javascript:llamar_vista()"><i class="fa fa-circle-o"></i> Vista Preliminar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Lista de Informes</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/informe_completoA.php"><i class="fa fa-circle-o"></i> Informe Completo Factores de Riesgo </a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Informe Completo Acrofobia</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Informe Completo de Claustrofobia </a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
