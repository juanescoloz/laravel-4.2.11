<?php


class RolModel extends Eloquent {

	

	protected $table = 'rol';
	
	protected $primaryKey = 'id_rol';

	protected $fillable = array('descripcion');

	public $timestamps = false;
	

}