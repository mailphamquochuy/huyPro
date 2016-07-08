<!DOCTYPE html>

<html>
<head>
	<title>Chọn sản phẩm</title>
	<meta charset="utf-8">
</head>
<?php
require 'product.php';
?>
<body>
<p>Giỏ hàng đang có 0 sản phẩm </p>
<?php
foreach ($products as $listproduct) {
	echo "<ul>".$listproduct['name'] ."";
	echo "<li>".$listproduct['price'] ."</li>";
	echo "<a href='addcart.php?item=" .$listproduct['id'] ."'>Đặt hàng</a>";
	echo "</ul>";

}
?>



</body>
</html>