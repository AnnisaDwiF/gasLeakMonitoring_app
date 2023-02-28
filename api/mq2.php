<?php
	require_once("../config.php");
	connect_db(); 

	$result=$conn->query("SELECT DATE_FORMAT(time_updated, '%e-%b-%Y %H:%i:%S') AS time_updated, IF(nilai_kepekatan_gas='inf','1000',nilai_kepekatan_gas) AS nilai_kepekatan_gas, IF(indikator_buzzer_fan,'Mati','Aktif') AS indikator_buzzer_fan,status_ruangan FROM sensor_mq2 ORDER BY id DESC");
	
	mysqli_close($conn);

	while ($row = $result->fetch_assoc()){
		$data[] = $row;
	};

	$data = array(
		'data' => $data
	);

	header('Content-type: application/json');
	echo json_encode( $data );
?>
