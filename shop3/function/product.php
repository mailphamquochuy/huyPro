
<?php

//Connect
$conn = mysql_connect('localhost', 'root', '') or die ("Can't connect database");
mysql_select_db('shopcart', $conn);


//query data
$sql = mysql_query('SELECT * FROM products');


$sp = array();
//check data
if (mysql_num_rows($sql) == 0){
	echo "Chưa có dữ liệu";
	}else{

		while ($row = mysql_fetch_array($sql)){
	        $pro = new StdClass;
	    	$pro->name = $row['name'];
	    	$pro->hinh = $row['img'];
	    	$pro->gia = $row['price'];
	    	$pro->id = $row['productID'];
	    	array_push($sp, $pro);
		}
	}

mysql_close($conn);


?>
