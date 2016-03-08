<?php
$server="localhost";
$username="root";
$password="";
$database="sct2k16";
$connect=mysqli_connect($server,$username,$password);
if(!$connect)
	die('Connect.php: Connection Error');
?>