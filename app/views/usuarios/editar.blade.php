@extends('index')

@section('title')
  Modificar Usuario
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
                <h3>Modificar Usuario</h3>
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
                    @foreach($usuarios as $usuarios)
                    <form class="form-horizontal form-label-left" method="post" action="{{url('modificarUsuario')}}/{{$usuarios->id_usuario}}" enctype="multipart/form-data">
                    
                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputIden" name="InputIden" placeholder="Identificacion" pattern=".{6,}" required title="Minimo 3 caracteres" maxlength="12" value="{{$usuarios->identificacion}}">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputCelular" name="InputCelular" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Celular" required="required" value="{{$usuarios->celular}}">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Nombres" required="required" value="{{$usuarios->nombres}}">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputNamee" name="InputNamee" placeholder="Apellidos" required="required" value="{{$usuarios->apellidos}}">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="InputEmail" name="InputEmail" placeholder="domin@domin.com" required="required" value="{{$usuarios->email}}">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputTel" name="InputTel" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Telefono" required="required" value="{{$usuarios->telefono}}">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Usuario</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Digite Usuario" id="InputUser" name="InputUser" required="required" onkeypress="return val(event)" value="{{$usuarios->username}}">
                        </div>
                      </div>
                      
{{--                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" class="form-control" placeholder="**************" id="InputPasword" name="InputPasword" pattern=".{6,}" required title="Minimo 5 caracteres, Maximo 8" maxlength="8">
                        </div>
                      </div> --}}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Direccion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="InputDireccion" name="InputDireccion" required="required" value="{{$usuarios->direccion}}">
                        </div>
                      </div>
                    
                    @endforeach

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
                              @if($usuarios->estado_id == $todoestados->id_estado)
                                <option value="{{$todoestados->id_estado}}" selected="">{{$todoestados->descripcion}}</option>
                              @else
                                <option value="{{$todoestados->id_estado}}">{{$todoestados->descripcion}}</option>
                              @endif
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
                              @if($usuarios->rol_id == $todoroles->id_rol)
                                <option value="{{$todoroles->id_rol}}" selected>{{$todoroles->descripcion}}</option>
                              @else
                                <option value="{{$todoroles->id_rol}}">{{$todoroles->descripcion}}</option>
                              @endif
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
                              @if($usuarios->id_cargo == $todocargos->id_cargo)
                                <option value="{{$todocargos->id_cargo}}" selected>{{$todocargos->descripcion}}</option>
                              @else
                                <option value="{{$todocargos->id_cargo}}">{{$todocargos->descripcion}}</option>
                              @endif
                            @endforeach 
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pais</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" id="InputPais" name="InputPais">
                            <option value="">&nbsp;</option>
                            @foreach($paises as $paises)
                              @if($usuarios->pais_id == $paises->pais_id)
                                <option value="{{$paises->pais_id}}" selected>{{$paises->descripcion}}</option>
                              @else
                                <option value="{{$paises->pais_id}}">{{$paises->descripcion}}</option>
                              @endif
                            @endforeach 
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_group form-control" id="InputCiudad" name="InputCiudad">
                              <option value="">&nbsp;</option>
                            @foreach($ciudades as $ciudades)
                              @if($usuarios->ciudad_id == $ciudades->ciudad_id)
                                <option value="{{$ciudades->ciudad_id}}" selected>{{$ciudades->descripcion}}</option>
                              @else
                                <option value="{{$ciudades->ciudad_id}}">{{$ciudades->descripcion}}</option>
                              @endif
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
                          <button type="submit" class="btn btn-success">Actualizar</button>
                          
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
