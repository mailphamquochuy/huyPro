<?php
	$a =$_POST['a'];
	$b =$_POST['b'];
	$c =$_POST['c'];
	if ($a!= 0)
	 {
	 	$deta = ($b*$b) - 4*$a*$c;
	 	if ($deta > 0){
	 		$can = sqrt($deta);
	 		$X1 = ((-$b + $can)/2*$a);
			$X2 = ((-$b - $can)/2*$a);
			echo "Phuong trinh co 2 nghiem: X1 = $X1" . " Va " . " X2 = $X2 ";
	 	} 
	 	elseif ($deta = 0){
	 		echo " Phuong trinh co nghiem kep: X1 = X2 = -($b)/2*$a" . "<br>";
	 	}
		else
		{
			echo " Phương trinh vo nghiem hoac vo so nghiem";
		}
	}
	else 
	{
		echo " Phuong trinh khong phai phuong trinh bac 2, nghiem duy nhat la: X = -($c)/$b";
	}



?>