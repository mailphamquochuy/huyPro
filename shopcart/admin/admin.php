
<!DOCTYPE html>
<html>
<head>
	<title>Admin page </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class ="menu">
	<?php
	$item = $_GET['item'];
	echo "Hello $item !";
	?>
</div>
<div class = "catalog">
</section>

<!--Menu thêm thành viên-->
	<section class = "addMember">
	<p>>>>Thêm thành viên mới</p>
		<form action="addmember.php" method="post">
			Username: <input type="text" name="user" required /><br>
			Password: <input type="password" name="pass" required /><br>
			Fullname: <input type="tex" name="name" required /><br>
			<input type="submit" name="add" value="Add Member"/>
		</form>
	</section>

<!--Menu thêm sản phẩm-->
	<section class = "addproduct">
		<p>>>>Thêm sản phẩm mới</p>
		<a href="addProduct.php">Thêm! </a>


	</section>


</div>




</body>
</html>


