<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'store_db';
		
	$conn = new mysqli ($hostname, $username, $password, $dbname);
	
	if(!$conn){
		echo 'store_db not connected';
	}else{
		
	}
?>
