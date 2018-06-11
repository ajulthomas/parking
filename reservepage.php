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
        	  echo "ALLOCATED SLOT_1 AT LULUMALL";
        	  $query=mysqli_query($con ,"update pslots set SLOT_1='$val'");
            }
            else if ($SLOT==2)
            {
        	  echo "ALLOCATED SLOT_2 AT LULUMALL";
        	  $query=mysqli_query($con ,"update pslots set SLOT_2='$val'");
            }
            else if ($SLOT==3)
            {
        	   echo "ALLOCATED SLOT_3 AT LULUMALL";
        	   $query=mysqli_query($con ,"update pslots set SLOT_3='$val'");
            }
            else if ($SLOT==4) 
            {
        	  echo "ALLOCATED SLOT_4 AT LULUMALL";
        	  $query=mysqli_query($con ,"update pslots set SLOT_4='$val'");
            }
		}
		else
		{
			echo 'YOU HAVE ALREADY BOOKED YOUR SLOT';


		}?>
		<br>
		<?php
        echo 'RESERVATION STATUS  : RESERVED ';
        ?>
        <br>
        <?php
        $qry=mysqli_query($con,"select * from user where VID='$vid'");
	    $check=mysqli_fetch_array($qry);
        echo 'RESERVED SLOT       : SLOT_',$check['RSLOT'];
        ?>
        <br>
        <br>
        <br>
        <?php
        echo 'VEHICLE ID          :',$check['VID'];
        ?>
        <br>
        <br>
        <br>
        <?php
        echo 'USERNAME          :',$check['USERNAME'];
        ?>
        <br>
        <br>
        <br>
        <?php
        echo 'CONTACT          :',$check['CONTACT'];
        ?>
        <br>
        <br>
        <br>
        <?php
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