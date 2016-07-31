<?php
$adduser = $_POST['user'];
$addpass = $_POST['pass'];
$addname = $_POST['name'];

//Connect database
$dbUser = "root";
$dbName = "shopcart";
$dbHost = "localhost";
$dbPassworld = "";

//Connect
$conn = mysql_connect("$dbHost", "$dbUser", "$dbPassworld") or die ("Can't connect database");
mysql_select_db('shopcart', $conn);

$sqlUser = mysql_query("SELECT users.user FROM users WHERE user ='".$adduser."'");

if(mysql_fetch_row($sqlUser) == false){

		$sql = mysql_query("INSERT INTO users(user, pass, name) VALUES ('".$adduser."','".$addpass."','".$addname."')");

		echo "Add member Success!";
	}
else{

		echo "Username ".$_POST['user']." isset! Try it other user";
	}

header('location: ../function/login.php');
?>