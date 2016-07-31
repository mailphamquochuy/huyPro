<?php
$conn = mysql_connect("localhost", "root", "") or die ("can't not connect!");
mysql_select_db("shopcart", $conn);


//Query data fetch array $row
$query = mysql_query("SELECT * FROM users WHERE user = '".$_POST['username']."'");
$row = mysql_fetch_array($query);


//Check data input and wellcome admin
if ($row != false){

		if ($_POST['password'] == $row['pass']){
			//echo "Wellcome admin: ". $row['name'] ."";
			header("location: ../admin/admin.php?item=".$row['name']."");

		} 
		else{

			echo "Password incorect! ";

		}			

}
else{
	echo "cannot found " . $_POST['username'];
}

?>