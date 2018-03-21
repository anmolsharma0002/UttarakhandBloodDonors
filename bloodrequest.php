<?php
include("db.php");
$Editbox1=$_POST['Editbox1'];
$Combobox1=$_POST['Combobox1'];
$Combobox2=$_POST['Combobox2'];
$Editbox2=$_POST['Editbox2'];
$Editbox3=$_POST['Editbox3'];
$Combobox3=$_POST['country'];
$Combobox4=$_POST['state'];
$Combobox5=$_POST['district'];
$Combobox6=$_POST['city'];
$cal=$_POST['cal'];
$Editbox8=$_POST['Editbox8'];
$Editbox9=$_POST['Editbox9'];
$Editbox10=$_POST['Editbox10'];
$pd=date("d/m/Y");
for ($i = 0; $i<6; $i++)
	{ 
		$uniqid= mt_rand(00000000,99999999);
	}
$query=mysqli_query($cn,"insert into needblood(uniqid,patient_name,gender,req_blood_group,req_unit,hospital_address,country,state,district,city,req_date,contact_no,alternate_no,reason_for_blood,post_date)values('$uniqid','$Editbox1','$Combobox1','$Combobox2','$Editbox2','$Editbox3','$Combobox3','$Combobox4','$Combobox5','$Combobox6','$cal','$Editbox8','$Editbox9','$Editbox10','$pd')");

/*
		if (isset($_POST['sendreq'])) { 
		//$phone=$_POST['Editbox8'];	
		
		$phone=mysqli_query($cn, "select contact_no from newdonor LIMIT 100 where blood_group='$Combobox2' AND district='$Combobox5' ");
		
		while($row=mysqli_fetch_array($phone)) {
		
		//	$message=$_POST['msg'];
				//if(preg_match('/^[A-Z0-9]{10}$/', $phone) ) {
					if(preg_match('/^[A-Z0-9]{10}$/', $row['contact_no']) ) {

					$ch = curl_init();
					$user="anmol.sds10@yahoo.com:qwerty@0002";
					//$receipientno= $phone;	
					$receipientno= $row['contact_no'];
					$senderID="TEST SMS"; 
					$msgtxt="Dear Blood Donor"."\n"."Urgently need"." ".$Combobox2." "."Contact :".$Editbox8." "." At :".$Combobox6." "."Please visit www.uttarakhandblooddonors.tk" ; 
					curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
					$buffer = curl_exec($ch);
					if(empty ($buffer))
					{ echo " buffer is empty "; }
					else
					{ echo $buffer; } 
					curl_close($ch);
				} else {
					echo "not valid Information";
					}
				}	/*close While*/	
		// }     /*close if*/
		 
		 
/*Code for sending Request ID */ 
/*					
		if (isset($_POST['sendreq'])) { 
		$phone=$_POST['Editbox8'];	
		
		//	$message=$_POST['msg'];
				if(preg_match('/^[A-Z0-9]{10}$/', $phone) ) {
					$ch = curl_init();
					$user="anmol.sds10@yahoo.com:qwerty@0002";
					$receipientno= $phone;
					$senderID="TEST SMS"; 
					$msgtxt="Blood Request is Recieved with ID"." ".$uniqid." "."If their is no response from our top 100 Blood donors then Please visit www.uttarakhandblooddonors.tk to send message another 100 donors " ; 
					curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
					$buffer = curl_exec($ch);
					if(empty ($buffer))
					{ echo " buffer is empty "; }
					else
					{ echo $buffer; } 
					curl_close($ch);
				} else {
					echo "not valid Information";
					}		
		 } */ 
		 /* close if */
header('location:needblood.php');
?>
