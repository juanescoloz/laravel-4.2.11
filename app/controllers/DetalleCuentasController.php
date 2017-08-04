<?php

class DetalleCuentasController extends BaseController {
	public function Mostrar()
	{
		$cuentas=DetalleCuentasModel::all();
		// $usuarios = PrincipalModel::all();
		// $usuariosm = PrincipalModel::where('sexo','=','M')->get();
		// $usuariof = PrincipalModel::where('sexo','=','F')->get();
		/*echo json_encode($usuariosm);*/
		return View::make('cuentas.DetalleCuentasform',array('todocuentas' => $cuentas));
	}

	/*public function index()
	{
		return View::make('index');
	}*/
	public function Crear()
	{
	return View::make('cuentas.formcuentas');	
	}
	

}
