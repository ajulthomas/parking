<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$USERNAME=$_POST["USERNAME"];
	$CONTACT=$_POST["CONTACT"];
	$VID=$_POST["VID"];
	$RFID=$_POST["RFID"];
	$qry=mysqli_query($con,"insert into user(USERNAME,CONTACT,VID,RFID) values('$USERNAME','$CONTACT','$VID','$RFID')");
	include("loginpage.php");
?>
