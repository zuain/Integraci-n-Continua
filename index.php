<?php
 
  session_start();
  require_once 'includes/Autoloap.php';

  $cUser = new ControllerLogin();
  $user = new Usuario();


  $error;

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user->__SET('nombre', filter_var($_POST['user'], FILTER_SANITIZE_STRING));
    $user->__SET('pass', filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

    if($cUser->login($user)){
      $_SESSION['usuario'] = $user->__GET('nombre');
      header('Location: http://poli.catarco.com/panel.php');
    }else{
      $error = "Datos incorrectos";
    }

}

?>

<!DOCTYPE html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Iniciar Sesión</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login">
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-md-offset-4">
         
         <div class="content-login">
          <div class="logo">
                <a href="http://poli.catarco.com"><img src="http://poli.catarco.com/assets/img/logo.png" alt="Poli"></a>
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <p class="titulo">Poli</p>
            <div class="form-group">
              <label for="user">Usuario</label>
              <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="pass">Contraseña</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
            </div>
              <p style="text-align:center;"><button type="submit" class="btn btn-primary">Acceder</button></p>
              
              <?php if (isset($error)): ?>
              <div class="alert alert-danger" role="alert" style="text-align:center; font-size:16px; font-family: 'Helvetica', sans-serif;"><?php echo $error; ?></div>
              <?php endif; ?>
          </form>
         </div>

        </div><!-- .col -->
      </div><!-- .row -->
    </div><!-- .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>