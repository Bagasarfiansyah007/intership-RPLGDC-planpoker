<?php 

// configuration to connect to mySql database

$databaseHost = "localhost";
$databaseName = "internship_rplgdc";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseName, $databasePassword, $databaseUsername);

?>