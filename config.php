<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "rupesh123";
	$dbname = "pro2";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) {
    	die("Connect failed: " . $conn->connect_error);
	}
?>
