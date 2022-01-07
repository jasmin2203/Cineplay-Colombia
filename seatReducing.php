<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';


$seat=$_POST['seat']-1;
$bol = $_POST['boleta'];
$sql="update showOrder set seat=".$seat." where showOrderId=".$_POST['showOrderId'].";";
if ($conn->query($sql) === TRUE) {
	//echo "succeed";
	$_SESSION['msg']=" Compra de boleta numero ".$bol."realizada con exito";
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: customerPage.php')
?>

