<?php


class DetalleCuentasModel extends Eloquent {

	

	protected $table = 'puc';
	
	protected $primaryKey = 'id_cuenta';

	protected $fillable = array('codigo','nombre','tipo','naturaleza','clase','nivel','tipo_interno');

	public $timestamps = false;
	


}

