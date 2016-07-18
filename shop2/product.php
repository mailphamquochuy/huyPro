<?php

$products = array();

$products["xx"] = array('id' =>1, 
					'name' => 'Sony',
					'price' => '120',
					);

$products["yy"] = array('id' =>2, 
					'name' => 'HTC',
					'price' => '130',

					);

$products["zz"] = array('id' =>3, 
					'name' => 'Oppo',
					'price' => '140',

					);
								 					
foreach ($products as $key => $val) {
	echo "</br>";
	print_r($key);
	echo "</br>";
	print_r($val);
	echo "</br>";
	print_r($products[$key]);
}
$kk = array(1,2,3,5);
foreach ($kk as $so) {
	$so
}
?>
