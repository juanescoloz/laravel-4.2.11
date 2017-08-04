@extends('index')

@section('title')
  Crear Cuentas
@stop

@section('css_page')
  
@stop

@section('css_relative')
    
@stop

@section('contenido') 


          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cuentas</h3>
              <i class="ace-icon fa fa-home home-icon"></i>
        <a href="{{url('DetalleCuentas')}}">Atras</a>
              </div>

            </div>
            <div class="clearfix"></div>
          

            <div class="row">
              <div class="col-md-6 col-xs-12">
            </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear Cuenta</h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="post" action="{{url('CrearProveedor')}}" enctype="multipart/form-data">

<!-- Primera Linea Codigo y Cuentas -->
                       <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Nombre" required="required">
                        <span class="fa fa-cog form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="InputNamee" name="InputNamee" placeholder="Codigo" >
                        <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                      </div>
<!-- Fin Primera Linea Codigo y Cuentas -->


<!-- Barras horizontales -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta Padre</label>
                        <div class="col-md-5 col-sm-9 col-xs-12" > 
                          <select class="form-control" id="InputTipoDocumento" name="InputTipoDocumento" required="required" >
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo</label>
                        <div class="col-md-5 col-sm-9 col-xs-12" > 
                          <select class="form-control" id="InputTipoDocumento" name="InputTipoDocumento" required="required" >
                          	<option value="">&nbsp;</option>
                            <option value="ACTIVO">Activo</option>
                            <option value="PASIVO">Pasivo</option>
                            <option value="PATRIMONIO">Patrimonio</option>
                            <option value="INGRESOS">Ingreso</option>
                            <option value="GASTOS">Gastos</option>
                            <option value="COSTOS DE VENTAS">Costos de Ventas</option>
							<option value="COSTOS DE PRODUCCION O DE OPERACION">Costos de produccion o de Operacion</option>
							<option value="CUENTAS DE ORDEN DEUDORAS">Cuentas de orden deudoras</option>
							<option value="CUENTAS DE ORDEN ACREEDORAS">Cuentas de orden acreedoras</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Naturaleza</label>
                        <div class="col-md-5 col-sm-9 col-xs-12" > 
                          <select class="form-control" id="InputTipoDocumento" name="InputTipoDocumento" required="required" >
                         <option value="">&nbsp;</option>
                            <option value="DEBITO">Debito</option>
                            <option value="CREDITO">Credito</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Clase</label>
                        <div class="col-md-5 col-sm-9 col-xs-12" > 
                          <select class="form-control" id="InputTipoDocumento" name="InputTipoDocumento" required="required" >
                         <option value="">&nbsp;</option>
                            <option value="BALANCE">Debito</option>
                            <option value="RESULTADO">Credito</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nivel</label>
                        <div class="col-md-5 col-sm-9 col-xs-12">
                          <select class="form-control" id="InputEstadoCivil" name="InputEstadoCivil" required="required">
                          	<option value="">&nbsp;</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Interno</label>
                        <div class="col-md-5 col-sm-9 col-xs-12">
                        <select class="form-control" id="InputIdEstado" name="InputIdEstado" required="required" required="required">
                            <option value="">&nbsp;</option>
                            <option value="A COBRAR">A cobrar</option>
                            <option value="A PAGAR">A pagar</option>
                            <option value="REGULAR">Regular</option>
                            <option value="VISTA">Vista</option>
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
              

                        
                  </div>
                </div>
              </div>
@stop
@section('scripts_page')
  
@stop
	
  </body>
</html>





























@stop
@section('scripts_page')

   
@stop
@section('scripts_relative')
 </body>
</html>