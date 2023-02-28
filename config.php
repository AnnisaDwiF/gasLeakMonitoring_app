<?php
	$host="localhost"; 
	$user="labandroid_datakebakaran"; 
	$pwd="datakebakaranPwd";
	$dbname="labandroid_datakebakaran";
	
	function connect_db() 
	{ 
		global $host,$user,$pwd,$dbname,$conn; 
 
		$conn = mysqli_connect($host,$user,$pwd,$dbname);
		
		if($conn->connect_errno>0){
			die('Unable to connect to database['.$db->connect_errno.']');
		}
	} 
?>
