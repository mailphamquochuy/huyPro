<?php
$name = $_POST['title'];
$img = $_POST['upload'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$catalog = $_POST['catalog'];


if(isset($_POST['submit'])){
	move_uploaded_file($_FILES['upload']['tmp_name'], '../upload/products/'.$_FILES['upload']['name']);
}
else{
	echo "Upload Fail! ";
}

//Show filename with file extension
/*

var_dump($name);
var_dump($img);
var_dump($quantity);
var_dump($price);
var_dump($catalog);
*/

?>
