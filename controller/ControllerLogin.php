<?php

/*
Controlador para el inicio de sesión
*/

	class ControllerLogin{
			private $pdo;

        public function __CONSTRUCT(){
            try {
                $this->pdo = new PDO('mysql:host=localhost;dbname=camilo24_poli', 'camilo24_poli' , '_Poli@2018');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                $this->pdo->exec("set names utf8");


            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function login($usuario){
        	$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE user = ? and pass = ?");
        	
        	$user = $usuario->__GET('nombre');
        	$pass = md5($usuario->__GET('pass'));
        	
        	
            $stm->bindParam(1, $user);
            $stm->bindParam(2, $pass);
            $stm->execute();
            
            if(count($stm->fetchAll()) == 1){
            	return true;
            }else{
            	return false;
            }

        }
	}

?>
