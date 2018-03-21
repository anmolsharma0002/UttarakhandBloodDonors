<?php
include("db.php");
session_start();
{
$user=$_POST['Editbox1'];	
$pass=$_POST['Editbox2'];	
$mm=mysqli_query($cn,"select uname,pass from admin where uname='$user' AND pass='$pass'");	
$a=mysqli_num_rows($mm);
if($a>0)
{
	$_SESSION['username']=$user;		
header('location:admindashboard.php');
	
	}
	else
	{
		header('location:index.php');
		
	}

}
?>