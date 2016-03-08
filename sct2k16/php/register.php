<?php
require_once('./../install/connect.php');
if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$org=$_POST['organisation'];
	$dept=$_POST['dept'];
	$desg=$_POST['designation'];
	$address=$_POST['address'];
	mysqli_select_db($connect,$database);
	$check="SELECT * from register where email_id like '$email' or phone_number like '$number'";
	$retval=mysqli_query($connect,$check);
	if(mysqli_num_rows($retval)!=0)
		header("location: ./../error.html");
	$insert="INSERT INTO register(email_id,name,designation,dept,organization,address,phone_number) values('$email','$name','$desg','$dept','$org','$address','$number');";
	$retval=mysqli_query($connect,$insert);
	if(!$retval) die('Insert Error: '.mysqli_error($connect));
}
header("location: ./../contact.html");
