@extends('index')

@section('title')
  Crear Empleado
@stop

@section('css_page')
  


@stop

@section('css_relative')

@stop

@section('contenido') 

        <!-- page content -->
        
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Crear Empleado</h3>
              </div>

            </div>
            <div class="clearfix"></div>
          

            <div class="row">
              <div class="col-md-6 col-xs-12">
            </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="post" action="{{url('CrearEmpleado')}}" enctype="multipart/form-data">

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Primer Nombre" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputNamee" name="InputNamee" placeholder="SegundoNombre(Opcional)" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputApe" name="InputApe" placeholder="Primer Apellido" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputApee" name="InputApee" placeholder="Segundo Apellido(Opcional)" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="InputEmail" name="InputEmail" placeholder="domin@domin.com" required="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputDireccion" name="InputDireccion" placeholder="Direccion Residencia">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputTel" name="InputTel" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Telefono" required="required">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputBarrio" name="InputBarrio" placeholder="Barrio" required="required">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputTipoDocumento" name="InputTipoDocumento" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todotipodocumento as $todotipodocumento)
                            <option value="{{$todotipodocumento->id_tipo_documento}}">{{$todotipodocumento->descripcion}}</option>
                            @endforeach 
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Identificacion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite Identificacion" id="InputIden" name="InputIden" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Nacimiento</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Fecha Nacimiento" id="InputFechaNac" name="InputFechaNac" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Ingreso</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="InputFechaIngre" name="InputFechaIngre" required="required" placeholder="Fecha Ingreso">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control" id="InputIdEstado" name="InputIdEstado" required="required" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todoestados as $todoestados)
                            <option value="{{$todoestados->id_estado}}">{{$todoestados->descripcion}}</option>
                            @endforeach 
                          </select>
                          <!-- <select class="form-control" id="InputIdEstado" name="InputIdEstado">
                            <option value="1">estado</option>
                           
                          </select> -->
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_group form-control" id="InputCiudad" name="InputCiudad" required="required">
                              <option value="">&nbsp;</option>
                            @foreach($todociudades as $todociudades)
                              <option value="{{$todociudades->ciudad_id}}">{{$todociudades->descripcion}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pais</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputPais" name="InputPais" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todopaises as $todopaises)
                            <option value="{{$todopaises->pais_id}}">{{$todopaises->descripcion}}</option>
                            @endforeach 
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputSexo" name="InputSexo" required="required">
                            <option value="">&nbsp;</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ARL</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite ARL" id="InputARL" name="InputARL" required="required">
                        </div>
                      </div><div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">EPS</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite EPS" id="InputEPS" name="InputEPS" required="required">
                        </div>
                      </div><div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">AFP</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite AFP" id="InputAFP" name="InputAFP" required="required">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Limpiar</button>
                          <button type="submit" class="btn btn-success">Registrar</button>
                          
                        </div>
                      </div>

                    </form>
                    @if(Session::has('message'))
                            <div id="alert">
                              <div class="col-sm-12 hr hr-18 hr-double dotted"></div>
                              <div class="col-sm-4 col-xs-12 col-sm-offset-4 alert alert-{{Session::get('class')}}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{Session::get('message')}}
                              </div>
                            </div>
                          @endif
                  </div>
                </div>
              </div>
@stop
@section('scripts_page')
  
@stop
  
  </body>
</html>
