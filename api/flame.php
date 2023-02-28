<?php
	require_once("../config.php");
	connect_db(); 

	$result=$conn->query("SELECT DATE_FORMAT(time_updated, '%e-%b-%Y %H:%i:%S') AS time_updated, sensor_deteksi_api, IF(indikator_buzzer,'Mati','Aktif') AS indikator_buzzer, status_ruangan FROM sensor_api ORDER BY id DESC");
	
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
