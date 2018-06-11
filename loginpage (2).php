<html>
<head>
<title>lulu@parking.com</title>
	<tr>
		<td colspan=2><center><font color="blue" size=4 ><b>WANNA CONFIRM YOUR SPACE , LET US HELP </b></font></center></td>
	</tr>
</head>
<br>
<br>
<body bgcolor="">
	<?php
	$con=mysqli_Connect("localhost","root","","parking");
	$SID=1;
	$qry=mysqli_query($con,"select * from pslots where SID='$SID'");
	$check=mysqli_fetch_array($qry);
	$flag=0;
    ?>
	<table width="35%" bgcolor="orange" align="center">
	<tr>
		<td colspan="4" align="center">
			<center>
				<b><font color="brown">AVAILABILITY STATUS</font></b>
			</center>
		</td>
	</tr>
	<tr></tr>		
	<tr>
		<th><u>SLOT 1</u></th>
		<th><u>SLOT 2</u></th>
		<TH><u>SLOT 3</u></TH>
		<TH><u>SLOT 4</u></TH>
	</tr>
	<tr>
		<td>
			<center>
				<?php
				if ($check['SLOT_1']==1) {
				 	echo "NOT AVAILABLE";
				 	$disableone='disabled';
				 }
				 else {
				 	echo "AVAILABLE";
				 	$flag=1;
				 	$disableone='';
				 }
				?>
				</center>
		</td>
		<td>
			<center>
				<?php
				if ($check['SLOT_2']==1) {
				 	echo "NOT AVAILABLE";
				 	$disabletwo='disabled';
				 }
				 else{
				 	echo "AVAILABLE";
				 	$flag=1;
				 	$disabletwo='';
				 } 
				?>
			</center>
		</td>
		<td>
			<center>
				<?php
				if ($check['SLOT_3']==1) {
				 	echo "NOT AVAILABLE";
				 	$disablethree='disabled';
				 }
				 else{
				 	echo "AVAILABLE";
				 	$flag=1;
				 	$disablethree='';
				 } 
				?>
			</center>
		</td>
		<td>
			<center>
				<?php
				if ($check['SLOT_4']==1) {
				 	echo "NOT AVAILABLE";
				 	$disablefour='disabled';
				 }
				 else{ 
				 	echo "AVAILABLE";
				 	$flag=1;
				 	$disablefour='';
				 }
				?>
			</center>
		</td>
		</tr>
	</table>
	<form name="loginform" method="post" action="reservepage.php">
		<table width="35%" bgcolor="lightgreen" align="center">
			<tr>
				<td colspan=5>
					<center>
						<font size=5>
							<b>
								Reserve your space
								<font color="bloodred"> @parking.com
								</font>
							</b>
						</font>
					</center>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td colspan="1"><CENTER>VEHICLE ID:</CENTER></td>
			    <td colspan="4"><CENTER><input type="text" size=25 name="VID"></CENTER></td>
			</tr>
			<tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
			<tr>
				<td><CENTER> SLOT&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </CENTER></td>
				<td><CENTER><input type="radio" name="SLOT" value="1" id="1" <?php echo $disableone ?> >SLOT 1</CENTER></td>
				<td><CENTER><input type="radio" name="SLOT" value="2" id="2" <?php echo $disabletwo ?> >SLOT 2</CENTER></td>
				<td><CENTER><input type="radio" name="SLOT" value="3" id="3" <?php echo $disablethree ?> >SLOT 3</CENTER></td>
				<td><CENTER><input type="radio" name="SLOT" value="4" id="4" <?php echo $disablefour ?> >SLOT 4</CENTER></td> 
			</tr>
			<tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
			<tr>
				<?php
				if ($flag==0) {
					$disable='disabled';
				}
				else $disable='';
				 ?>
			    <td colspan="5" align="center">&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="RESERVE" <?php echo $disable ?>></td>
			</tr> 
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td align="center" colspan="3">
					<font size=5 color="blue" >Not yet registered ?</font>
			    </td>
			    <td align="center" colspan="2">
			    	<a href="signuppage.php">SIGN UP</a>
			    </td>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
		</table>
	</form>
	</body>
</html>