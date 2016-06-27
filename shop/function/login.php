<form action ="login.php" method="post">
	Username: <input type="text" name="username"  required>
	Passworld: <input type="password" name="passworld" required>
	<input type = "submit" name ="send" value = "Login">
</form>
<?php
$conn = mysql_connect("localhost", "root", "") or die ("can't not connect!");
mysql_select_db("shopcart", $conn);

//Query data
$sql_query = 'SELECT * from users where user = ' . $_POST['username'] . '';
$data = mysql_query($sql_query);

//Get data and Check data input 
$row = mysql_fetch_array($data);

if (isset($_POST['send'])){
	if ($_POST['passworld'] == $row['pass'] || $_POST['username'] == $row['name']){
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
