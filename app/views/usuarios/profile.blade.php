@extends('index')

@section('title')
  Perfil
@stop

@section('css_page')
  <link href="{{url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
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
                    <h2>Usuario <small>Actividad Reciente</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
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
                      <h3>{{$todo->PrimerNombre}} {{$todo->PrimerApellido}}</h3>
                      <hr>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-credit-card user-profile-icon"></i> {{$todo->identificacion}}
                        </li>

                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{$todo->Ciudad}}, {{$todo->Pais}}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{$todo->cargos->descripcion}}
                        </li>

                        <li>
                          <i class="fa fa-envelope-square user-profile-icon"></i> {{$todo->email}}
                          
                        </li>

                        <hr>

                        <li>
                          <i class="fa fa-check-circle-o user-profile-icon"></i> {{$todo->roles->Descripcion}}
                         
                        </li>
                        <li>
                          <i class="fa fa-unlock user-profile-icon"></i> {{$todo->estados->Descripcion}}
                        </li>
                        <li>
                          <i class="fa fa-user user-profile-icon"></i> {{$todo->username}}
                          
                        </li>
                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> {{$todo->telefono}}
                          
                        </li>
                        <li>
                          <i class="fa fa-phone-square user-profile-icon"></i> {{$todo->celular}}
                        </li>
                        <li>
                          <i class="fa fa-map-marker user-profile-icon"></i> {{$todo->direccion}}
                        </li>
                        
                      </ul>
@endforeach
                      
                      <br />
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">


                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividad Reciente</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Cambiar Contraseña</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                            @foreach($todohistotial as $todohistotial)
                              <li>
                                <img src="{{asset('assets/images/avatars')}}/{{Auth::User()->imagen}}" alt="{{Auth::User()->imagen}}" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">{{$todohistotial->tabla}}</h3>
                                  <p class="month">Modulo</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">{{Auth::User()->PrimerNombre}} {{Auth::User()->PrimerApellido}}</h4>
                                  <blockquote class="message">{{$todohistotial->accion}}</blockquote>
                                  <br/>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a>{{$todohistotial->fecha_hora}}</a>
                                  </p>
                                </div>
                              </li>
                            @endforeach
                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                              <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Cambiar Contraseña</a>

                          </div>

                        </div>
                      </div>
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
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../../vendors/raphael/raphael.min.js"></script>
    <script src="../../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
   
@stop
@section('scripts_relative')

@stop
	

