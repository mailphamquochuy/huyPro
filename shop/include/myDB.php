<?php
// info connect
$dbUser = "root";
$dbName = "shopcart";
$dbHost = "localhost";
$dbPassworld = "";

//Connect
$conn = mysql_connect("$dbHost", "$dbUser", "$dbPassworld") or die ("Can't connect database");
mysql_select_db('shopcart', $conn);


//Test connect
//if (!$conn)
//{
//	die("Conect fail: " . $mysqli_connect_error());
//}
//else
//{
//echo "connect Successfull!";
//}

?>