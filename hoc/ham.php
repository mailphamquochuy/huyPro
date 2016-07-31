
 <?php
   
function Giaptb2($a,$b,$c)
{
	function inketqua($nghiem)
					{
						$nghiem1 = array("$X1", "$X2");
						$nghiem2 = array("$X");
						$nghiem3 = array(" Phuong trinh vo nghiem hoac vo so nghiem");
						$nghiem4 = array("$X");
					print_r($nghiem1);
					print_r($nghiem2);
					print_r($nghiem3);
					print_r($nghiem4);
					}

	if ($a!= 0)
	 {
	 	$deta = ($b*$b) - 4*$a*$c;
	 	if ($deta > 0){
	 		$can = sqrt($deta);
	 		$X1 = ((-$b + $can)/2*$a);
			$X2 = ((-$b - $can)/2*$a);
			inketqua($nghiem1);
	 	} 
	 	elseif ($deta = 0){
	 		$X = $X1 = $X2 = -($b)/2*$a;
			inketqua($nghiem2);
	 	}
		else
		{
			
			inketqua($nghiem3);
		}
	}
	else 
	{
		 
		$X = -($c)/$b;
		inketqua($nghiem4);
	}
}
	Giaptb2($_POST['a'],$_POST['b'],$_POST['c']);

?>