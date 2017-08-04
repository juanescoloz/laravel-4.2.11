@extends('index')

@section('title')
  Detalles Proveedores
@stop

@section('css_page')
  
@stop

@section('css_relative')
    
@stop

@section('contenido') 
{{-- Inicio Panel Navegacion --}}
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="{{url('principal')}}">Inicio</a>
      </li>
      <li class="active">Listado Proveedores</li>
    </ul><!-- /.breadcrumb -->
  </div>
{{-- Final Panel Navegacion --}}
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

                  <a class="btn btn-primary" href="{{url('CrearClientes')}}"><i class="fa fa-user-plus"></i> Crear Proveedor</a>
                    <p class="text-muted font-13 m-b-30">
                      
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

                                  <a class="red" href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
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
                                        <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" data-target=".bs-example-modal-sm">
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

                 <!-- Small modal -->
                  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> --}}

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Esta Seguro de Eliminar Este Registro?</h4>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
              


@stop
@section('scripts_page')

   
@stop
@section('scripts_relative')
  <script>
    // Tiempo del mensaje
      $('#alert').fadeOut(6000, function() {
        $(this).remove();
      });
    // Confirmación para eliminar
      $("table").on('click','#btn_eliminar', function() {
        var id = $(this).attr('value');
        bootbox.confirm({
          size : 'small',
          title : "Eliminar registro",
          message: "Seguro que desea eliminar este registro?",
          buttons: {
            confirm: {
             label: "Aceptar",
             className: "btn-success btn-sm",
            },
            cancel: {
             label: "Cancelar",
             className: "btn-sm",
            }
          },
          callback: function(result) {
            if(result){
              // alert('deletePersonal/'+id);
              location.href = 'deletePersonal/'+id
            }
          }
        });
      }); 

      $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
      
      //tooltip placement on right or left
      function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('table')
        var off1 = $parent.offset();
        var w1 = $parent.width();
    
        var off2 = $source.offset();
        //var w2 = $source.width();
    
        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
      }
  </script>
@stop
	

