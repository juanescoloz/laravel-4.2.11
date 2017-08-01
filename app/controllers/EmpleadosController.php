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
