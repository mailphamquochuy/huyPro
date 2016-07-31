<?php

$mang = array (40, 5, 2, 7, 11, 1);
for ($i = 0; $i <=5; $i++){
	$min = $mang[$i];
	for ($j = $i+1; $j<6; $j++)
	{
		if ($mang[$j] > $mang [$i])
		{
			$min = $mang[$j];
			echo $min;
		}
		else
		{
		$tam = $mang[$j];
		$mang[$j] = $mang[$i];
		$mang[$i] = $tam;
		}
	}

 }

?>