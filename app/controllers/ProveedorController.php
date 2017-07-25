<?php

class ProveedorController extends BaseController {

	public function Mostrar()
	{
		$estados = EstadoModel::all();
		$ciudades = CiudadModel::all();
		$tiposdocumentos = TipoDocumentoModel::all();
		$tipospersonas = TipoPersonaModel::all();

		return View::make('proveedores.form', array('todoestados' => $estados,'ciudades' => $ciudades,'todotiposdocumentos' => $tiposdocumentos, 'todotipospersonas' => $tipospersonas));
	}

	
	public function Create()
	{
		
		// $auditoria = new AuditoriaModel;
		// $auditoria->usuario = Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido;
		// $auditoria->tabla = "Usuarios";
		// $auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee');

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
			// $auditoria->save();
			Session::flash('message', 'Proveedor creado correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}

		return Redirect::to('FormProveedor');

	}
	public function Listar()
	{	
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
		$usuarios = UsuariosModel::find($id);

		$usuarios->identificacion = Input::get('InputIden');
		$usuarios->celular = Input::get('InputCelular');
		$usuarios->nombres = Input::get('InputName');
		$usuarios->apellidos = Input::get('InputNamee');
		$usuarios->email = Input::get('InputEmail');
		$usuarios->telefono = Input::get('InputTel');
		$usuarios->username = Input::get('InputUser');
		$usuarios->direccion = Input::get('InputDireccion');
		$usuarios->estado_civil = Input::get('InputEstadoCivil');
		$usuarios->estado_id = Input::get('InputIdEstado');
		$usuarios->rol_id = Input::get('InputIdRol');
		$usuarios->id_cargo = Input::get('InputCargo');
		$usuarios->pais_id = Input::get('InputPais');
		$usuarios->ciudad_id = Input::get('InputCiudad');
		$usuarios->sexo = Input::get('InputSexo');

		if($usuarios->save()){
			Session::flash('message', 'Los datos del usuario se modificaron correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'No se fue posible modificar la información');
			Session::flash('class', 'danger');
		}

		$usuarios = UsuariosModel::all();
		return View::make('usuarios.detallesusuarios', array('todousuarios' => $usuarios));

	}

}
