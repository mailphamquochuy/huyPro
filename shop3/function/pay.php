<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>Thanh toán</title>
	<meta charset="utf-8">
</head>
<body>
<td>Tổng tiền cần trả: <?php echo number_format($_SESSION['cart']['price']); ?></td>
</body>
</html>
