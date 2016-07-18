<?php

session_start();
require 'product.php';
//Lấy mã sản phẩm từ trang index
$id = $_GET['item'];
//Đưa mã sản phẩm mới lấy được vào biến session tên là giỏ hàng
//$_SESSION['giohang']['idproduct'] = $_GET['item'];

//Kiếm tra giỏ hàng trước đó đã được thêm sản phẩm chưa
if  (isset($_SESSION['giohang'][$id]))
	{
		$sl = $_SESSION['giohang'][$id] + 1;

	}
else
	{
		$sl = 1;
	}
//$_SESSION['giohang'][$id] = $sl;
//$_SESSION['giohang']['sl'] = $_SESSION['giohang'][$id];

//đẩy số lượng mua qua trang xem giỏ hàng
header('location:viewcart.php');
?>