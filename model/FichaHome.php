<?php
/*
Modelo de las notificaciones, 
con los atributos y métodos
magicos para el acceso a datos.
*/	
	Class FichaHome{
		private $id;
		private $nombre;
		private $correo;
		private $fecha;
		private $estado;

		public function __GET($k){
		 return $this->$k; 
		}
    	
    	public function __SET($k, $v){
    	 return $this->$k = $v; 
    	}
	}

?>
