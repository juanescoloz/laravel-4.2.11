<?php

class EmpleadosController extends BaseController {
	public function Mostrar()
	{
		$estados = EstadoModel::all();
		$tipodocumento = TipoDocumentoModel::all();
		$ciudades = CiudadModel::all();
		$paises = PaisModel::all();

		return View::make('recursoshumanos.form', array('todoestados' => $estados,'todotipodocumento' => $tipodocumento,'todociudades' => $ciudades, 'todopaises' => $paises));

		//return View::make('usuarios.form');
	}
	public function Listar()
	{
		$empleados = EmpleadosModel::all();

		return View::make('recursoshumanos.detalleempleados', array('todoempleados' => $empleados));

	}
	public function PerfilEmpleado($id)
	{
		$empleado = EmpleadosModel::where('id_empleado', $id)->get();

		return View::make('recursoshumanos.perfilempleado', array('todoempleado' => $empleado));
	
	}
	public function Create()
	{
		$empleado = EmpleadosModel::where('identificacion','=',Input::get('InputIden'))->get();
		if ($empleado->count() == 1) {
			Session::flash('message', 'Ya se encuentra un usuario con esta identificación');
			Session::flash('class', 'danger');		
		}else{

			$auditoria = new AuditoriaModel;
			$auditoria->tabla = "Empleados";
			$auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee')." ".Input::get('InputApe')." ".Input::get('InputApee')." ID: ".Input::get('InputIden');
            if ($auditoria->save()){
				UsuarioAuditoriaModel::create(['id_usuario' => Auth::user()->id_usuario, 'id_auditoria' => $auditoria->id_auditoria]);

		$empleados = new EmpleadosModel;

		$file = Input::file('imagen');

		$empleados->imagen = Input::file('imagen')->getClientOriginalName();
		$empleados->PrimerNombre = Input::get('InputName');
		$empleados->SegundoNombre = Input::get('InputNamee');	
		$empleados->PrimerApellido = Input::get('InputApe');
		$empleados->SegundoApellido = Input::get('InputApee');
		$empleados->Direccion = Input::get('InputDireccion');
		$empleados->Telefono = Input::get('InputTel');
		$empleados->Fecha_Nacimiento = Input::get('InputFechaNac');
		$empleados->Fecha_Ingreso = Input::get('InputFechaIngre');
		$empleados->Email = Input::get('InputEmail');
		$empleados->id_ciudad = Input::get('InputCiudad');
		$empleados->id_pais = Input::get('InputPais');
		$empleados->Barrio = Input::get('InputBarrio');
		$empleados->Sexo = Input::get('InputSexo');
		$empleados->id_tipo_documento = Input::get('InputTipoDocumento');
		$empleados->identificacion = Input::get('InputIden');
		$empleados->Arl = Input::get('InputARL');
		$empleados->Eps = Input::get('InputEPS');
		$empleados->Afp = Input::get('InputAFP');
		$empleados->id_estado = Input::get('InputIdEstado');
		
		if ($empleados->save()){
			$file->move("assets/images/avatars",$file->getClientOriginalName());
			Session::flash('message', 'Empleado creado correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'Ocurrio un error(crearusuario)!');
			Session::flash('class', 'danger');
		}
	}else{
			Session::flash('message', 'Ocurrio un error(auditoria)!');
			Session::flash('class', 'danger');
		}
	}

		$empleados = EmpleadosModel::all();

		return View::make('recursoshumanos.detalleempleados', array('todoempleados' => $empleados));

	}
	// 	public function editarView($id)
	// {	
	// 	$usuarios = UsuariosModel::where('id_usuario','=', $id)->get();
	// 	$estados = EstadoModel::all();
	// 	$roles = RolModel::all();
	// 	$cargos = CargoModel::all();
	// 	$ciudades = CiudadModel::all();
	// 	$paises = PaisModel::all();


	// 	return View::make('usuarios.editar', array('usuarios' => $usuarios,'todoestados' => $estados,'ciudades' => $ciudades,'todoroles' => $roles, 'paises' => $paises),['todocargos' => $cargos]);

	// 	//return View::make('usuarios.form');
	// }

}
