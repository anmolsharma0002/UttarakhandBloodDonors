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
	<body >
		<div class="container">
		<?php
		include("head.php");
		?>
							
							<div class="panel panel-default" style="border-radius:8px">
								<div class="panel-heading" id ="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center" >
									<i class="fa fa-envelope"></i>&nbsp News Updates 
								</div>
								<div class="panel-body">	
									
										<?php
										include("db.php");
									
										//$yu=mysqli_query($cn,"select pid,p_date,title,desp from news where `p_date` BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY) order by pid desc ") ;
										$yu=mysqli_query($cn,"select pid,p_date,title,desp from news  order by pid desc ") ;
										while($row=mysqli_fetch_array($yu))
											{  
										?>
												<!--<div style="border-radius:4px">-->
					
													<a href="displaynews.php?rd=<?php echo $row['pid']?>" style="text-decoration:none;font-size:8pt" target="displaynews.php">
													
														<p>
															<b><font style="font-size:9pt;color:black"><?php echo $row['p_date']?>&nbsp :</font></b>
															
															<b><font style="font-size:8pt"><?php echo $row['title']?></font></b>
															<hr>
														</p>
													</a>
													
												<!--</div>-->
												
										<?php
											}
										?>
										
									
									
								</div><!-- row end-->
							</div>
							<?php
							include("footer.php");
							?>
		</div>								
	</body>
</html>