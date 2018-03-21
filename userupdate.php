<?php
include("session.php");
?>
<! DOCTYPE HTML>
	<head>
			<title>Uttarakhand Blood Donors</title>
			<link href= "images/1.ico"  rel= "shortcut icon">
			<link href="css/font-awesome.min.css" rel="stylesheet">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script type="text/javascript" src="jquery-3.2.1.min.js"> </script>
			<script type="text/javascript" src="cont.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">	
		
				
			<style>
					
			
			
				#tb{
	
    box-shadow: 5px 5px 20px rgb(145,145,145);
				
			}
			

	#country, #state,#district,#city{
	
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

			<?php
			include("loginhead.php");
			?>
			<br><br>
						<div class="container">
							<div class="row">
									<div class="col-sm-4">
								 <font style="color:red;font-family:arial black">
								<i class="fa fa-pencil"></i>&nbspUpdate Profile</font>
								</div>
							</div>	
							
						<div>	
										
			<br>
			
			
			<br>
			
			
			<form class="form-horizontal" action="update.php" method="post">
				<div class="row">
					<div class="col-sm-4">
								<?php
									$op=mysqli_query($cn,"select photo from `newdonor` where email='$check'");
									$row=mysqli_fetch_array($op);
                    
								?>
					
								<img src="<?php echo $row['photo'];?>" style="height:150px;border-radius:100px;width:150px;border:solid;border-width:2px;border-color:black">
					</div>
							
					<div class="col-sm-8">
								<div class="form-group">	
								<?php
									$yu=mysqli_query($cn,"select email from newdonor where email='$check'");
									$row=mysqli_fetch_array($yu);
									$aa=$row['email'];
								?>
								<label class="label-control">Email</label>
								<input class="form-control" type ="textbox"	name="email" id="tb" readonly="true" style="height:30px;width:100%;font-family:arial black;background-color:red;color:white;border-radius:5px" placeholder="email"	required value="<?php echo"$aa"; ?>">
								</div>
								
								<div class="form-group" style="margin-top:-10px">
								<label class="label-control">Address :</label><br>
								<label class="label-control">Country</label>
									<select class="form-control" readonly="true" onchange="print_state('state',this.selectedIndex);" name="country"  id="country" style="height:30px;width:100%;border-radius:5px"	>
										<option>India</option>
										
									</select>	
									
								</div>
								
							
								
								<div class="form-group" style="margin-top:-10px">
								<label class="label-control">State</label>
									<select class="form-control"  readonly="true" onchange="print_district('district',this.selectedIndex);" name="state" id="state" style="height:30px;width:100%;border-radius:5px"	>
										<option>Uttarakhand</option>
				
									</select>
													
								</div>

								<div class="form-group" style="margin-top:-10px">
								<label class="label-control">District</label>
									<select class="form-control" onchange="print_city('city',this.selectedIndex);" name="district" id="district" style="height:30px;width:100%;border-radius:5px"	>
										<option>~Select District~</option>
		
									</select>
								                                	
								</div>
								
								<div class="form-group" style="margin-top:-10px">
									<label class="label-control">City</label>
									<select class="form-control" name="city" id="city" style="height:30px;width:100%;border-radius:5px"	>
										<option>~Select City~</option>
									</select>
								</div>
								<!--<div class="form-group" style="margin-top:-10px">
									<label class="label-control">Address/Street/Landmark </label>
									<input class="form-control" type ="textbox"	name="street" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Enter Address/Street/Landmark"	required>
								</div>-->
								<div class="form-group" style="margin-top:-10px">
									<label class="label-control">Contact Number</label>
									<input class="form-control" type ="textbox"	name="mobile" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Enter Contact Number" required	>
								</div>
								<div class="form-group" style="margin-top:-10px">
										<label class="label-control">Alternate Number</label>
									<input class="form-control" type ="textbox"	name="mobile2" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Enter Alternate Number" required	>
								</div>
								<div class="form-group" style="margin-top:-10px">
								<button id ="tb" class="b but" style="width:100px;border-radius:8px"><font style="font-family:arial;font-size:10pt"><i class="fa fa-pencil"></i>&nbsp&nbspUpdate</font></button>
								</div>
										
					</div>
				</div>
												<script language="javascript">print_district("district");</script>
			</form>
			
		
		
			<?php
			include("footer.php");
			?>
			
	
	 
	</body>
	
	
</html>