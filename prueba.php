<?php
include 'db.php';
if (!session_id()) {
	session_start();
}
if (!(($_SESSION['user'])==1)) {
	header('Location: index.php');
}
$i=1;
$j=1;
$contador=0;
$reserva=1;
$numSala= $_SESSION['id_sala'];
$filas=$_SESSION['filas'];
$columnas=$_SESSION['columnas'];
$espacio=$_SESSION['espacio'];
$resourse=$conn->query("select * from sillas");
$num = mysqli_num_rows($resourse);
echo "numero ".$num;
if($num == 0)
{
  $autoi=0;
}
else{
  $resourse=$conn->query("select id_sala_sillas from sillas"); 
  while ($sillas=$resourse->fetch_object()) {
    $autoi=$sillas->id_sala_sillas;
	}
}
for($i=1;$i<=$filas;$i++){
  for($j=1;$j<=$columnas;$j++){
      $sql="insert into sillas(id_sala_sillas,id_sala,numero_silla,filas_silla,columna_silla,reserva_silla) values(?,?,?,?,?,?);";
      if(($stmt=$conn->prepare($sql))) {
          $stmt->bind_param('ssssss',$autoi,$numSala,$contador,$i,$j,$reserva);
        }else
        {
          var_dump($conn->error);
        }
        $contador++;
        $autoi++;
        $stmt->execute();
        $stmt->close();
  }
}
if($i==$filas){
  $i=1;
}
if($j==$columnas){
  $j=1;
}
header ("Location: adminpage.php" );	
?>