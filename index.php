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
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

</head>
<body background="static\img\fondo.jpg">
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/logo.png" th:src="@{/img/logo.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="get">
                  <div class="demo">
            <div class="radio-toolbar">
              <p>
                <input type="radio" id="ciudad" onclick="this.form.action='Portada.php'" >
                <label for="ciudad"><span></span>Bogota</label>
             </p>
             <p>
                <input type="radio" id="ciudad" onclick="this.form.action='Portada.php'">
                <label for="ciudad"><span></span>Medellin</label>
             </p>
             <p>
                <input type="radio" id="ciudad" onclick="this.form.action='Portada.php'">
                <label for="ciudad"><span></span>Cali</label>
             </p>
             <p>
                <input type="radio" id="ciudad" onclick="this.form.action='Portada.php'">
                <label for="ciudad"><span></span>Cartagena</label>
             </p>
             <p>
                <input type="radio" id="ciudad" onclick="this.form.action='Portada.php'">
                <label for="ciudad"><span></span>Bucaramanga</label>
             </p>
             <p>
                <input type="radio" id="ciudad" onclick="this.form.action='Portada.php'">
                <label for="ciudad"><span></span>Pasto</label>
             </p>
         </div>
                </div>
                    <button type="submit" onClick="redirect(Portada.php)"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                
                
            </div>
        </div>
    </div>
</body>
</html>
