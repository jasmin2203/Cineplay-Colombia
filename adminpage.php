<?php 
include 'db.php';
if (!session_id()) {
	session_start();
}
if (!(($_SESSION['user'])==1)) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="js/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/adminpage.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background: #efc0c0" >
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li>
							<?php include 'header.php'; ?>
						</li>			
					</ul>
				</div>
			</div>
		</div>
		<?php 
		if (!empty($_SESSION['msg'])) {
			echo "
			<p style='font-family: cursive; text-align: center; color: #5c865c; font-size: 2vw;'>".$_SESSION['msg']."</p>
			";
			$_SESSION['msg']="";

		}
		include 'profile.php';
		?>
		<div class="container" >
			
			<div class="row">
				<div class="col-md-4">
					<a style="width: 100%; text-align: center;" href="AddMovie.php" class="myButton">Agregar Pelicula</a>
				</div>
				<div  class="col-md-4">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="addtheater.php" class="myButton">Agregar Teatro </a>
				</div>
				<div  class="col-md-4">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="addTimeSlot.php" class="myButton"> Agregar Horario </a>
				</div>
				<div  class="col-md-4">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="addTrailer.php" class="myButton"> Agregar Trailer </a>
				</div>
				<div  class="col-md-4">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="addSalas.php" class="myButton"> Agregar Salas </a>
				</div>
			</div> 

		</div>
	</body>
	
	</html>
