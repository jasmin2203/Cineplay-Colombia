<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 15-02-2018
Version de PHP: 7.0.13
----------------------------*/

	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'moviedb');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 8; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM videos ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM videos  order by id desc LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		
		<div class = "row">
   
   <?php 
	$count=1;
		while ($row=mysqli_fetch_array($query)){
   ?>
			<div class = "col-sm-6 col-md-3">
			
			  <div class = "thumbnail" >
				
				<a href = "#" class = "youtube-video-player youtube" data-video-id='<?php echo $row['id_video']?>'>	
					<p class="play" ></p>
					<img class='img-responsive' src = "http://img.youtube.com/vi/<?php echo $row['id_video']?>/0.jpg" alt='<?php echo $row['titulo_video'];?>'>
					
				</a> 
			  </div>
			  
			  <div class = "caption">
                  <h4 class='text-center text-muted'><?php echo $row['titulo_video'];?></h4>
		 
			  </div>
		   </div>
   <?php
	if ($count%4==0){
		echo "<div class='clearfix'></div>";
		
	}
	$count++;
		}
   ?>
    
   
   
   
   
   
</div>

		
		
		
		
		<div class="table-pagination text-center">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>



