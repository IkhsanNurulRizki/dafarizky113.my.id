<?php
	// Database configuration 
	$dbHost     = "localhost"; 
	$dbUsername = "dafarizk_hotelteyvat"; 
	$dbPassword = "ZeroTwo002!"; 
	$dbName     = "dafarizk_hotelteyvat"; 
	 
	// Create database connection 
	$conn =  new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($conn->connect_error) { 
	    die("Connection failed: " . $conn->connect_error); 
	} 
?>