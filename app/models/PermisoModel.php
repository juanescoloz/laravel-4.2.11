<?php


class PermisoModel extends Eloquent {

	

	protected $table = 'permisos';
	
	protected $primaryKey = 'id_permisos';

	protected $fillable = array('descripcion');

	public $timestamps = false;
	
	public function roles(){
        return $this->belongsToMany('RolModel'); 
    }

}