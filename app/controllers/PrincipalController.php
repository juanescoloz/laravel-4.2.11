<?php

class PrincipalController extends BaseController {
	public function index()
	{
		$usuarios = Login::all();
		$usuariosm = Login::where('sexo','=','M')->get();
		$usuariof = Login::where('sexo','=','F')->get();
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
