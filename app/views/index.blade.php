<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @yield('css_page')

    <!-- Bootstrap -->
    <link href="{{url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
  <link href="{{url('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
  <link href="{{url('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
  <link href="{{url('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
  <link href="{{url('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
  <link href="{{url('vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{url('build/css/custom.min.css')}}" rel="stylesheet">

    <!-- FullCalendar -->
    <link href="{{url('vendors/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/fullcalendar/dist/fullcalendar.print.css')}}" rel="stylesheet" media="print">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('principal')}}" class="site_title"><span>Contabilidad 360</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('assets/images/avatars')}}/{{Auth::User()->imagen}}" alt="{{Auth::User()->imagen}}" class="img-circle profile_img" width="60px" height="60px">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{Auth::User()->nombres}} {{Auth::User()->apellidos}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

<!-- contactos -->
                  <li><a><i class="fa fa-edit"></i> Contactos <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="{{url('FormProveedor')}}">Crear Proveedor</a></li>
                          <li><a href="{{url('ListarProveedor')}}">Visualizar Proveedores</a></li>
                          <li><a href="{{url('FormCliente')}}">Crear Cliente</a></li>
                          <li><a href="{{url('FormCliente')}}">Visualizar Cliente</a></li>
                      </ul>
                  </li>

<!-- fin contactos -->

<!-- Ventas -->
                   <li><a><i class="fa fa-table"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="tables.html">---------</a></li>
                        <li><a href="tables_dynamic.html">--------</a></li>
                      </ul>
                    </li>
<!-- fin Ventas -->

<!-- Contabilidad -->
                  <li><a><i class="fa fa-line-chart"></i> Contabilidad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('ListarFacturasCliente')}}">Facturas Cliente</a></li>
                      <li><a href="{{url('ListarFacturasCliente')}}">Facturas Proveedor</a></li>
                      <li><a href="{{url('ListarFacturasCliente')}}">Notas Contables</a></li>
                      <li><a href="{{url('ListarFacturasCliente')}}">Lineas de Comprobantes</a></li>
                    </ul>
                  </li>
<!-- Contabilidad -->

<!-- Recursos Humanos -->
                  <li><a><i class="fa fa-desktop"></i> Recursos Humanos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('ListarEmpleados')}}">Empleados</a></li>
                      <li><a href="media_gallery.html">------</a></li>
                      <li><a href="calendar.html">-------</a></li>
                    </ul>
                  </li>
<!-- Fin Recursos Humanos -->

<!-- Inventario -->
                  <li><a><i class="fa fa-laptop"></i>Inventario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">----------</a></li>
                      <li><a href="fixed_footer.html">----------</a></li>
                    </ul>
<!-- Fin Inventario -->  

<!-- Informes -->

                  <li><a><i class="fa fa-bar-chart-o"></i> Informes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">-------</a></li>
                      <li><a href="chartjs2.html">--------</a></li>
                    </ul>
                  </li>
<!-- Fin Informes -->


<!-- Usuarios -->
            {{-- @if(Auth::user()->roles->descripcion == "Administrador") --}}
                    <li><a><i class="fa fa-home"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{url('FormUsuario')}}">Crear Usuario</a></li>
                        <li><a href="{{url('CalendarUsuario')}}">Crear Evento</a></li>
                        <li><a href="{{url('ListarUsuario')}}">Visualizar Usuarios</a></li>
                      </ul>
                    </li>
            {{--   @endif --}}
<!-- Fin Usuarios -->  

<!-- Configuracion -->
                  <li><a><i class="fa fa-clone"></i>Configuracion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('DetalleCuentas')}}">Cuentas</a></li>
                      <li><a href="fixed_sidebar.html">----------</a></li>
                      <li><a href="fixed_footer.html">----------</a></li>
                    </ul>
                  </li>
<!-- Fin Configuracion -->          
                    
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesion" href="{{url('CerrarSesion')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="{{asset('assets/images/avatars')}}/{{Auth::User()->imagen}}" alt="{{Auth::User()->imagen}}">{{Auth::User()->PrimerNombre}} {{Auth::User()->PrimerApellido}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('VerPerfil')}}/{{Auth::User()->id_usuario}}"> Perfil</a></li>
                    <li><a href="{{url('CerrarSesion')}}"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesion</a></li>
                  </ul>
                </li>



                <!-- /Notificaciones -->

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-red">*</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets/images/avatars')}}/{{Auth::User()->imagen}}" alt="Profile Image" /></span>
                        <span>
                          <span>{{Auth::User()->PrimerNombre}} {{Auth::User()->PrimerApellido}}</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                 <!-- /Notificaciones -->


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <!-- /top tiles -->
            @yield('contenido')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Juan Carlos Escobar Lozada ® & Carlos Julio Ospina Malpud ®
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @yield('scripts_page')
    <!-- jQuery -->
    <script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{url('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{url('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{url('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{url('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{url('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{url('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{url('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{url('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{url('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{url('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{url('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{url('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{url('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{url('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{url('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

     <!-- Datatables -->
    <script src="{{url('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


    <script src="{{url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <!-- <script src="../../laravel-4.2.11/vendors/datatables.net-buttons/js/dataTables.buttons.js"></script> -->



    <!-- <script src="../../laravel-4.2.11/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script> -->
    <script src="{{url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>


    <script src="{{url('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{url('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{url('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{url('vendors/pdfmake/build/vfs_fonts.js')}}"></script>


    <script src="{{url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{url('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{url('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{url('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    


    <script src="{{url('vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{url('build/js/custom.min.js')}}"></script>

    
    @yield('scripts_relative')
	
  </body>
</html>
