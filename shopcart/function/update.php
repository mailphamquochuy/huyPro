<?php
session_start();
$id = $_GET['item'];
$sl = $_POST['sl'];

if($sl <= 0){
	unset($_SESSION['cart'][$id]);
}
else{
		$_SESSION['cart'][$id] = $sl + $_SESSION['cart'][$id];
}
header('location:cart.php');

?>