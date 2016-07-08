<?php
session_start();
$_SESSION['huy'] = "kinh doanh";
$_SESSION['khang'] = "master code";


echo "My job is:" .$_SESSION['huy'] ."";

?>