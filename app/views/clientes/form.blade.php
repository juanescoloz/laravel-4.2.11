@extends('index')

@section('title')
  Crear Cliente
@stop

@section('css_page')
  


@stop

@section('css_relative')

@stop

@section('contenido') 

        <!-- page content -->
        
          
          <div class="page-title">
          <div class="title_left">
          <h3>Crear Cliente</h3>
          </div>
            </div>
            <div class="clearfix"></div>
          

              <div class="row">
              <div class="col-md-6 col-xs-12">
              </div>

                <div class="x_panel">
                <div class="x_title">
                
                <div class="col-md-3 col-sm-3 col-xs-3">
                <Br>
                <h2>Datos Basicos</h2>  
              
                <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                </ul>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">

                <br />
                <form class="form-horizontal form-label-left" method="post" action="{{url('CrearCliente')}}" enctype="multipart/form-data">

                  
                  <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Primer Nombre" required="required">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>

                      
                      <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Segundo Nombre">
                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                       
                        <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputNamee" name="InputNamee" placeholder="Primer Apellido" required="required" >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                          
                          <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                          <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Segundo Apellido">
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>  

                          <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                          <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Razon Social">
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>

                            <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                            <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Tipo de Identificacion">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        
                          
                            <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                            <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Cedula / Nit">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                           
                            <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                            <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Dv">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>


                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control has-feedback-left" id="InputCelular" name="InputCelular" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Telefono" required="required">
                              <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                              </div>

                                <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="InputCelular" name="InputCelular" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Celular" required="required">
                                <span class="fa fa-phone-square form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                  <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                  <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Correo Electronico">
                                  <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                  <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Fecha de Nacimiento">
                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                  </div>
                                        
                                        

</div>

</div>
</div>
<div class="clearfix"></div>
</div>
<div class="row">
<div class="col-md-6 col-xs-12">
</div>

<div class="x_panel">
<div class="x_title">
                
<div class="col-md-3 col-sm-3 col-xs-3">
<Br>
<h2>Ubicacion</h2>  

<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content"><br />

<form class="form-horizontal form-label-left" method="post" action="{{url('CrearCliente')}}" enctype="multipart/form-data">

                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Pais">
                              <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                              </div>

                             
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Departamento">
                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Ciudad">
                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                                            
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Direccion">
                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                
</div>

          </div>
          </div>
          <div class="clearfix"></div>
          </div>

            <div class="row">
            <div class="col-md-6 col-xs-12">
            </div>

              <div class="x_panel">
              <div class="x_title">
                
                <div class="col-md-3 col-sm-3 col-xs-3">
                <Br>
                <h2>Contabilidad</h2>  
              
                  <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  </ul>
                  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br />
                    <form class="form-horizontal form-label-left" method="post" action="{{url('CrearCliente')}}" enctype="multipart/form-data">


                              
                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Posicion Fiscal">
                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                              </div>

                              
                              <div class="col-md-3 col-sm-4 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Tipo de Persona">
                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                              </div>

                              
                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Plazo de Pago">
                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                              </div>

                              
                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Cuenta Por Cobrar">
                              <span class="fa fa-bar-chart form-control-feedback left" aria-hidden="true"></span>
                              </div>


                              
                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Cuenta Por Pagar">
                              <span class="fa fa-bar-chart form-control-feedback left" aria-hidden="true"></span>
                              </div>

                              
                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              <input type="text" class="form-control  has-feedback-left" id="inputSuccess3" placeholder="Cuenta de anticipo">
                              <span class="fa fa-bar-chart form-control-feedback left" aria-hidden="true"></span>
                              </div>
                              </div>


</div>

@stop
@section('scripts_page')
  
@stop
  
  </body>
</html>
