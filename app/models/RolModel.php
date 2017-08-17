<?php


class RolModel extends Eloquent {

	protected $table = 'rol';
	
	protected $primaryKey = 'id_rol';

	protected $fillable = array('descripcion');

	public $timestamps = false;
	
	public function permisos(){ 
        return $this->belongsToMany('PermisoModel', 'rol_permisos', 'rol_id', 'permisos_id');
    }

}