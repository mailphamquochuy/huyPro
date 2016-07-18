<?php
$conn = mysql_connect("localhost", "root", "") or die ("can't not connect!");
mysql_select_db("shopcart", $conn);

//Query data
$sql_query = "SELECT * FROM users WHERE 'user'=".$_POST['username']."";
$data = mysql_query($sql_query);

//Get data and Check data input 
$row = mysql_fetch_array($data);

if (isset($_POST['send'])){
	if ($_POST['passworld'] == $row['pass']){
		echo $row['name'] . "is so cool";
		} 
		else
		{
			echo "đéo trùng pass, done";
		}
	}
	else
	{
		echo "Submit and check !";
	}


?>