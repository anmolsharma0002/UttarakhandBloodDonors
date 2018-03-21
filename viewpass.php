
							<?php
include("db.php");
$email=$_POST['email'];
$dob=$_POST['dob'];
$bloodgroup=$_POST['bloodgroup'];

$yu=mysqli_query($cn,"select password from newdonor where email='$email' AND  dob='$dob' AND blood_group='$bloodgroup'");
$lo=mysqli_num_rows($yu);
if($lo>0)
{
$row=mysqli_fetch_array($yu);
$aa=$row['password'];
echo " Your Password is :$aa";
}
else 
{
echo " Record Not Found..... Try Again";
}
	?> 
	