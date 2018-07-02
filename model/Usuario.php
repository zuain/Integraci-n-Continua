<?php
	
	Class Usuario{
		private $id;
		private $nombre;
		private $pass;

		public function __GET($k){
		 return $this->$k; 
		}
    	
    	public function __SET($k, $v){
    	 return $this->$k = $v; 
    	}
	}

?>