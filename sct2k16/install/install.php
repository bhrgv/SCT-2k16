<?php
function drop_database()
{
	$connect=$GLOBALS['connect'];
	$database=$GLOBALS['database'];
	$query="DROP DATABASE $database";
	mysqli_query($connect,$query);
}
require_once('connect.php');
$create_database="CREATE DATABASE $database";
$install['register']="CREATE TABLE register(".
"ID int AUTO_INCREMENT,".
"email_id varchar(225) NOT NULL UNIQUE,".
"name varchar(225) NOT NULL,".
"designation varchar(100) NOT NULL,".
"dept varchar(100) NOT NULL,".
"organization varchar(225) NOT NULL,".
"address varchar(225) NOT NULL,".
"phone_number varchar(20) NOT NULL UNIQUE,".
"primary key(ID))";
drop_database();
$retval=mysqli_query($connect,$create_database);
if(!$retval)
{
	die("Error Database".mysqli_error($connect));
}
mysqli_select_db($connect,$database);
foreach($install as $name=>$query)
{
	$retval=mysqli_query($connect,$query);
	if(!$retval)
	{
		drop_database();
		die("Error $name".mysqli_error($connect));
	}
}
echo "Installation Successfull";
?>
