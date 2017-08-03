@extends('index')

@section('title')
  Crear Proveedores
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
                <h3>Crear Proveedor</h3>
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
                    <form class="form-horizontal form-label-left" method="post" action="{{url('CrearProveedor')}}" enctype="multipart/form-data">

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Nombres" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputNamee" name="InputNamee" placeholder="Apellidos(Opcional)" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="InputEmail" name="InputEmail" placeholder="domin@domin.com" required="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control " id="InputSitioWeb" name="InputSitioWeb" placeholder="www.domin.com">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputTel" name="InputTel" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Telefono" required="required">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputCelular" name="InputCelular" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Celular" required="required">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputTipoDocumento" name="InputTipoDocumento" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todotiposdocumentos as $todotiposdocumentos)
                            <option value="{{$todotiposdocumentos->id_tipo_documento}}">{{$todotiposdocumentos->descripcion}}</option>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fax</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite Fax (Opcional)" id="InputFax" name="InputFax">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Direccion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="InputDireccion" name="InputDireccion" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Persona</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputEstadoCivil" name="InputEstadoCivil" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todotipospersonas as $todotipospersonas)
                            <option value="{{$todotipospersonas->id_tipo_persona}}">{{$todotipospersonas->descripcion}}</option>
                            @endforeach 
                          </select>
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
                            @foreach($ciudades as $ciudades)
                              <option value="{{$ciudades->ciudad_id}}">{{$ciudades->descripcion}}</option>
                            @endforeach
                          </select>
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
