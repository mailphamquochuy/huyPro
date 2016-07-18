<?php
session_start();
$del_id = $_GET['item'];

if(isset($del_id)){
	unset($_SESSION['cart'][$del_id]);
}
else{
	echo "Chưa chọn sản phẩm để xóa";
}
header('location: cart.php');
?>