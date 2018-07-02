<?php

class Autoload {

	
	public static function register() {
		spl_autoload_register( array( 'self', 'spl_autoload_register' ) );
	}

	public static function spl_autoload_register( $class_name ) {
		
		$class_model = dirname(dirname(__FILE__)) . '/model/' . $class_name . '.php';
		$class_controller = dirname(dirname(__FILE__)) . '/controller/' . $class_name . '.php';

	    if (file_exists($class_model)) {
	       require_once $class_model;
	    }elseif (file_exists($class_controller)) {
	       require_once $class_controller;
	    }

	}

}

Autoload::register();