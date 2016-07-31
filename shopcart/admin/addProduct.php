<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>
<body>
<div id = "header">
	<section class = "nav">
		<span class = "logo">
			<a href="/huyPro/shop3"><img src="../assets/img/logo.png" ></a>
		</span>
		<span class = "menu">
			<ul>
				<li><a href="product/detailCatalog.php?item=1">Mỹ Phẩm</a></li>
				<li><a href="product/detailCatalog.php?item=2">Đồ điện tử</a></li>
				<li><a href="#">Liên hệ</a></li>
				<li><a href="function/login.php">Login</a></li>
				<li><a href="function/cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
			</ul>
		</span>
	</section>

	<!--<section class = "slide">
		<img src="assets/img/slide.jpg" >		
	</section>-->

</div>
<div class = "form">
<form action="" method="post" enctype="multipart/form-data" >
	Tên Sản phẩm: <input type = "text" name = "title" required /><br>
	Hình đại diện: <input type = "file" name = "file" value = "Browser" /><br>
	Số lượng: <input type = "number" name = "quantity" min = "0" value = "1" /><br>
	Giá sản phẩm: <input type = "number" name = "price" /><br>
	Danh mục sản phẩm: <select name = "catalog">
							  <option value="1">Mỹ Phẩm</option>
							  <option value="2">Đồ điện tử</option>
						</select></br>

	<input type = "submit" name = "submit" value = "Thêm sản phẩm">

</form>
</div>
<?php
if(isset($_POST['submit'])){
	//Khai bao bien lay du lieu
	$name = $_POST['title'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$catalog = $_POST['catalog'];

	//upload hinh
	move_uploaded_file($_FILES['file']['tmp_name'], '../upload/products/'.$_FILES['file']['name']);
	$domain = 'http://localhost/huyPro/shop3';
	$path = $domain.'/upload/products/'.$_FILES['file']['name'];

	//Connect database
	$conn = mysql_connect("localhost", "root", "") or die ("Connect error");
	mysql_select_db('shopcart',$conn);

	$sql = mysql_query("INSERT INTO products (name, img, quantity, price, catalogID) VALUES ('".$name."', '".$path."', '".$quantity."', '".$price."' ,'".$catalog."')");
	echo "<div id ='alert'> Đã thêm thành công sản phẩm: " .$name ."</div>";

}
else{

	echo "<div id ='alert'>Vui lòng nhập đủ trường dữ liệu! </div>";
}



?>

</body>
</html>