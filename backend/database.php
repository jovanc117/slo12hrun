<?php
	$servername = "localhost";
	$username = "pariza57_slo12";
	$password = "r!4Zd4rnwF4U";
	$dbname="pariza57_slo12run";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}