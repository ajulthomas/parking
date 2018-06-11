<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$VID=$_POST["VID"];
	$qry=mysqli_query($con,"select * from user where VID='$VID'");
	$check=mysqli_fetch_array($qry);
	if(isset($check))
		{include("status.php");}
	else
	   { echo login unsuccessfull. ?>
	   	<!DOCTYPE html>
	   	<html>
	   	<p> Not yet registered ?</p>
	   	<a href="signuppage.php">click here</a>
	   	</html>
	   	<?php
	   }

?>