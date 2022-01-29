<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "pm_system");
     mysqli_set_charset($conn,"utf8");
	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://muhammedsarimese.tech/');
?>