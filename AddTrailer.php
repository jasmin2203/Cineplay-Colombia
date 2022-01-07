<?php include 'db.php'; ?>

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
			<form id="contact" action="addTrailer.php" method="post" enctype="multipart/form-data">
				<h2  style="text-align: center;    font-family: cursive"><b>Agregar Pelicula</b></h2>



				<input  name="titulo_video" placeholder="Titulo Trailer" type="text" tabindex="1" required autofocus>

                <input name="id_video" placeholder="ID Video" type="text" tabindex="1" required>
                <input style="font-size: larger;background-color: #c2fbb8;font-family: cursive;font-weight: bold;" 
				class="boxStyle" type="submit" name="submit" value="Agregar Trailer"> 
				<p class="copyright"></p>
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
	$titulo_video=$_POST['titulo_video'];
	$id_video=$_POST['id_video'];
	if (!(empty($titulo_video) || empty($id_video)))
	{
		$var=new AddProduct();
		$var->productAdd($conn);

		

	}
	

}
else{
	
}
?>






<?php 

class AddProduct{




	public function productAdd($conn)
	{
        $sql="insert into videos(id,titulo_video,id_video) values('',?,?);";
        if(($stmt=$conn->prepare($sql))) {
			$stmt->bind_param("ss",$titulo_video,$id_video);

		}else
		{
			var_dump($conn->error);
		}
        
        $titulo_video=$_POST['titulo_video'];
		$id_video=$_POST['id_video'];
		$stmt->execute();
		$stmt->close();
		$_SESSION['msg']="Teatro agregado exitosamente";
		header ("Location: adminpage.php" );
	}

}
?>