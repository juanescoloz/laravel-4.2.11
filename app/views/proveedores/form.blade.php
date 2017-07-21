@extends('index')

@section('title')
  CrearUsuario
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
                <h3>Crear Usuario</h3>
              </div>

            </div>
            <div class="clearfix"></div>
          

            <div class="row">
              <div class="col-md-6 col-xs-12">
            </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informacion Personal</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="post" action="{{url('CrearUsuario')}}" enctype="multipart/form-data">

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputIden" name="InputIden" placeholder="Identificacion" pattern=".{6,}" required title="Minimo 3 caracteres" maxlength="12">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputCelular" name="InputCelular" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Celular" required="required">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Nombres" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputNamee" name="InputNamee" placeholder="Apellidos" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="InputEmail" name="InputEmail" placeholder="domin@domin.com" required="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputTel" name="InputTel" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Telefono" required="required">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Usuario</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite Usuario" id="InputUser" name="InputUser" required="required" onkeypress="return val(event)">
                        </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="imagen">
                      Foto:</label>

                      <div class="col-xs-12 col-sm-9">
                        <div class="clearfix col-xs-12 col-sm-9">
                          <input type="file" id="id-input-file-3" name="imagen">
                        </div>
                      </div>
                    </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" class="form-control" placeholder="**************" id="InputPasword" name="InputPasword" pattern=".{6,}" required title="Minimo 5 caracteres, Maximo 8" maxlength="8">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Direccion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="InputDireccion" name="InputDireccion" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputEstadoCivil" name="InputEstadoCivil">
                            <option>Casado</option>
                            <option>Soltero</option>
                            <option>Union Libre</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control" id="InputIdEstado" name="InputIdEstado" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todoestados as $todoestados)
                            <option value="{{$todoestados->id_estado}}">{{$todoestados->Descripcion}}</option>
                            @endforeach 
                          </select>
                          <!-- <select class="form-control" id="InputIdEstado" name="InputIdEstado">
                            <option value="1">estado</option>
                           
                          </select> -->
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rol</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputIdRol" name="InputIdRol" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todoroles as $todoroles)
                            <option value="{{$todoroles->id_rol}}">{{$todoroles->Descripcion}}</option>
                            @endforeach 
                          </select>
                          <!-- <select class="form-control" id="InputIdRol" name="InputIdRol">
                            <option value="1">rol</option>
                         
                          </select> -->
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputCargo" name="InputCargo" required="required">
                            <option value="">&nbsp;</option>
                            @foreach($todocargos as $todocargos)
                            <option value="{{$todocargos->id_cargo}}">{{$todocargos->descripcion}}</option>
                            @endforeach 
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pais</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" id="InputPais" name="InputPais">
                            <option></option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_group form-control" id="InputCiudad" name="InputCiudad">
                              <option value="">&nbsp;</option>
                            @foreach($ciudades as $ciudades)
                              <option value="{{$ciudades->ciudad_id}}">{{$ciudades->descripcion}}</option>
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
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Acepta Terminos de CarlosOspina?
                          <br>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat" checked="checked"> Acepto
                            </label>
                          </div>

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


  
  <script>
  function val(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8) return true;
      patron =/[A-Za-z]/;
      te = String.fromCharCode(tecla);
      return patron.test(te);
  }
  </script>
  
@stop
	
  </body>
</html>
