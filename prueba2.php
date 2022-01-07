<?php include 'db.php';
if (!session_id()) {
	session_start();
}
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
  <style type="text/css">
   .div_sillaS{
    background: url('images/Silla_disp.png') no-repeat top scroll;
    height: 20px;
    width: 20px;
    color: #000000;
    
    }
    .div_sillaN{
    background: url('images/Silla_nodisp.png') no-repeat top scroll;
    height: 20px;
    width: 20px;
    color: #000000;
    }
    </style>
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images\logo.png">
</head>
<?php
$conta=0;
$sala = $_SESSION['sala'];
$salas=$conn->query("select * from sillas where id_sala=$sala"); 
	while ($salaT=$salas->fetch_object()) {
        $fil=$salaT->filas_silla;
        $col=$salaT->columna_silla;	
        											
    }
    $res=$conn->query("select * from salas where id_sala=$sala");   
    $row=$res->fetch_object(); 
    $colI=$row->espacio;
    $colD=$row->espacio;
    $r=$col-$colD;  
    $z=0;
    $x=0;
	echo "<table>";					
    for ($i = 1; $i <= $fil; $i++){
            
            echo "<tr>";
            for ($j = 1; $j <= $col; $j++){
                $z=$j+$x;
                //echo "i=".$i." | ";
                //echo "j=".$j." | "; 
                if($j!=$colI && $r!=$j){
                    if($j != $col){
                        
                        //echo " Z=|".$z."| X=||".$x."||"."Col= ".$col." | ";
                        $res=$conn->query("select * from sillas where id_sala=$z;");
                        $row=$res->fetch_object();
                        }
                    else{
                        //echo " Z=|".$z."| X=||".$x."||"."Col= ".$col." | ";
                        $res=$conn->query("select * from sillas where id_sala=$z;");
                        $row=$res->fetch_object();
                       // $x=$x+$j;                        
                    }
                    if($row->reserva_silla==1){
                        echo"<td>
                                <div class='div_sillaS' style='width:50px; height:50px; text-align:center; line-height:30px;'>".$conta++."</div>
                            </td>";  
                    }
                    else{
                        echo"<td>
                                <div class='div_sillaN' style='width:50px; height:50px; text-align:center; line-height:30px;'>".$conta++."</div>
                            </td>"; 
                    }
                }
                else{
                    $z=$j+$x;
                    if($j != $col){
                        
                        //echo " Z=|".$z."| X=||".$x."||"."Col= ".$col." | ";
                        $res=$conn->query("select * from sillas where id_sala=$z;");
                        $row=$res->fetch_object();
                    }
                    else{
                        //echo " Z=|".$z."| X=||".$x."||"."Col= ".$col." | ";
                        $res=$conn->query("select * from sillas where id_sala=$z;");
                        $row=$res->fetch_object();
                        $x=$x+$j;                        
                    }
                    if($row->reserva_silla==1){
                        echo" <td>
                        <div class='div_sillaS'; style='width:50px; height:50px; margin-right:50px; text-align:center; line-height:30px;'>".$conta++."</div>
                        </td>";
                    }
                    else{
                        echo" <td>
                        <div class='div_sillaN'; style='width:50px; height:50px; margin-right:50px; text-align:center; line-height:30px;'>".$conta++."</div>
                        </td>";
                    }
                }
            }
            echo"</tr>";

    }

    echo "</table>";
?>