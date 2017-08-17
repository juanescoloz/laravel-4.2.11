<?php
// use Illuminate\Auth\UserTrait;
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;

// class UsuariosModel extends Eloquent implements UserInterface, RemindableInterface{

	// use UserTrait, RemindableTrait;

	// protected $table = 'usuario';
	
	// protected $primaryKey = 'id_usuario';

	// protected $fillable = array('nombres','apellido','sexo','estado_civil','username','password','imagen','identificacion','telefono','email','direccion','celular');

	// public $timestamps = false;
	
	// public function estados()
	// {
	// 	return $this->belongsTo('EstadoModel','estado_id');
	// }
	// public function rol()
	// {
	// 	return $this->belongsTo('RolModel','rol_id');
	// }
	// public function cargos()
	// {
	// 	return $this->belongsTo('CargoModel','id_cargo');
	// }

	// public function ciudades()
	// {
	// 	return $this->belongsTo('CiudadModel','ciudad_id');
	// }

	// public function paises()
	// {
	// 	return $this->belongsTo('PaisModel','pais_id');
	// }

	// public function auditorias()
	// {
	// 	return $this->belongsToMany('AuditoriaModel', 'usuario_auditoria', 'id_usuario', 'id_auditoria');
	// }
// }