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
			
										
										* {box-sizing:border-box}
										body {font-family: Verdana,sans-serif;}
										.mySlides {display:none}

											/* Slideshow container */
											.slideshow-container {
											max-width: 100%;
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
								<!--.button2
								{
										box-shadow: 0 0px 0px 0 rgba(0,0,0,0.30),0 30px 50px 0 rgba(0,0,0,0.19);
								
								}-->
								
								
								
								



								
			</style>
			
			
			
			
	</head>
	
	<body>
			<div class="container">
					<?php
						include("head.php");
					?>
			
			
			
			<br><br>
							<div class="row" align="center">
									
								 <font style="color:red;font-family:arial black">
								<i class="fa fa-search"></i>&nbsp&nbspSearch Below For a Donors Nearest you</font>
								
							</div>	
							
						<br><br>
		
			<!-- Registration-->
			<center>
			<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
						<div class="panel panel-default" style="border:none">
							<div class="panel-heading" id ="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center" >
								<i class="fa fa-search"> </i>&nbsp Search Blood Donors
							</div>
							<div class="panel-body">
							<div id="wait" style="display:none;width:100px;height:140px;position:absolute;top:50%;left:47%;padding:2px;"><img src='images/demo_wait.gif' width="80" height="80" /><br>&nbsp&nbsp&nbspLoading..</div>
							  <form class="form-horizontal" action="donorlist.php" method="post">
								<div class="form-group" style="margin-top:10px">
									<select class="form-control" name="blood" id="tb" style="height:30px;width:100%;border-radius:5px"	>
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
								
								<div  class="form-group" style="margin-top:-10px">
									<select class="form-control" readonly="true" onchange="print_state('state',this.selectedIndex);" name="country"  id="country" style="height:30px;width:100%;border-radius:5px">
										<option selected >India</option>
										
									</select>	
																									

									
									

								</div>
								
								<div class="form-group" style="margin-top:-10px">
									<select class="form-control" readonly="true" onchange="print_district('district',this.selectedIndex);"   name="state" id="state"   style="height:30px;width:100%;border-radius:5px"	>
										<option selected>Uttarakhand</option>
				
									</select>

											
								</div>
								
								<div class="form-group" style="margin-top:-10px">
									<select class="form-control" onchange="print_city('city',this.selectedIndex);"  name="district" id="district"  onchange="changecity()" style="height:30px;width:100%;border-radius:5px"	>
										<option>~Select District~</option>
		
									</select>
																	
								                               
								</div>
								
								<div class="form-group" style="margin-top:-10px">
									<select class="form-control" name="city" id="city" style="height:30px;width:100%;border-radius:5px"	>
										<option>~Select City~</option>
									</select>
								</div>
								
								<div class="form-group" style="margin-top:10px" align="center">
										<button id ="tb" class="b but" style="width:100px"><font style="font-family:arial;font-size:10pt"><i class="fa fa-search"></i>&nbsp&nbspSearch</font></button>
								</div>
								<script language="javascript">print_district("district");</script>
							  </form>
							</div>  
						</div>	
						</div>
						<div class="col-sm-3"></div>
						</div><!--end of the col-->
						</center>
		</div>
		
		

		
		
		
			<?php
				include("footer.php");
			?>
	
	</body>
	
	
</html>