<?php
// info connect
$dbUser = "root";
$dbName = "shopcart";
$dbHost = "localhost";
$dbPassworld = "";

//Connect
$conn = mysql_connect("$dbHost", "$dbUser", "$dbPassworld") or die ("Can't connect database");
mysql_select_db('shopcart', $conn);

/*
$query = mysql_query("SELECT * FROM catalog");
while($row = mysql_fetch_array($query)){
	print_r($row);
}

//Test connect


if (!$conn)
{
	die("Conect fail: " . $mysqli_connect_error());
}
else
{
echo "connect Successfull!";
}
*/

?>