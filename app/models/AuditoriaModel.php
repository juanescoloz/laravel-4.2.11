<?php

class AuditoriaModel extends Eloquent {
	
	protected $table = 'auditoria';
	
	protected $primaryKey = 'id_auditoria';

	protected $fillable = array('usuario','fecha_hora','tabla','accion','tipo_usuario');

	public $timestamps = false;


}