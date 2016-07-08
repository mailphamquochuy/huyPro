<?php

session_start();
require 'product.php';
//Get id truyen qua
$id = $_GET['item'];
$_SESSION['cart'] = array();
array_push($_SESSION['cart'], $id);

if  (isset($_SESSION['cart'])){
	foreach ($products as $val){
		var_dump($_SESSION[$val['qty']]);
		echo "So luong mua:" .$qty = $_SESSION[$val['qty']] + 1 ."";
	}
}
else
{
	$qty = 1;
}




?>