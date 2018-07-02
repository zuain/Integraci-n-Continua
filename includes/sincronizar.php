<?php 
error_reporting(E_ALL);
require_once 'Autoloap.php';
#Controller
$datos = new ControllerFichaHome();

try{

	$datos->cambiarEstado($_POST['id']);
	$jsondata['success'] = true;

}catch(Exception $e){

	$jsondata['success'] = false;  
	die($e->getMessage());

}



  header('Content-type: application/json; charset=utf-8');
  echo json_encode($jsondata, JSON_FORCE_OBJECT);
  
?> 