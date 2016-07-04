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
//session_start();
$id = $_GET['item'];
$qty = $_POST['sl'];
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
							echo "<td id = 'update'>". $qty ."</td>";
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

		<script type="text/javascript">
			
		document.getElementByID('update').innerHTML = 2;

		</script>




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