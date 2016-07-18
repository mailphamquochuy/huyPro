<?php
session_start();
require ('product.php');
//echo $_SESSION['giohang']['idproduct'];
//echo  $_SESSION['giohang']['sl'];
$giohang = $_SESSION['giohang'];

	if(count($giohang)){
		foreach ($giohang as $key => $sl) {
				$total = $sl*$price;
				echo "Product name:". $name ."</br>";
				echo "Quantily: ". $sl ."</br>";
				echo "Price: ". $price ."</br>";
				echo "Total: ". $total ."</br>";
		}
	}
	else
	{
			echo "No have products in cart";
	}













?>