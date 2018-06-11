<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$vid=$_GET['id'];
	$qry=mysqli_query($con,"select * from user where VID='$vid'");
    $check=mysqli_fetch_array($qry);

    echo 'RESERVATION STATUS  : RESERVED ';
    ?>
    <br>
    <?php
    echo 'RESERVED SLOT       : SLOT_',$check['RSLOT'];

?>