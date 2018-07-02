<?php

    require_once 'includes/Autoloap.php';

    $producto = new Producto();
    $setProducto = new ControllerHotmart();

        $producto->__SET('id_producto',$_POST['prod'] ? $_POST['prod'] : '12345');
        $producto->__SET('nombre', $_POST['prod_name'] ? $_POST['prod_name'] : 'Test name');
        $producto->__SET('precio', floatval($_POST['price'] ? $_POST['price'] : '12345'));
        $producto->__SET('correo', $_POST['email'] ? $_POST['email'] : 'dev@test.com');
        $producto->__SET('fecha', date('y-m-d'));
        $producto->__SET('status', $_POST['status'] ? $_POST['status'] : 'approved');
        $setProducto->SetProducto($producto);
    

?>