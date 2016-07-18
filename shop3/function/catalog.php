<?php
//include ('../include/myDB.php');
$query = mysql_query("SELECT * FROM catalog");
$catalog = array();
while($row = mysql_fetch_array($query)){

	$obj = new StdClass;
	$obj->id = $row['catalogID'];
	$obj->name = $row['catalogName'];
	$obj->parent = $row['parent'];
	array_push($catalog, $obj);
}
function catalogLevel1($catalog, $parent, $text=""){
	foreach ($catalog as $key => $val) {
		if ($val->parent == $parent){
			echo $text. $val->name ."<br>";
			$id = $val->id;
			catalogLevel1($catalog, $id,$text."-->");
		}	
	}
}
catalogLevel1($catalog,0);

/* Cách đệ quy catalog 2
function catalogLevel($parent = 0){
$query = mysql_query("SELECT * FROM catalog WHERE parent = {$parent}");
	if(mysql_num_rows($query) > 0){
		echo "<ul>";
			while($row = mysql_fetch_array($query)){
				echo "<li>" .$row['catalogName'] ."</li>";
				echo "<br>";
				catalogLevel($row['id']);
				}

		echo "</ul>";
	}
}
catalogLevel();

echo "-------------------------";
echo "<br>";
*/

?>
