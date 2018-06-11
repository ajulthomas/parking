<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$uname=$_POST["uname"];
	$email_id=$_POST["email_id"];
	$contact=$_POST["contact"];
	$password=$_POST["password"];
	$qry=mysqli_query($con,"insert into user(USERNAME,EMAIL_ID,CONTACT,PASSWORD) values('$uname','$email_id','$contact','$password')");
	include("loginpage.php");
?>
