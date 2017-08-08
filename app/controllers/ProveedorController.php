<?php

class ProveedorController extends BaseController {

	public function Mostrar()
	{
		$estados = EstadoModel::all();
		$ciudades = CiudadModel::all();

		$tiposdocumentos = TipoDocumentoModel::all();
		$tipospersonas = TipoPersonaModel::all();

		return View::make('proveedores.form', array('todoestados' => $estados,'ciudades' => $ciudades,'todotiposdocumentos' => $tiposdocumentos, 'todotipospersonas' => $tipospersonas ));
	}
	public function ListarProveedorCliente()
	{
		$estados = EstadoModel::all();
		$ciudades = CiudadModel::all();
		$tiposdocumentos = TipoDocumentoModel::all();
		$tipospersonas = TipoPersonaModel::all();

		return View::make('proveedores.form', array('todoestados' => $estados,'ciudades' => $ciudades,'todotiposdocumentos' => $tiposdocumentos, 'todotipospersonas' => $tipospersonas));
	}
	
	public function FormCliente()
	{

		return View::make('clientes.form');
	}
	public function ListarClientes()
	{

		return View::make('clientes.detalleclientes');
	}
	public function CrearClientes()
	{
		$estados = EstadoModel::all();
		$ciudades = CiudadModel::all();
		$ciudadess = CiudadModel::all();
		$pais = PaisModel::all();
		$tiposdocumentos = TipoDocumentoModel::all();
		$tiposdocumentoss = TipoDocumentoModel::all();
		$tipospersonas = TipoPersonaModel::all();
		$tipospersonass = TipoPersonaModel::all();

		return View::make('clientes.formclientes', array('todoestados' => $estados,'ciudades' => $ciudades,'todotiposdocumentos' => $tiposdocumentos, 'todotipospersonas' => $tipospersonas, 'todotiposdocumentoss' => $tiposdocumentoss,'ciudadess' => $ciudadess,'pais' => $pais,'tipospersonass' => $tipospersonass));
		// return View::make('clientes.formclientes');
	}

	
	public function Create()
	{
		$proveedorr = ProveedorModel::where('nit_cc','=',Input::get('InputIden'))->get();
		if ($proveedorr->count() == 1) {
			Session::flash('message', 'Ya se encuentra un proveedor NIT/CC');
			Session::flash('class', 'danger');		
		}else{
			

			$auditoria = new AuditoriaModel;
			$auditoria->tabla = "Proveedores";
			$auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee')." ID: ".Input::get('InputIden');
            if ($auditoria->save()){
				UsuarioAuditoriaModel::create(['id_usuario' => Auth::user()->id_usuario, 'id_auditoria' => $auditoria->id_auditoria]);

		$proveedor = new ProveedorModel;

		$proveedor->id_tipo_documento = Input::get('InputTipoDocumento');
		$proveedor->nit_cc = Input::get('InputIden');	
		$proveedor->nombres = Input::get('InputName');
		$proveedor->apellidos = Input::get('InputNamee');
		$proveedor->direccion = Input::get('InputDireccion');
		$proveedor->id_ciudad = Input::get('InputCiudad');
		$proveedor->id_estado = Input::get('InputIdEstado');
		$proveedor->sitioweb = Input::get('InputSitioWeb');
		$proveedor->telefono = Input::get('InputTel');
		$proveedor->celular = Input::get('InputCelular');
		$proveedor->fax = Input::get('InputFax');
		$proveedor->email = Input::get('InputEmail');
		$proveedor->id_tipo_persona = Input::get('InputEstadoCivil');

		
		if ($proveedor->save()){
			Session::flash('message', 'Proveedor creado correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}
	}

		$proveedores = ProveedorModel::all();
		return View::make('proveedores.detalleproveedor', array('todoproveedores' => $proveedores));

	}
	public function Listar()
	{	
		$proveedores = ProveedorModel::all();
		return View::make('proveedores.detalleproveedor', array('todoproveedores' => $proveedores));
	}

	public function delete()
	{
		$proveedores = ProveedorModel::where('id_proveedor','=', Input::get('IdElimianr'));

		if ($proveedores->delete()) {
			Session::flash('message', 'Proveedor eliminado correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}

		$proveedores = ProveedorModel::all();
		return View::make('proveedores.detalleproveedor', array('todoproveedores' => $proveedores));
	}
	



	public function editarView($id)
	{	
		$proveedor = ProveedorModel::where('id_proveedor','=', $id)->get();
		$estados = EstadoModel::all();
		$ciudades = CiudadModel::all();
		$tiposdocumentos = TipoDocumentoModel::all();
		$tipospersonas = TipoPersonaModel::all();


return View::make('proveedores.editar', array('proveedores' => $proveedor,'todoestados' => $estados,'todociudades' => $ciudades,'todotipodocumento' => $tiposdocumentos, 'todotipopersona' => $tipospersonas));

		//return View::make('usuarios.form');
	}

	public function editar($id){
		
		$proveedor = ProveedorModel::find($id);

		$proveedor->id_tipo_documento = Input::get('InputTipoDocumento');
		$proveedor->nit_cc = Input::get('InputIden');	
		$proveedor->nombres = Input::get('InputName');
		$proveedor->apellidos = Input::get('InputNamee');
		$proveedor->direccion = Input::get('InputDireccion');
		$proveedor->id_ciudad = Input::get('InputCiudad');
		$proveedor->id_estado = Input::get('InputIdEstado');
		$proveedor->sitioweb = Input::get('InputSitioWeb');
		$proveedor->telefono = Input::get('InputTel');
		$proveedor->celular = Input::get('InputCelular');
		$proveedor->fax = Input::get('InputFax');
		$proveedor->email = Input::get('InputEmail');
		$proveedor->id_tipo_persona = Input::get('InputEstadoCivil');

		
		if ($proveedor->save()){
			Session::flash('message', 'Los datos del proveedor se modificaron correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'No se fue posible modificar la información');
			Session::flash('class', 'danger');
		}

		$proveedores = ProveedorModel::all();
		return View::make('proveedores.detalleproveedor', array('todoproveedores' => $proveedores));
	}

}
