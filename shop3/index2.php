<!DOCTYPE html>
<html>
<head>
	<title>Demo Shopping cart</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>
<?php 
require('function/product.php');
?>
<!--Section header-->
<div id = "header">
	<section class = "nav">
		<span class = "logo">
			<img src="assets/img/logo.png" >
		</span>
		<span class = "menu">
			<ul>
				<li><a href="#">Mỹ Phẩm</a></li>
				<li><a href="#">Đồ điện tử</a></li>
				<li><a href="#">Liên hệ</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Cart </a></li>
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
			<?php
         		for($x = 0; $x < count($sp); $x++) {
				    echo "<th>". $sp[$x]->name . "</th>";
				}
     		?>
			<tr>
			<?php
         		for($x = 0; $x <  count($sp); $x++) {
				    echo "<td><a href='#'><img src='". $sp[$x]->hinh ."' width='330px' height='auto' /></a></td>";
				}
     		?>			
			</tr>
			<tr>
			<?php
         		for($x = 0; $x <  count($sp); $x++) {
         			$codeSP = $sp[$x]->id;
				    echo "<td>Giá : ". number_format($sp[$x]->gia) ." VND" ."<br>";
				    echo "<a href = 'function/cart.php?item=$codeSP' style ='color:#000000'".">Add Cart</a></font";
				    echo "</td>";
				}
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