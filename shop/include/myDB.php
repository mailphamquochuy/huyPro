<?php
// info connect
$dbUser = "root";
$dbName = "shopcart";
$dbHost = "localhost";
$dbPassworld = " ";

//Connect
$connect = mysqli_connect($dbHost, $dbUser, $dbPassworld, $dbName);


//Test connect
if (!$connect) {
	die("Conect fail: " . $mysqli_connect_error())
}
echo "connect Successfull!";

?>