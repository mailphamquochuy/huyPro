<!DOCTYPE html>
<html>
<head>
	<title>Demo Shopping cart</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

</head>
<body>
<?php 
	$id = $_GET['item'];
	include ('../include/myDB.php');
?>
<!--Section header-->
<div id = "header">
	<section class = "nav">
		<span class = "logo">
			<a href="/huyPro/shop3"><img src="../assets/img/logo.png" ></a>
		</span>
		<span class = "menu">
			<ul>
				<li><a href="detailCatalog.php?item=1">Mỹ Phẩm</a></li>
				<li><a href="detailCatalog.php?item=2">Đồ điện tử</a></li>
				<li><a href="#">Liên hệ</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="function/cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
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
	<?php
	echo " ----Danh mục auto----";
	include ('../function/catalog.php');
	echo "<br>";
	echo "----Danh mục html-----";
	?>
		<p><a href="detailCatalog.php?item=1"> >> Mỹ phẩm </a></p>
		<p><a href="detailCatalog.php?item=2"> >> Điện tử </a></p>
		<p><a href="#"> >> Trắng da </a></p>
		<p><a href="#"> >> Giảm cân </a></p>
	</section>
	<section class = "content">
		<table>
			<tr>
				<th>Tên SP </th>
				<th>Hình SP</th>
				<th>Giá tiền</th>
			</tr>

			<?php
			$query = mysql_query("SELECT products.name, products.img, products.price
									FROM products
									JOIN catalog
									ON products.catalogID = catalog.catalogID
									WHERE products.catalogID = {$id}");
			while($row = mysql_fetch_array($query)){
				echo "<br>";
				echo "<tr>";
				echo "<td>". $row['name'] ."</td>";
				echo "<td>". "<img src =".$row['img']." width='100px' height='auto'>" ."</td>";
				echo "<td>". $row['price'] ."</td>";
				echo "</tr>";

			}
			?>
		</table>
	</section>

</div>

<!--Footer-->
<div id = "footer">
	<a href="#">@Copyright 2016 Design by H2F</a>
</div>


</body>
</html>

