<! DOCTYPE HTML>
	<head>
			<title>Uttarakhand Blood Donors</title>
			<link href= "images/1.ico"  rel= "shortcut icon">
			<link href="css/font-awesome.min.css" rel="stylesheet">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script type="text/javascript" src="jquery-3.2.1.min.js"> </script>
			<script src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">	
		
			
		
			
			
			
			<style>
					
			
			
				#tb{
	
    box-shadow: 5px 5px 20px rgb(145,145,145);
				
			}
			

			#tlb, #lpp,#tbbb,#tbb{
	
    box-shadow: 5px 5px 20px rgb(145,145,145);
				
			}
										
										* {box-sizing:border-box}
										body {font-family: Verdana,sans-serif;}
										.mySlides {display:none}

											/* Slideshow container */
											.slideshow-container {
											max-width: 1000px;
											position: relative;
											margin: auto;
															}
										
											/* The dots/bullets/indicators */
.dot {
  height: 5px;
  width: 5px;
  margin: 0 1px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
										
										
										
										
										
										
										
			
																										
						body, html {
									height: 100%;	
									margin: 0;
									}

								.bg {
    /* The image used */
									background-image: url(images/bg.jpg);

    /* Full height */
									height: 100%; 

    /* Center and scale the image nicely */
									background-position: center;
									background-repeat: no-repeat;
									background-size: cover;
									}
																										
								<!--logo adjustable size depend on screen-->
								
					/* Only affects 1600px width and higher */
					@media only screen and (min-width: 1600px){ .logo { font-size: 72px; }}
					/* Only affects 1200px-1600px width */
					@media only screen and (max-width: 1600px){ .logo { font-size: 48px; }}
					/* Only affects 900px-1200px width */
					@media only screen and (max-width: 1200px){ .logo { font-size: 36px; }}
					/* Only affects 600px-900px width */
					@media only screen and (max-width: 900px){ .logo { font-size: 32px; }}
					* Only affects 400-600px width */
					@media only screen and (max-width: 600px){ .logo { font-size: 24px; }}
					/* Only affects 400px width and lower */
					media only screen and (max-width: 400px){ .logo { font-size: 20px; }}								
																										
								<!--logo icon adjustable size depends on screen-->				
					/* Only affects 1600px width and higher */
					@media only screen and (min-width: 1600px){ .logoicon { height: 90px; width: 90px ; margin-top:-30px;}}
					/* Only affects 1200px-1600px width */
					@media only screen and (max-width: 1600px){ .logoicon {height: 80px; width: 80px ; margin-top:-30px; }}
					/* Only affects 900px-1200px width */
					@media only screen and (max-width: 1200px){ .logoicon { height: 60px; width: 60px ;  margin-top:-20px; }}
					/* Only affects 600px-900px width */
					@media only screen and (max-width: 900px){ .logoicon { height: 40px; width: 40px ; margin-top:10px; }}
					* Only affects 400-600px width */
					@media only screen and (max-width: 600px){ .logoicon { height: 20px; width: 20px ; margin-top:10px; }}
					/* Only affects 400px width and lower */
					media only screen and (max-width: 400px){ .logoicon { height: 20px; width: 20px ; margin-top:10px; }}

					
					
					
					
					.button {
							background-color:white;
							border :none;
							color: red;
							padding: 8px 14px;
							text-align: center;
							display: inline-block;
							font-size: 10.5px;
							margin: 4px 2px;
							cursor: pointer;
							-webkit-transition-duration: 0.4s; 
							transition-duration: 0.4s;
							border-radius:12px;
							box-shadow: 0 0px 0px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
							
							}
								
								
								.button1:hover
								{
									background-color:red;
									
									color: white;
									box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
									
								
								}
							<!--	.button2
								{
										box-shadow: 0 0px 0px 0 rgba(0,0,0,0.30),0 30px 50px 0 rgba(0,0,0,0.19);
								
								}-->
								
																						
					.b {
							background-color:white;
							border: 2px solid #f44336;
							color: red;
							padding: 8px 14px;
							text-align: center;
							display: inline-block;
							font-size: 10.5px;
							margin: 4px 2px;
							cursor: pointer;
							-webkit-transition-duration: 0.4s; 
							transition-duration: 0.4s;
							border-radius:12px;
							box-shadow: 0 0px 0px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
							
							}
								
								
								.but:hover
								{
									background-color:#f44336;
									
									color: white;
									box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
									
								
								}
								
								
								
								
								
			</style>
			
			
			
			
	</head>
	<body >
		<div class="container"	>
			<?php 
			include("head.php");
			?>
			
			
			
			
			
		
			<center>
<br><br>
			






			<?php
include("db.php");
$Editbox1=$_POST['Editbox1'];

$Combobox1=$_POST['Combobox1'];
$Calender1=$_POST['Calender1'];

$Combobox2=$_POST['Combobox2'];
$Combobox3=$_POST['country'];
$Combobox4=$_POST['state'];
$Combobox5=$_POST['district'];
$Combobox6=$_POST['city'];

$Editbox5=$_POST['Editbox5'];
$Passwordbox1=$_POST['Passwordbox1'];
$Editbox6=$_POST['Editbox6'];
$Editbox7=$_POST['Editbox7'];
$ab=mysqli_query($cn,"select email from `newdonor` where email='$Editbox5'");
$kkl=mysqli_num_rows($ab);
if($kkl>0)
{
	echo "<b>This Email ID</b>". " ".$Editbox5. " " ."<b>Already in use, please try with different Email ID</b>";

}

else
{
	/*if (isset($_POST['send'])) { 


		$phone=$_POST['Editbox6'];	
		//	$message=$_POST['msg'];
				if(preg_match('/^[A-Z0-9]{10}$/', $phone) ) {

					$ch = curl_init();
					$user="anmol.sds10@yahoo.com:qwerty@0002";
					$receipientno= $phone;	
					$senderID="TEST SMS"; 
					$msgtxt="From :Uttarakhand Blood Donors" . "\n" . "Dear Blood Donor Thank you for Register"; 
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
					}*/
					
					$target_dir="uploads/";
					$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);

					if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file))
					{
					//echo"The file".basename($_FILES["filetoupload"]["name"])."has been uploaded.";
					echo"You have Successfuly Registered";
					}
					else
					{
					echo "<b>You have Successfuly Registered !</b> but there was an error in uploading image or image path not found";	
					}	
	//  }  /*close if*/ 
	

	
$query=mysqli_query($cn,"insert into newdonor(full_name,gender,dob,blood_group,country,state,district,city,email,password,contact_no,alternate_no,photo)values('$Editbox1','$Combobox1','$Calender1','$Combobox2','$Combobox3','$Combobox4','$Combobox5','$Combobox6','$Editbox5','$Passwordbox1','$Editbox6','$Editbox7','$target_file')");




}

?>






<br><br>			
			<div class="row">
							
								<a href="newdonor.php" style="text-decoration:none"><div class="panel panel-default" style="border-radius:12px" >
									<div class="panel-heading" id ="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center" >
										<i class="fa fa-user"></i>&nbsp&nbsp Click here for New Donar Registration
									</div>
								</div></a>								
								
							
					</div>
					</center>

			</div>
	
	<?php
	include("footer.php");
	?>
	</body>
	
	
</html>

















