<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'store_db';

	$serverLink = "http://localhost/store_ms/";
	// $serverLink = "http://localhost/store_ms/";
		
	$conn = new mysqli ($hostname, $username, $password, $dbname);
	
	if(!$conn){
		echo 'store_db not connected';
	}else{
		
	}
?>
