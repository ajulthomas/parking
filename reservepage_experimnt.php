<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$vid=$_POST["VID"];
	$SLOT=$_POST["SLOT"];
	$val=1;
	$qry=mysqli_query($con,"select * from user where VID='$vid'");
	$check=mysqli_fetch_array($qry);
	if(isset($check))
		{
		if ($check['RSLOT']==0)
		{
			$qry=mysqli_query($con,"update user set RSLOT='$SLOT' where VID='$vid'");
			if($SLOT==1)
            {
        	  echo "allocated SLOT_1 at LULUMALL";
        	  $query=mysqli_query($con ,"update pslots set SLOT_1='$val'");
            }
            else if ($SLOT==2)
            {
        	  echo "allocated SLOT_2 at LULUMALL";
        	  $query=mysqli_query($con ,"update pslots set SLOT_2='$val'");
            }
            else if ($SLOT==3)
            {
        	   echo "allocated SLOT_3 at LULUMALL";
        	   $query=mysqli_query($con ,"update pslots set SLOT_3='$val'");
            }
            else if ($SLOT==4) 
            {
        	  echo "allocated SLOT_4 at LULUMALL";
        	  $query=mysqli_query($con ,"update pslots set SLOT_4='$val'");
            }
			 ?>
			 <!DOCTYPE html>
			 <html>
			 <a href="status.php?id=<?php echo $check['VID']; ?>">reservation successfull.view status</a>
			 </html>
			 <?php
		}
		else
		{
			echo 'YOU HAVE ALREADY BOOKED YOUR SLOT';


		}
	}
	else
	   { echo 'login unsuccessfull.'; ?>
	   	<!DOCTYPE html>
	   	<html>
	   	<p> Not yet registered ?</p>
	   	<a href="signuppage.php">click here</a>
	   	</html>
	   	<?php
	   }

?>