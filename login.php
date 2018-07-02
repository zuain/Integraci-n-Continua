<?php
include_once "scriptsfacegmail.php"; // esto incluirá 
?>

<div class="login-form">
  <form  id="formlogin" name="formlogin" method="POST">//Inicio de formulario
    <h4 style="text-align:center;">Iniciar sesión</h4>	

    <div class="text-center social-btn">
      <a href="#" id="login" class="btn btn-facebook-login"><i class="fa fa-facebook-square"></i> Iniciar con Facebook</a>
    </div>
    <!--<div class="text-center social-btn">
      <div id="my-signin2"></div>
    </div>
  -->
  <div class="text-center social-btn">
    <div id="customBtn" class="customGPlusSignIn">
      <!--<span class="icon"></span>-->
      <span class="buttonText">Iniciar con Google</span>
    </div>
  </div>

  <div id="name"></div>
  <script>startApp();</script>
  <!--<a href="#" onclick="signOut();">Sign out</a>-->

  <div class="texto or-seperator">o</div>
  <div class="form-group" id="formemail">
   <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="email" class="form-control" id="emaillo" name="emaillo" placeholder="Correo Electronico" required="required">
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
    <input type="password" class="form-control" id="passwordlo" name="passwordlo" placeholder="Contraseña" required="required">
  </div>
</div>        
<div class="form-group" id="divbotoninicio">
  <button type="button"  id="botoninicio" class="btn btn-login btn-block">Iniciar Sesion</button>
</div>
<p id="demo"></p>
<div class="clearfix">
  <label class="texto pull-left checkbox-inline"><input type="checkbox">Recordar</label>
  <a href="#" class="pull-right text-brand-alhipo">¿Olvido su contraseña?</a>    
</div>  



</form>
<div class="text-center hint-text small" style="padding:20px 0;">¿No tiene cuenta? <a class="text-brand-alhipo" style="font-size:14px;" onclick="modalRegistro()">¡Registrese ahora!</a></div>
</div>

<div id="mensajeslogin">
  <!--<a id="response">Respuesta: </a>-->
</div>

<div id="divlogin"></div>




<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

<?php
include_once "scriptslogin.php"; // esto incluirá a login.php
?>

<?php
$fila  =$_SESSION['nombre'];
if ($fila != '') {
  echo('<script>logueoManual();</script>');  
}
else
{
  //echo('<script>logueoManual();</script>');
}
?>




