<!DOCTYPE html>
<html>
<head>
	<title>Trang giỏ hàng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

</head>
<body>
<?php 
require('product.php');
session_start();
    // Tao 1 object moi tren server chua du lieu client post len
$pro = new StdClass;
$pro->name = $_POST['name'];
$pro->sl = $_POST['sl'];
$pro->id = $_POST['id'];


if(!isset($_SESSION['giohang'])) {
	$_SESSION['giohang'] = array();
}


//lap qua $_SESSION['giohang']
/*  neu da ton tai sp nay thi tang sl len 1 nguoic lai push vao array*/
array_push($_SESSION['giohang'], $pro);



$chua_ton_tai_sp_trong_gio = !isset($_SESSION['giohang'][$pro->id]);
//list ra thi foreach key as value
if($chua_ton_tai_sp_trong_gio) {
	$_SESSION['giohang'][$pro->id] = $pro;
} else {
	$_SESSION['giohang'][$pro->id]->sl += $pro->sl;
}

/*
$id=$_GET['item'];
$_SESSION['$id'] = $_GET['item'];

if(isset($_SESSION['cart'][$id]))
{
 $qty = $_SESSION['cart'][$id] + 1;
}
else
{
 $qty=1;
}
$_SESSION['cart'][$id]=$qty;
*/

?>
<!--Section header-->
<div id = "header">
	<section class = "nav">
		<span class = "logo">
			<a href="/huyPro/shop"><img src="../assets/img/logo.png" >
		</span>
		<span class = "menu">
			<ul>
				<li><a href="#">Mỹ Phẩm</a></li>
				<li><a href="#">Đồ điện tử</a></li>
				<li><a href="#">Liên hệ</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</span>
	</section>

	<!--<section class = "slide">
		<img src="assets/img/slide.jpg" >		
	</section>-->

</div>

<!--body-->
<div id = "wrap">

	<section class = "catalog">
		<p><a href="#"> Catalog 1 </a></p>
		<p><a href="#"> Catalog 2 </a></p>
		<p><a href="#"> Catalog 3 </a></p>
		<p><a href="#"> Catalog 4 </a></p>
	</section>
	<section class = "content">
		<table>
		<th>Tên SP </th>
		<th>Hình SP</th>
		<th>Số lượng Mua </th>
		<th>Thành tiền</th>
		<tr>
		<?php
		for ($x=0; $x < count($sp) ; $x++) { 
			if($id == $sp[$x]->id){
				$total = number_format($qty * $sp[$x]->gia);
					echo "<td>". $sp[$x]->name ."</td>";
					echo "<td><img src='". $sp[$x]->hinh ."' width='100px' height='auto' /></td>";
					echo "<td>". $qty ."</td>";
					echo "<td>". $total ."</td>";

			}
		}
		?>	 

		</tr>
		<tr>
		<?php
		echo "<td>". "Thao tác" ."</td>";
		echo "<td>". "Xóa" ."</td>";
		echo "<td>". "Cập nhật" ."</td>";
		echo "<td>". "Đặt hàng" ."</td>";
		?>

		</tr>

		</table>

	</section>

</div>

<!--Footer-->
<div id = "footer">
	<a href="#">@Copyright 2016 Design by H2F</a>
</div>


</body>
</html>