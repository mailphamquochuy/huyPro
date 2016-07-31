<html>
<body>
	<form method = 'post' action = "<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: 	<input style = 'text' name = 'ten'>
				<input type ='submit'>

	</form>

<?php

	if ( $_SERVER["REQUEST_METHOD"] == "POST"){

		$name = $_REQUEST["ten"];

			if ( empty($name)){

				echo "Ten khong de trong";
			} else {

				echo $name;

			}
	}



echo "Mang ket hop" . "<br>";

$mang = array (

	array ( "Huy", 30, 1),
	array ( "Hong", 28, 2),
	array ( "Nu", 23, 3),
	array ( "Vu", 22, 4)

	);

for( $row = 0; $row < 4; $row ++ ){	

	for( $col = 0; $col < 3; $col ++){

			echo "Dong va Cot: " .$mang[$row][$col] ."<br>";
		}
	}

// Thuc hanh doc file ghi file

echo "Doc file ghi file" . "<br>";

$file = fopen( "document.txt", "r") or die ("Un open file !");
	
while (!feof($file)) {

		echo fgets($file) . "<br>";	

		} fclose($file);


$file = fopen ( "newfile.txt", "w+") or die ("Khong mo file duoc!");

	$txt = "Huy dep trai\n";

	fwrite ($file, $txt);

	$txt =" Duy dep trai \n";

	fwrite ($file, $txt);

	$txt =" Khang dep trai \n";

	fwrite ($file, $txt);

	fclose ($file);

?>


</body>
</html>
