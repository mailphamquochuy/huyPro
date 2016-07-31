
<?php
$username=$_POST['name'];
$passworld=$_POST['pass'];
if($username == 'admin' && $passworld == '12345')
{
	echo "wellcome " .$username ."!";
}
else
{
	echo "<font color=red> Thong tin dang nhap khong chinh xac !</font>";
	
}

?>