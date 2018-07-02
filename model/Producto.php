<?php
	
	Class Producto{
		private $id;
		private $id_producto;
		private $nombre;
		private $precio;
		private $correo;
		private $fecha;
		private $status;

		public function __GET($k){
		 return $this->$k; 
		}
    	
    	public function __SET($k, $v){
    	 return $this->$k = $v; 
    	}
	}

?>