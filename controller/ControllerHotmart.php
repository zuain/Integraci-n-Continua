<?php



    class ControllerHotmart{

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

        public function setProducto($i){
            try {

            $stm = $this->pdo->prepare("insert into hotmart (
                id_producto,
                precio, 
                nombre,
                correo,
                fecha,
                status
                )
                 VALUES (?,?,?,?,?,?)");
                 
                 $id = $i->__GET('id_producto');
                 $precio = $i->__GET('precio');
                 $nombre = $i->__GET('nombre');
                 $correo = $i->__GET('correo');
                 $fecha = $i->__GET('fecha');
                 $estado = $i->__GET('status');
                 
                 
                 
            $stm->bindParam(1, $id);
            $stm->bindParam(2, $precio);
            $stm->bindParam(3, $nombre);
            $stm->bindParam(4, $correo);
            $stm->bindParam(5, $fecha);
            $stm->bindParam(6, $estado);

            return $stm->execute();
            
                }
                catch(Exception $e){
                    die($e->getMessage());
                }
        }

}


?>