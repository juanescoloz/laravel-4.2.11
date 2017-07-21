<?php


class UsuariosModel extends Eloquent {

	

	protected $table = 'usuario';
	
	protected $primaryKey = 'id_usuario';

	protected $fillable = array('PrimerNombre','PrimerApellido','Sexo','EstadoCivil','Pais','username','password','imagen','identificacion','telefono','email','direccion','celular');

	public $timestamps = false;
	
	public function estados()
	{
		return $this->belongsTo('EstadoModel','estado_id');
	}
	public function roles()
	{
		return $this->belongsTo('RolModel','rol_id');
	}
	public function cargos()
	{
		return $this->belongsTo('CargoModel','id_cargo');
	}

	public function ciudades()
	{
		return $this->belongsTo('CiudadModel','Ciudad');
	}

}