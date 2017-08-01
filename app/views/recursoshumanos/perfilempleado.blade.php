@extends('index')

@section('title')
  Detalle Empleado
@stop

@section('css_page')
  <link href="{{url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{url('build/css/custom.min.css')}}" rel="stylesheet">

    {{-- estilo de la tabla --}}
      <link rel="stylesheet" href="{{url('vendors/ace/ace.min.css')}}" /> 

@stop

@section('css_relative')
  
    
@stop

@section('contenido') 


<!-- page content -->
       
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información del Empleado</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-12">
                     @if(Session::has('message'))
                      <div id="alert">
                        <div class="col-sm-12 hr hr-18 hr-double dotted"></div>
                        <div class="col-sm-4 col-xs-12 col-sm-offset-4 alert alert-{{Session::get('class')}}">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{Session::get('message')}}
                          <br>
                        </div>
                      </div>
                    @endif
                  </div>
                  <div class="x_content">
                   
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          @foreach($todoempleado as $todo)
                          <img src="{{asset('assets/images/avatars')}}/{{$todo->imagen}}" alt="{{$todo->imagen}}" class="img-responsive avatar-view">
                          <!-- <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar"> -->
                           
                        </div>
                      </div>
                      <br>
                      <div class="profile_title">
                        <div class="col-md-12">
                          <h2>{{$todo->PrimerNombre}} {{$todo->SegundoNombre}} {{$todo->PrimerApellido}} {{$todo->SegundoApellido}}</h2>
                        </div>
                        
                      </div>
                      {{-- <h3 class="alert alert-success"><i class="fa fa-caret-right"></i>{{$todo->PrimerNombre}} {{$todo->PrimerApellido}}</h3> --}}
                      <hr>
                      <ul class="list-unstyled user_data">
                        
                        <li>
                          <i class="fa fa-credit-card user-profile-icon"></i><b> Tipo Identificacion:</b> {{$todo->tipodocumentos->descripcion}}
                        </li>
                        <li>
                          <i class="fa fa-user user-profile-icon"></i><b> Identificacion:</b> {{$todo->identificacion}}
                        </li>
                        <li>
                          <i class="fa fa-check-circle-o user-profile-icon"></i><b> Direccion:</b> {{$todo->Direccion}}
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><b> Ciudad:</b> {{$todo->ciudades->descripcion}}, {{$todo->paises->descripcion}}
                        </li>
                      </ul>

                      <hr/>
                      <a class="btn btn-primary" href="{{url('modificarEmpleado')}}/{{$todo->id_empleado}}"><i class="fa fa-pencil" aria-hidden="true"></i> Editar Información</a>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     <!-- cliente -->
                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Telefono </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="nombres">{{$todo->Telefono}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Fecha Nacimiento </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="apellidos">{{$todo->Fecha_Nacimiento}}</span>
                                  </div>
                                </div>
                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Fecha Ingreso </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="identificacion">{{$todo->Fecha_Ingreso}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Email </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="telefono">{{$todo->Email}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Barrio </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="celular">{{$todo->Barrio}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Sexo </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="direccion">{{$todo->Sexo}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b>  Arl </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="fecha">{{$todo->Arl}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Eps </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="estado">{{$todo->Eps}}</span>
                                  </div>
                                </div>
                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b>  Afp </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="fecha">{{$todo->Afp}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"><b> Estado </b></div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="estado">{{$todo->estados->descripcion}}</span>
                                  </div>
                                </div>

                                
                              </div>
                            <!-- información-->
@endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
              


@stop
@section('scripts_page')
<!-- jQuery -->
    <script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('vendors/nprogress/nprogress.js')}}"></script>
    <!-- morris.js -->
    <script src="{{url('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{url('vendors/morris.js/morris.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- validator -->
    <script src="{{url('vendors/validator/validator.js')}}"></script>
   
@stop
@section('scripts_relative')

  <script>
    // Tiempo del mensaje
      $('#alert').fadeOut(6000, function() {
        $(this).remove();
      });
    
  </script>

@stop
	

