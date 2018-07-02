<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: http://poli.catarco.com/');
}

require_once 'includes/Autoloap.php';
$datos = new ControllerFichaHome();

?>

<!DOCTYPE html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Seleccione una opción</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<nav class="navbar navbar-default">
  <div class="container">
  
      <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false">
        <span class="sr-only">Menú</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse hidden-sm" id="collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="https://mubrick.com/reportes/assets/img/user.png" alt="">
            <span class="nombre-usuario">User<span class="caret" style="color:#fff;"></span></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="http://poli.catarco.com/panel.php">Regresar</a></li>
            <li><a href="http://poli.catarco.com/cerrar.php">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://poli.catarco.com/" style="color:#fff;">Regresar</a></li>
        <li><a href="http://poli.catarco.com/cerrar.php" style="color:#fff;">Salir</a></li>
      </ul>
    </div><!-- / .navbar-collapse -->
  </div><!-- /.container -->
</nav>

    
    <div class="container">
      <div class="col-md-12">
        <div class="panel panel-primary">
        <div class="panel-heading"><p>Pagos rechazados</p></div>
        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Status</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach($datos->obtenerDatosSync() as $i): ?>
              <tr class="ocultar">
                  
                <td><?php echo ucfirst($i->__GET('nombre')); ?></td>
                
                <td><?php echo ucfirst($i->__GET('correo')); ?></td>
                
                <td><?php echo $i->__GET('fecha'); ?></td>
                
                <td><?php echo $i->__GET('estado'); ?></td>
                
                <td class="botones">
                  <button type="button" id="sincronizar" class="btn btn-danger" data-id="<?php echo $i->__GET('id'); ?>">Eliminar</button>
                </td>
              </tr>  
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div><!-- .container -->
    <form action="" method="POST"><input type="hidden" value="" id="id_inmueble" name="id"></form>

    <!--<div class="copyright">
      <p>Camilo Camargo</p>
    </div>-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Eliminar inmueble -->
    <script src="assets/js/eliminar.js"></script>

  </body>
</html>