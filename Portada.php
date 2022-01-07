<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">

  <title>Cineplay S.A.S</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="./movie_files/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>



  <!-- Custom styles for this template -->
   <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images\logo.png">
</head>
<!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="">
        <nav class="navbar-static-top" role="navigation">
        <a class="navbar-brand" href="index.php">
              <img src="images/logoM.png" alt="logo" style="width:125px;">
              </a>
              <br/>
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Barra de navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand text-info" href="index.php">CinePlay</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse float-right">
              <ul class="nav navbar-nav">
                <li class="nav-item active "><a class="text-info" href="index.php">Inicio</a></li>
                <li class="nav-item active "><a class="text-info" href="Trailers.php">Trailers</a></li>
                <li><a class="text-info" href=""></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>

                </li>
                <li><a class="text-info" href="javascript:void(0)" onclick="openLoginModal();"><span class="glyphicon glyphicon-log-in text-warning"></span> Iniciar sesion </a></li>
              </ul>
            </div>
            
          </div>
        </nav>

      </div>
    </div>


    <?php  include 'carousel.php'; include 'movieList.php';?>


    


    <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-warning">Iniciar sesion</h4>
          </div>

          <!-- login -->
          <div class="modal-body">  
            <div class="box">
              <div class="content">

                <div class="error"></div>


                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    <input id="userName" class="form-control" type="text" placeholder="usuario" name="Username">
                    <input id="password" class="form-control" type="password" placeholder="contraseña" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                    <input id="registrationName" class="form-control" type="text" placeholder="username" name="username">
                    <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                    <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                  </form>
                </div>


              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Quieres 
                <a href="javascript: showRegisterForm();">Crear cuenta</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Ya tienes una cuenta?</span>
                <a href="javascript: showLoginForm();">Iniciar sesion</a>
              </div>
            </div>        
          </div>
        </div>
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>
    <? ?>
  </body>
  </html>