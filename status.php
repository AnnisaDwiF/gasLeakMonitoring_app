<?php
error_reporting(E_ALL ^ E_DEPRECATED);

	
$con = mysqli_connect("localhost","labandroid_datakebakaran","datakebakaranPwd","labandroid_datakebakaran");


$SQL="INSERT INTO sensor_mq2 (nilai_kepekatan_gas,indikator_buzzer_fan,status_ruangan) VALUES (".$_GET['gas'].", ".$_GET['statusGas'].", ".$_GET['statusGas'].")";
mysqli_query($con,$SQL);

$SQL="INSERT INTO sensor_api (indikator_buzzer,sensor_deteksi_api,status_ruangan) VALUES (".$_GET['fire'].", ".$_GET['statusFire'].", ".$_GET['statusFire'].")";
mysqli_query($con,$SQL);

?>
