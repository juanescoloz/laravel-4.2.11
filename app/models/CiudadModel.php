<?php
	
	class CiudadModel extends Eloquent{

		protected $table = 'ciudad';

		protected $primaryKey = 'ciudad_id';

		protected $fillable = array('descripcion');

		public $timestamps = false;
	} 