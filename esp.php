<?php 
include 'connection.php';

$sql = "SELECT id, horaLigar, horaDesligar, temperatura FROM horario_temperatura;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response = array();

while($row){
	$response[] = $row;
	$row = $result->fetch_assoc();
}

echo json_encode($response);

die;
 
?>
