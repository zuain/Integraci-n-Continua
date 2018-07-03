<?php
/*
Controlador usando para conectar a la base de datos
implementando PDO en PHP. Con el constructor inicial
y tres funciones para gestionar la base de datos.

*/
    class ControllerFichaHome{

        private $pdo;

        public function __CONSTRUCT(){
            try {
                $this->pdo = new PDO('mysql:host=localhost;dbname=camilo24_poli', 'camilo24_poli', '_Poli@2018');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                $this->pdo->exec("set names utf8");


            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function obtenerDatosSync(){
            try {

            $stm = $this->pdo->prepare("select * from hotmart where sync = 1");
            $stm->execute();
            $result = array();
            $gestion;

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r) {        
                $a = new FichaHome(); 
                $a->__SET('id',$r->id);
                $a->__SET('nombre',$r->nombre);
                $a->__SET('correo',$r->correo);
                $a->__SET('fecha',$r->fecha);
                $a->__SET('estado',$r->status);
                $result[] = $a;
            }
            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    
    public function obtenerDatos(){
            try {

            $stm = $this->pdo->prepare("select * from hotmart where sync = 0");
            $stm->execute();
            $result = array();
            $gestion;

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r) {        
                $a = new FichaHome(); 
                $a->__SET('id',$r->id);
                $a->__SET('nombre',$r->nombre);
                $a->__SET('correo',$r->correo);
                $a->__SET('fecha',$r->fecha);
                $a->__SET('estado',$r->status);
                $result[] = $a;
            }
            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    
    
       public function cambiarEstado($id){

        try {

            $tempEstado = $estado = 'completo';

      
            $stm = $this->pdo->prepare("update hotmart set sync = ? where id = ?");
            
            $estado = 1;

            $stm->bindParam(1,$estado);
            $stm->bindParam(2,$id);
            
            if($stm->execute()){
                return true;
            }
            
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    


    public function eliminar($id){
            try {

       
                $stm = $this->pdo->prepare("delete from hotmart WHERE id = ?");
    
            $stm->bindParam(1,$id);
        
            return $stm->execute();
        }
        
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    }
?>
