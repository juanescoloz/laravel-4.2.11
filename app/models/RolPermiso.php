<?php


class RolPermiso extends Eloquent {

	
	protected $table = 'rol_permisos';

	protected $fillable = array('rol_id','permisos_id');

	public $timestamps = false;

	public function rol()
	{
		return $this->belongsTo('RolModel','id_rol');
	}

	public function permisos()
	{
		return $this->belongsTo('PermisoModel','id_permisos');
	}
	
}