<?php

$error = "Things are broken";
$mysql_host = "localhost";
$mysql_database = "umer936x_3481Scouting";
$mysql_user = "umer936x_umer";
$mysql_password = "ThisWasNotMyPasswordMrDylanWatson";

if(isset($_GET['Regional']))
{
	$regional_name = $_GET['Regional'];
}
else {
	// $regional_name = "Alamo";
	// $regional_name = "Bayou";
	// $regional_name = "HubCity";
	// $regional_name = "Newton";
	$regional_name = "IRI";
}

// $conn = mysql_connect($mysql_host, $mysql_user, $mysql_password);
// mysql_select_db($mysql_database);
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>