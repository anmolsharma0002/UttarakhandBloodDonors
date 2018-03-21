<?php
include("db.php");
session_start();
{
$user=$_POST['Editbox1'];	
$pass=$_POST['Editbox2'];	
$mm=mysqli_query($cn,"select email,password from newdonor where email='$user' AND password='$pass'");	
$a=mysqli_num_rows($mm);
if($a>0)
{
	$_SESSION['username']=$user;		
header('location:userupdate.php');
	
	}
	else
	{
		header('location:index.php');
		
	}

}
?>