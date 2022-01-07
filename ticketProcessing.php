
<?php 
if (!session_id()) {
	session_start();
}
include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<link href="bootstrap/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script>
		$(document).ready(function(e){
			$("#teatros").change(function(){
				var id=$("teatros").val();
				alert(id);
			})
		})
	</script>
	<style type="text/css">
		.boxStyle{width: 100%;
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
		
	</style>

</head>
<body>
	<?php include_once 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12  toppad" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<?php 
//for time slot
							//$timeSlot=$conn->query("select time from timeslot");	

//movie details
							$movieId=$_POST['movieId'];	
							$_SESSION['movieId']=$movieId;
							$res=$conn->query("select * from movielist where movieId=$movieId;");
							$row=$res->fetch_object();

							echo "".$row->Name;?>
						</h3>
					</div>
					
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4 col-lg-4 " align="center">
								<img alt="User Pic" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive"> 
							</div>
							<div class=" col-md-8 col-lg-8 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td><strong>Nombre de la pelicula </strong></td>
											<td><?php echo "".$row->Name;?> </td>
										</tr>
										<tr>
											<td><strong>Genero</strong></td>
											<td> <?php echo "".$row->Genre;?> </td>
										</tr>
										<tr>
											<td><strong>Director</strong></td>
											<td><?php echo "".$row->Director;?> </td>
										</tr>
										<tr>
											<tr>
												<td><strong>Ranking IMDB</strong></td>
												<td><?php echo "".$row->imdb;?> </td>
											</tr>
											<tr>
												<td><strong>Descripcion</strong></td>
												<td><?php echo "".$row->Description;	?> </td>
											</tr>



											<form action="ticketConfirmation.php" method="post" >

												<tr>
													<td><strong>Fecha de estreno</strong></td>
													<td><input class="boxStyle" type="date" name="date"></td>
												</tr>
												<tr>

													<td><strong>Horario</strong></td>
													<td>  <select name="timeSlot" class="boxStyle"> 
														<?php $timeSlot=$conn->query("select time from timeslot"); 
														while ($showTime=$timeSlot->fetch_object()) {

															echo " <option value='".$showTime->time."'>". $showTime->time."</option>
															";
														} ?> 
													</select></td>
												</tr>
												<tr>
													<td><strong>Teatro</strong></td>
													<td>
														<select name="theater" class="boxStyle" id="teatro"> 
															<?php $resourse=$conn->query("select theaterName from theater"); 
															while ($theater=$resourse->fetch_object()) {

																echo " <option value='".$theater->theaterName."'>". $theater->theaterName."</option>
																";
																$name = $_POST['teatro'];
															} ?> 
														</td>
													</tr>
													<tr>
													<td><strong>Sala</strong></td>
													<td>
														<select name="sala" class="boxStyle" id="sala"> 
															<?php $resourse=$conn->query("select id_sala from salas"); 
															while ($sala=$resourse->fetch_object()) {

																echo " <option value='".$sala->id_sala."'>". $sala	->id_sala."</option>
																";
															} ?> 
														</td>
													</tr>
													<tr>									
														<td colspan="2" width="100%">
															<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Reserva de boleto">
														</td>
													</tr>
												</form>



											</tbody>
										</table>

									</div>
								</div>

							</div>
						</div>
				</div>

			</div>
		</body>

		</html>