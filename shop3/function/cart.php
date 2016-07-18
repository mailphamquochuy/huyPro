<!DOCTYPE html>
<?php 
require('product.php');
session_start();
$_SESSION['cart']['price'] = 0;
?>
<html>
<head>
	<title>Trang giỏ hàng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

</head>
<body>
<!--Section header-->
<div id = "header">
	<section class = "nav">
		<span class = "logo">
			<a href="/huyPro/shop3"><img src="../assets/img/logo.png" ></a>
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
		<tr>
			<th>Tên SP </th>
			<th>Hình SP</th>
			<th>Số lượng Mua </th>
			<th>Thành tiền</th>
			<th>Thao tác</th>
		</tr>
		<?php

		if($_SESSION['cart'] != Null){	
			foreach ($_SESSION['cart'] as $id => $qty) {			
				for($x = 0; $x < count($sp); $x++) {
					if ($id == $sp[$x]->id){	
							echo "<tr>";		    
								echo "<td>". $sp[$x]->name ."</td>";
								echo "<td><img src='". $sp[$x]->hinh ."' width='100px' height='auto' /></td>";
								echo "<td>". $qty ."</td>";
								echo "<td>". number_format($qty * $sp[$x]->gia) ."</td>";
								echo "<td><a href = 'delcart.php?item=$id'>Delete</a>"."<br>" .
								"<form method ='post' action='update.php?item=$id'><input type='text' name = 'sl' value=". $qty ."><input  type ='submit' value='Update'></form>"."<br>".
								"<a href = '../index.php'>Order+</a>"."</td>";
							$_SESSION['cart']['price'] +=($qty * $sp[$x]->gia); 
							echo "</tr>";							
					}
				}

			}
		}
		else{

			echo " Không có sản phẩm nào được chọn";
		}
		?>	 
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>Tổng tiền: <?php echo number_format($_SESSION['cart']['price']); ?></td>
		<td><a href="pay.php">Pay all</a></td>
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