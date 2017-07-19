<?php

class PrincipalController extends BaseController {
	public function index()
	{
		$usuarios = PrincipalModel::all();
		$usuariosm = PrincipalModel::where('Sexo','=','M')->get();
		$usuariof = PrincipalModel::where('Sexo','=','F')->get();
		/*echo json_encode($usuariosm);*/
		return View::make('PaginaPrincipal', array('todosusuarios' => $usuarios, 'todosusuariosm' => $usuariosm),['todosusuariosf' => $usuariof]);
	}

	/*public function index()
	{
		return View::make('index');
	}*/
	public function CerrarSesion()
	{
		return View::make('login');
	}
	

}
