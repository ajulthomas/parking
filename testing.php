<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$SID=1;
	$ASLOT='NOT RESERVED';
	$qry=mysqli_query($con,"select * from pslots where SID='$SID'");
    $check=mysqli_fetch_array($qry);
    if($check['SLOT_1']==0)
        {
        	$check['SLOT_1']=1;
        	echo "allocated SLOT_1 at LULUMALL";
        	$ASLOT='SLOT_1';
        	$qry=mysqli_query($con,"update pslots set SLOT_1='1' where SID='$SID'");
        }
        else if ($check['SLOT_2']==0) {
        	$check['SLOT_2']=1;
        	echo "allocated SLOT_2 at LULUMALL";
        	$ASLOT='SLOT_2';
        	$qry=mysqli_query($con ,"update pslots set SLOT_2='$check['SLOT_2']'");
        }
        else if ($check['SLOT_3']==0) {
        	$check['SLOT_3']=1;
        	echo "allocated SLOT_3 at LULUMALL";
        	$ASLOT='SLOT_3';
        	$qry=mysqli_query($con ,"update pslots set SLOT_3='$check['SLOT_3']'");
        }
        else if ($check['SLOT_4']==0) {
        	$check['SLOT_4']=1;
        	echo "allocated SLOT_4 at LULUMALL";
        	$ASLOT='SLOT_4';
        	$qry=mysqli_query($con ,"update pslots set SLOT_4='$check['SLOT_4']'");
        }?>
        <br>
        <?php
    echo $ASLOT;
?>