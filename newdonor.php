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
			<link rel="stylesheet" href="w3.css">
			
		
			
			
			
			<style>
			
			#tb{
	
    box-shadow: 5px 5px 20px rgb(145,145,145);
				
			}
			#country, #state,#district,#city{
	
    box-shadow: 5px 5px 20px rgb(145,145,145);
				
			}
			
							body, html {
									height: 100%;	
									margin: 0;
									}

								.bg {
 									background-image: url(images/wd.jpg);

 
									height: 100%; 

												
									background-position: center;
									background-repeat: no-repeat;
									background-size: cover;
									}
			
			
							
							
							
							
							
							
							
							
																										
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
								.hide{
									display:none
								}
								
			</style>
			
			
			
			
			
			
			
			
			
			
	</head>
	
	<body>
			<div class= "container">
							<?php
								include("head.php");
							?>
	
								<div class="row">
								<b><p  style="font-family:Comic Sans MS;color:red" align ="center">Few drops&nbsp <i class="fa fa-tint"></i> of blood can give someone a new life; just like, two Polio drops can give a Polio free life.</p>
								</b>
								</div>
		
		
		
		
		
								<div class="panel panel-default" style="border-radius:12px" >
									<div class="panel-heading" id ="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center" >
										<i class="fa fa-user"></i>&nbsp&nbspNew Donar Registration
									</div>
								</div>
	<div class="col-lg-12 well" style="background-color:white;border-color:red;border-radius:20px">
			<div class="row">
				<form method="post" action="createnewdonor.php" enctype="multipart/form-data">
					<div class="col-sm-12">
					<div class="row"><font style="font-family:arial black;font-size:10pt;margin-left:5px"><font style="color:red">Note :</font> You Should not have any type of disease like malaria, typhoid fever, dengue. If you are suffering from any type of disease you can't be a blood donor until you are not disease free, you are not eligible to register as a blood donor. </font> </div>
						<br><br><div class="row">
							<div class="col-sm-12 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Full Name   <font style="color:red">*</font></label>
								<input class="form-control" type ="text"	name="Editbox1" id="tb" style="border-radius:5px" placeholder="Enter Full Name" required>
							</div>
						<!--	<div class="col-sm-6 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Father's Name</label>
								<input class="form-control" type ="text"	name="Editbox2" id="tb" style="border-radius:5px" placeholder="Enter Father's Name" required	>
							</div>-->
						</div>					
						
						<div class="row">
							<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Gender <font style="color:red">*</font></label>
									<select class="form-control"  id="tb" name="Combobox1" style="border-radius:5px" required >
											<option>~Select Gender~</option>
											<option>Male</option>
											<option>Female</option>
									</select>
							</div>	
							<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Date of birth <font style="color:red">*</font></label>
								<input class="form-control" type ="date" name="Calender1" id="tb" style="border-radius:5px" placeholder="date of birth" required>
							</div>	
							<!--<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Weight</label>
								<input class="form-control"type ="text"	name="Editbox3" id="tb" style="border-radius:5px" placeholder="Enter Weight in Kg">
							</div>-->	
							<div class="col-sm-6 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Blood group <font style="color:red">*</font></label>
								<select class="form-control" id="tb" name="Combobox2" style="border-radius:5px" required>
								<option>~Select Blood Group~</option>
								<option>A+</option>
								<option>AB+</option>
								<option>B+</option>
								<option>O+</option>
								<option>O-</option>
								<option>A-</option>
								<option>AB-</option>
								<option>B-</option>
								</select>
							</div>							
						</div>
						<div class= "row">
							<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Address :</label>
							</div>	
						</div>
						<div class="row">
						<!--<div id="wait" style="display:none;width:100px;height:140px;position:absolute;top:50%;left:47%;padding:2px;"><img src='images/demo_wait.gif' width="80" height="80" /><br>&nbsp&nbsp&nbspLoading... </div>-->
						
						<div class="col-sm-3 form-group">
								
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Country</label>
									<select class="form-control" readonly="true" onchange="print_state('state',this.selectedIndex);" id="country"  name="country" style="border-radius:5px" required >
										<option>India</option>
										
											
								
									</select>
																											
							</div>		
							<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">State</label>
								<select class="form-control" readonly="true" onchange="print_district('district',this.selectedIndex);" id="state"  name="state"  style="border-radius:5px" required	>
										<option>Uttarakhand</option>
								</select>
									
									
							</div>
							<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">District <font style="color:red">*</font></label>
								<select class="form-control" onchange="print_city('city',this.selectedIndex);" id="district"  name="district" style="border-radius:5px"	required>
									<option>~Select District~</option>
								</select>
								 
							</div>		
							<div class="col-sm-3 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">City <font style="color:red">*</font></label>
								<select class="form-control"  name="city" id="city" style="border-radius:5px" required	>
										<option>~Select City~</option>
								</select>
							</div>	
							<script language="javascript">print_district("district");</script>
						</div>						
							
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">E-mail Id <font style="color:red">*</font></label>
						<input type ="email"	name="Editbox5" id="tb" style="border-radius:5px" placeholder="E-mail-id" class="form-control" required>
					</div>	
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Password <font style="color:red">*</font></label>
						<input type ="password"	name="Passwordbox1" id="tb" style="border-radius:5px" placeholder="Password" class="form-control" required>
					</div>
						<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Contact Number <font style="color:red">*</font></label>
						<input type ="text"	name="Editbox6" id="tb" style="border-radius:5px" placeholder="Contact Number"  class="form-control" required>
					</div>		
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Alternate Number</label>
						<input type ="text"	name="Editbox7" id="tb" style="border-radius:5px" placeholder="Alternate Number" class="form-control">
					</div>	
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Upload Your Image</label>
						<input  id ="tb" type="file" name="filetoupload" accept="image/gif, image/jpeg, image/png"  class="form-control">
					</div>
					<button id ="tb" name="send" class="b but btn-lg " ><font style="font-family:arial;font-size:10pt" align="center">Register Now</font></button>
					</div>
				</form> 
				</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			
			<!-- Registration-->
									
										
											
											
								
							
				
				</div>
			
			<?php
			include("footer.php");
			?>
	
	</body>
	
	
</html>