<?php

/*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

session_start();

// isset verifica si existe una variable o eso creo xd
if (isset($_SESSION['id'])) {
  header('location: controller/redirec.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Huellas</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
  <!-- Importamos los estilos de Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome: para los iconos -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
  <link rel="stylesheet" href="css/sweetalert.css">
  <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg rango">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="titlogin">
        <p class="logo col-md-7">
        </p>

        <h4>Si aun no tienes tu cuenta ... ¡ Registrate !</h4>
        </li>
      </ul>
    </div>
  </nav>

  <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->
  <!-- Formulario Login -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4 col-md-offset-4">
        <!-- Margen superior (css personalizado )-->
        <div class="spacing-1"></div><br><br>

        <!-- Estructura del formulario -->
        <fieldset>

          <legend class="boton1">Login</legend><br>

          <!-- Caja de texto para usuario -->
          <label class="sr-only" for="user">Usuario</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user"></i></div>
            <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario">
          </div><br>

          <!-- Div espaciador -->
          <div class="spacing-2"></div>

          <!-- Caja de texto para la clave-->
          <label class="sr-only" for="clave">Contraseña</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
            <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu contraseña">
          </div><br>

          <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
          <div class="row" id="load" hidden="hidden">
            <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
              <img src="img/load.gif" width="100%" alt="">
            </div>
            <div class="col-xs-12 center text-accent">
              <span>Validando información...</span>
            </div>
          </div>
          <!-- Fin load -->

          <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
              <div class="spacing-2"></div>
              <button type="button" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
            </div>
          </div>

          <section class="text-accent center">
            <div class="spacing-2"></div><br>

            <p>
              No tienes una cuenta? <a href="registro.php"> Registrate!</a>
            </p>
            <p>
              Regresar al Lavado de Manos. <a href="../../index.html"> Regresar</a>
            </p>
          </section><br><br>

        </fieldset>
      </div>
    </div>
  </div>
  <!-- / Final Formulario login -->
  <footer>
    <nav class="navbar2 navbar-expand-lg ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">

      </div>
      </li>
      <li class="nav-item">

      </li>
      <li class="nav-item">

      </li>
      </ul>

      </div>
    </nav>
  </footer>
  <!-- Jquery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- SweetAlert js -->
  <script src="js/sweetalert.min.js"></script>
  <!-- Js personalizado -->
  <script src="js/operaciones.js"></script>
</body>

</html>