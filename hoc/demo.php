<html>
<title>Demo project</title>
<body>
<?php
echo "<p align=center>";
printf ("<br><font color=red>Wellcome xuan toc do! </font>");
echo "<br>";
$_bien = "tham so";
echo 'Truyen '.$_bien.' vao day';

echo "<br>";
$kieubien1 = "Huy dai ca";
$kieubien2 = 123;
$kieubien3 = 100.5;
$kieubien4 = true;
$kieubien5 = array('1','2','3','4','5');
$kieubien5[]="6";

echo gettype($kieubien1) . '<br>';

echo gettype($kieubien2). '<br>';

echo gettype($kieubien3). '<br>';

echo gettype($kieubien4). '<br>';

echo gettype($kieubien5). '<br>';

echo "Day la bien so ".$kieubien5[5]." trong mang so 5" . '<br>';

$a = 5;
$b = 10;

if ($a > $b)
{
    echo 'ket qua sai';

}
else
{
    echo 'Thi tru bot b di 1 don vi la' .$a=$b-1 .'<br>';
}

for ($i=1; $i <= 10; $i++)
{
    echo "Ket qua a*i =" .$i*$a .'<br>';
}

$c=6;
do{
	echo "Day la gia tri cua $c".'<br>';
	$c++;
}while ($c<10);

print ('Wellcome frist my home work!'.'<br>');

echo "Cac so chan nam trong mang tu 1-> 20" .'<br>';


// for($d = 1; $d < 21; $d++)
//{
//if($d%2==0)
//		echo "So chan trong mang la:". $d .'<br>';
	
//}

//$mang = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
//for ($i=0; $i < $array.length(); $i++ )
//	{
//		echo "So chan trong mang la:" .$i%2==0 ."<br>";
//	}


echo 'Ban cu chuong tu 2-> 10' .'<br>';

$a=2;
$b=3;
$c=1;


?>
</body>
</html>
