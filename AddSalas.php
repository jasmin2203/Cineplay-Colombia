<?php include 'db.php'; ?>
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

	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.css">
	<style type="text/css">
		
		.MovieGenre{width: 100%;
			border: 1px solid #ccc;
			background: #FFF;
			margin: 0 0 5px;
			padding: 10px;
			font-style: normal;
			font-variant-ligatures: normal;
			font-variant-caps: normal;
			font-variant-numeric: normal;
			font-weight: 400;
			font-stretch: normal;
			font-size: 12px;
			line-height: 16px;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			
		}
		body, html {
			height: 100%;
			margin: 0;
		}
		.wrapper{
			text-align: center;
		}
		.bg { 
			/* The image used */
			background-image: url("images/addMovieBackground.jpg");

			/* Full height */
			height: 100%; 

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body >
	<?php include_once "header.php"; ?>
	<div class="bg">

		<div class="container">  
			<form id="contact" action="addSalas.php" method="post" enctype="multipart/form-data">
				<h2  style="text-align: center;    font-family: cursive"><b>Agregar Sala</b></h2>



				<input  name="numSala" placeholder="Numero sala" type="text" tabindex="1" required autofocus>

				<td>
					<select name="teatro" class="form-control" tabindex="1" required autofocus> 
				    <?php $resourse=$conn->query("select theaterName from theater"); 
						while ($theater=$resourse->fetch_object()) {
						    echo " <option value='".$theater->theaterName."'>". $theater->theaterName."</option>
								";
							} ?> 
						</td>   
                <br>
                <br/>

				<input name="filas" placeholder="Cantidad de filas" type="text" tabindex="1" required>


				<input name="columnas" placeholder="Cantidad de columnas" type="text" tabindex="1" required>

				<input name="espacio" placeholder="Espacio" type="text" tabindex="1" required>

				<input style="font-size: larger;background-color: #c2fbb8;font-family: cursive;font-weight: bold;" 
				class="MovieGenre" type="submit" name="submit"> 
				<p class="copyright"></p>
				<p></p>


			</form>
			<div class="wrapper">
				<button class="btn btn-default" onclick="document.location.href='adminpage.php'" > <span class='glyphicon glyphicon-chevron-left'> </span>Volver</button>
			</div>

		</div>

	</div>
	</body>
</html> 

<?php
if (isset($_POST['submit'] )&& !empty($_POST['submit']))

{
	$numSala=$_POST['numSala'];
	$teatro=$_POST['teatro'];
	$filas=$_POST['filas'];
	$columnas=$_POST['columnas'];
	$espacio=$_POST['espacio'];
	if (!(empty($numSala) || empty($teatro) || empty($filas) || empty($columnas)|| empty($espacio)))
	{
		echo "<script>alert(Movie Added);</script>";
		$var=new AddSala();
		$var->salaAdd($conn);
	}
	

}
else{
	
}
?>






<?php 

class AddSala{




	public function salaAdd($conn)
	{
		$sql="insert into salas(id_sala,nom_teatro,filas,col,espacio) values(?,?,?,?,?);";

		if(($stmt=$conn->prepare($sql))) {
			$stmt->bind_param("sssss",$numSala,$teatro,$filas,$columnas,$espacio);

		}else
		{
			var_dump($conn->error);
		}
		$numSala=$_POST['numSala'];
		$teatro=$_POST['teatro'];
		$filas=$_POST['filas'];
		$columnas=$_POST['columnas'];
		$espacio=$_POST['espacio'];
		$stmt->execute();
		$stmt->close();
		$_SESSION['msg']="Sala agregado exitosamente";
		$_SESSION['id_sala'] = $numSala;
		$_SESSION['filas'] = $filas;
		$_SESSION['columnas'] = $columnas;
		$_SESSION['espacio'] = $espacio;
		include("prueba.php");
	}
}


?>