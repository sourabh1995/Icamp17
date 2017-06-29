<?php
 
/*
 * All database connection variables
 */
 
define('DB_USER', "simplybh_123"); // db user
define('DB_PASSWORD', "BeingBhand#1"); // db password 
define('DB_DATABASE', "simplybh_simplybhand"); // database name
define('DB_SERVER', "localhost"); // db server

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);		
	if ($conn->connect_errno) {
		printf("Connect failed %s\n", $conn->connect_error);
		exit();
	}
?>