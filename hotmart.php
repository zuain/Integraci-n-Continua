<?php
    //Auto cargador de clases
    require_once 'includes/Autoloap.php';

    //Objeto producto/model
    $producto = new Producto();

    //Controlador
    $setProducto = new ControllerHotmart();

        $producto->__SET('id_producto',$_POST['prod'] ? $_POST['prod'] : '00000');
        $producto->__SET('nombre', $_POST['prod_name'] ? $_POST['prod_name'] : 'Test name');
        $producto->__SET('precio', floatval($_POST['price'] ? $_POST['price'] : '00000'));
        $producto->__SET('correo', $_POST['email'] ? $_POST['email'] : 'dev@test.com');
        $producto->__SET('fecha', date('y-m-d'));
        $producto->__SET('status', $_POST['status'] ? $_POST['status'] : 'approved');
        $setProducto->SetProducto($producto);
    

?>
