@extends('index')

@section('title')
  Perfil
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
                    <h2>Información del Usuario</h2>
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
                          @foreach($todousuarios as $todo)
                          <img src="{{asset('assets/images/avatars')}}/{{$todo->imagen}}" alt="{{$todo->imagen}}" class="img-responsive avatar-view">
                          <!-- <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar"> -->
                           
                        </div>
                      </div>
                      <br>
                      <div class="profile_title">
                        <div class="col-md-12">
                          <h2>{{$todo->PrimerNombre}} {{$todo->PrimerApellido}}</h2>
                        </div>
                        
                      </div>
                      {{-- <h3 class="alert alert-success"><i class="fa fa-caret-right"></i>{{$todo->PrimerNombre}} {{$todo->PrimerApellido}}</h3> --}}
                      <hr>
                      <ul class="list-unstyled user_data">
                        
                        <li>
                          <i class="fa fa-user user-profile-icon"></i> Usuario. {{$todo->username}}
                        </li>
                        <li>
                          <i class="fa fa-check-circle-o user-profile-icon"></i> Tipo. {{$todo->roles->Descripcion}}
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Ciudad. {{$todo->ciudades->descripcion}}, {{$todo->Pais}}
                        </li>
                      </ul>

                      <hr/>
                      <button type="button" class="btn btn-primary">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Editar Información
                      </button>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     <!-- cliente -->
                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Nombre </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="nombres">{{$todo->PrimerNombre}} {{$todo->PrimerApellido}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Identifiación </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="apellidos">{{$todo->identificacion}}</span>
                                  </div>
                                </div>
                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Cargo </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="identificacion">{{$todo->cargos->descripcion}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Teléfono </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="telefono">{{$todo->telefono}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Celular </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="celular">{{$todo->celular}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Dirección </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="direccion">{{$todo->direccion}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> E-mail </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="fecha">{{$todo->email}}</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Estado </div>

                                  <div class="profile-info-value">
                                    <span class="editable" id="estado">{{$todo->estados->Descripcion}}</span>
                                  </div>
                                </div>

                                
                              </div>
                            <!-- información-->
@endforeach
                    {{-- inician o tab --}}
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividad Reciente</a>
                          </li>
                          @if(Auth::User()->id_usuario == $todo->id_usuario)
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Cambiar Contraseña</a>
                          @endif
                          </li>
                        </ul>
                        {{-- agregamos el primer tab --}}
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      <!-- auditoria -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Usuario</th>
                                  <th>Acción</th>
                                  <th>Fecha y Hora</th>
                                  <th>Modulo</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($todohistotial as $todohistotial)
                                <tr>
                               
                                  <td>
                                    <img src="{{asset('assets/images/avatars')}}/{{$todo->imagen}}" alt="{{$todo->imagen}}" class="avatar" alt="Avatar">
                                  </td>
                                  <td>
                                    {{$todo->PrimerNombre}} {{$todo->PrimerApellido}}
                                  </td>
                                  <td>{{$todohistotial->accion}}</td>
                                  <td>{{$todohistotial->fecha_hora}}</td>
                                  <td>{{$todohistotial->tabla}}</td>
                                  
                                </tr>
                               @endforeach
                               
                              </tbody>
                            </table>
                            <!-- auditoria-->
                            </div> 
                            {{-- fin contenido del primer tab --}}

                            {{-- contenido tab 2 --}}
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                              
                              <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left" method="post" action="{{url('ChangePass')}}/{{Auth::User()->id_usuario}}"  name="formulario" novalidate>

                                  <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Contraseña</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="**************">
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirme Contraseña</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" placeholder="**************">
                                    </div>
                                  </div>

                                  <div class="ln_solid"></div>
                                  <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                      <button type="submit" class="btn btn-success">
                                      <i class="fa fa-refresh" aria-hidden="true"></i> Cambiar Contraseña</button>
                                      
                                    </div>
                                  </div>

                                </form>
                              </div>

                            </div>
                          </div> {{-- fin contenido tab 2 --}}
                    </div> {{-- fin del tab --}}
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
	

