<?php

    require_once 'includes/Autoloap.php';

    $producto = new Producto();
    $setProducto = new ControllerHotmart();

        $producto->__SET('id_producto',$_POST['prod']);
        $producto->__SET('nombre', $_POST['prod_name']);
        $producto->__SET('precio', floatval($_POST['price']));
        $producto->__SET('correo', $_POST['email']);
        $producto->__SET('fecha', date('y-m-d'));
        $producto->__SET('status', $_POST['status']);
        $setProducto->SetProducto($producto);
    

?>