@extends('index')

@section('title')
  Detalles Proveedores
@stop

@section('css_page')
  
@stop

@section('css_relative')
    
@stop

@section('contenido') 

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado Proveedores</h2>
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
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <a class="btn btn-primary" href="{{url('FormProveedor')}}"><i class="fa fa-user-plus"></i> Crear Proveedor</a>
                    <p class="text-muted font-13 m-b-30">
                      Importar
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Documento</th>
                          <th>Nombre</th>
                          <th>NIT/CC</th>
                          <th>Telefonos</th>
                          <th>Contacto</th>
                          <th>Direccion</th>
                          <th>Tipo Persona</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>


                      <tbody>
                         @foreach($todoproveedores as $todo)
                            <tr>
                              <td>
                                 {{$todo->tipodocumentos->descripcion}}
                              </td> 
                              <td>
                                {{$todo->nombres}} {{$todo->apellidos}}
                              </td>
                              <td>
                                {{$todo->nit_cc}}
                              </td>   
                              <td>
                                {{$todo->telefono}}<br>{{$todo->celular}}
                              </td> 
                              <td>
                                {{$todo->email}}<br>{{$todo->sitioweb}}
                              </td>
                              <td>
                                {{$todo->direccion}}<br>{{$todo->ciudades->descripcion}}
                              </td>
                              <td>
                                {{$todo->tipopersonas->descripcion}}<br><b>{{$todo->estados->descripcion}}</b>
                              </td>
                              <td>
                                <div class="hidden-sm hidden-xs action-buttons text-center">
                                  <a class="blue" href="{{url('VerPerfil')}}/{{$todo->id_proveedor}}">
                                    <i class="ace-icon fa fa-search-plus bigger-130 tooltip-info" data-rel="tooltip" title="Detalles"></i>
                                  </a>

                                  <a class="green" href="{{url('modificarProveedor')}}/{{$todo->id_proveedor}}">
                                    <i class="ace-icon fa fa-pencil bigger-130 tooltip-success" data-rel="tooltip" title="Editar"></i>
                                  </a>

                                  <a class="red" href="#" id="btn_eliminar" name="btn_eliminar" value="">
                                    <i class="ace-icon fa fa-trash-o bigger-130 tooltip-error" data-rel="tooltip" title="Eliminar"></i>
                                  </a>
                                </div>

                                <div class="hidden-md hidden-lg">
                                  <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                      <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                      <li>
                                        <a href="" class="tooltip-info" data-rel="tooltip" title="Detalles">
                                          <span class="blue">
                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                          </span>
                                        </a>
                                      </li>

                                      <li>
                                        <a href="" class="tooltip-success" data-rel="tooltip" title="Editar">
                                          <span class="green">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                          </span>
                                        </a>
                                      </li>

                                      <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Eliminar" id="btn_eliminar" name="btn_eliminar" value="s">
                                          <span class="red">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                          </span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              


@stop
@section('scripts_page')

   
@stop
@section('scripts_relative')
  <script>
    // Tiempo del mensaje
      $('#alert').fadeOut(6000, function() {
        $(this).remove();
      });
    
  </script>
@stop
	

