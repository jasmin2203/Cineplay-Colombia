<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="modal-video.min.css">
	<link rel="stylesheet" href="style.css">
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
<link href="css/anotherDefault.css" rel="stylesheet">
<link rel="icon" type="image/png" href="images\logo.png">
   
</head>
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
	<div class="container-fluid">
		<div class='col-md-12'>	
			<h3> TRAILERS</h3>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<div id="loader" class="text-center"> <img src="loader.gif"></div>
				<div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
				<div class="outer_div"></div><!-- Datos ajax Final -->
			</div>
	  </div>
	</div>

	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="modal-video.min.js"></script>
	<script src="app.js"></script>
</body>
</html>
