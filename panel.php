<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: http://poli.catarco.com/');
}

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
            <li><a href="http://poli.catarco.com/cerrar.php">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://poli.catarco.com/cerrar.php" style="color:#fff;">Cerrar sesión</a></li>
      </ul>
    </div><!-- / .navbar-collapse -->
  </div><!-- /.container -->
</nav>

    
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="content-opciones">
            <a href="http://poli.catarco.com/registros.php" class="opcion two">
                <span><i class="fa fa-home" aria-hidden="true"></i></span>
                <p>Notificaciones Recibidas</p>
            </a>
            <a href="http://poli.catarco.com/sincronizados.php" class="opcion three">
                <span><i class="fa fa-refresh" aria-hidden="true"></i></span>
                <p>Notificaciones en proceso</p>
            </a>
          </div>
        </div>
      </div><!-- .row -->
    </div><!-- .container -->

    <!--<div class="copyright">
      <p>Camilo Camargo</p>
    </div>-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
