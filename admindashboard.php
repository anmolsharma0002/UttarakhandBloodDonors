<?php
include("adminsession.php");
?>

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
		<?php
		include("adminhead.php");
		?>
		
		<div class="container">
			
				<!--	<div class="row">
								<font style="font-family:arial black;color:red;font-size:16pt"><i class="fa fa-cogs"></i>&nbspDashboard</font>
					</div>			
			
						<hr>
			
			<div class="col-sm-3">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<th><a href="addcity.php" style="text-decoration:none;color:red">Add Cities</a></th>
						</tr>
						<tr>
							<th><a href="inbox.php" style="text-decoration:none;color:red">Inbox</a></th>
        				</tr>
					</tbody>
				</table>
			</div> -->
			<div class="row" style="height:30px"></div>
			<div class="row" align="center">
				 <font Style="font-size:22pt">Welcome to Admin Panel</font>
			</div>
		</div>
		

				<?php
				
				include("footer.php");
				
				?>
			
			
	
	 
	</body>
	
	
</html>