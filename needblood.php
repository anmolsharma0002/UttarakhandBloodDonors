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
								
			</style>
			
			
			
			
			
			
			
			
			
			
	</head>
	
	<body >
			<div class="container">
				<?php
				include("head.php");
				?>
			
			
			<div class="panel panel-default" style="border-radius:12px">
									<div class="panel-heading" id ="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center" >
									<i class="fa fa-envelope"></i>&nbsp&nbspBlood Request	
									</div>
								</div>
								
							




	<div class="col-lg-12 well" style="background-color:white;border-color:red;border-radius:20px">
			<div class="row">
				<form method="post" action="bloodrequest.php" >
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-8 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Patient Name <font style="color:red">*</font></label>
								<input class="form-control" type ="text"	name="Editbox1" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Patient Name" required	>
							</div>
							<div class="col-sm-4 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Gender <font style="color:red">*</font></label>
								<select class="form-control" name="Combobox1"  id="tb" style="height:30px;width:100%;border-radius:5px" required>
								<option>~Select Gender~</option>
								<option>Male</option>
								<option>Female</option>
								</select>
							</div>
						</div>					
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Required Blood Group <font style="color:red">*</font></label>
									<select class="form-control" name="Combobox2" id="tb" style="height:30px;width:100%;border-radius:5px" required	>
								<option>~Required Blood Group~</option>
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
							<div class="col-sm-6 form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Need Unit/Units of blood</label>
								<input class="form-control" type ="textbox"	name="Editbox2" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Need unit of Blood">
							</div>	
														
						</div>
						<div class="form-group">
								<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Hospital Name <font style="color:red">*</font></label>
								<textarea class="form-control" name="Editbox3" id="tb" col="3" style="width:100%;border-radius:5px" placeholder="Hospital Name & Address..."	required></textarea>
								
						</div>
						<div class="row">
						
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
				<!--	<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Doctor Name</label>
						<input class="form-control" type ="text"	name="Editbox4" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Enter Doctor Name"	>
					</div>	-->	
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">When Required <font style="color:red">*</font></label>
						<input class="form-control" type ="date" name="cal" id="tb" style="height:30px;width:100%;border-radius:5px" required>
					</div>	
					<!--<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Contact Name</label>
						<input class="form-control" type ="text"	name="Editbox5" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Contact Name"	>
					</div>-->
						<!--<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Patient Address</label>
						<textarea class="form-control" name="Editbox6" id="tb" col="3" style="width:100%;border-radius:5px" placeholder="Patient Address..."></textarea>
					</div>-->	
				<!--	<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">E-mail</label>
						<input class="form-control" type ="text"	name="Editbox7" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="E-mail Id"	>
					</div>	-->
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Contact Number <font style="color:red">*</font></label>
						<input class="form-control" type ="text"	name="Editbox8" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Contact Number" required	>
					</div>
						<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Alternate Number</label>
						<input class="form-control" type ="text"	name="Editbox9" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Alternate Number"	>
					</div>	
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Disease</label>
						<textarea class="form-control" id="tb" name="Editbox10" col="3" style="width:100%;border-radius:5px" placeholder="Disease..."	></textarea>
					</div>
					<button id ="tb" name="sendreq" class="b but btn-lg " ><font style="font-family:arial;font-size:10pt" align="center"><i class="fa fa-paper-plane"></i>&nbsp&nbspSend Request</font></button>
					</div>
				</form> 
				</div>
	</div>

















							
		
		
		
		
		
			</div>
			<?php
			include("footer.php");
			?>
	</body>
</html>