<?php
$servername = "107.180.51.30";
$username = "lkelly01";
$password = "kolpies!";
$dbname = "Transcript1";

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
$db=mysqli_select_db($con, 'Transcript1') or die("Failed to connect to MySQL: " . mysqli_error($con));

?>