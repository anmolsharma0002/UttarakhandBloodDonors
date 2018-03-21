<! DOCTYPE HTML>
	<head>
			<title>Uttarakhand Blood Donors</title>
			<link href= "images/1.ico"  rel= "shortcut icon">
			<link href="css/font-awesome.min.css" rel="stylesheet">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script type="text/javascript" src="jquery-3.2.1.min.js"> </script>
			<script src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">	
			<link rel="stylesheet" href="w3.css">
			
		
			<style>
			
			#tb{
	
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
			
			
			
			
			
					<div class="col-sm-4"  >
					
						<div class="row form-group container">
							<font style="font-family:arial black;color:red;font-size:12pt" ><p> <i class="fa fa-comments-o"></i>&nbsp&nbspFeedback</p></font>
						</div>	
							<hr>
						<div class="row form-group" align="center">	
						 <font style="font-family:arial;font-size:10pt"><b>For any queries please mail us on </b><br>info@uttarakhandblooddonors.tk</font>
						</div> 
						
							
					</div>
					
				
			
			
								
			
			
			<!-- Registration-->
				<div class="col-sm-4" >	
				


									
									<form class="form-horizontal" action="sendmessage.php" method="post">
										<div class="form-group">
										<font style="color:Black;font-family:arial black;font-size:14pt">Send Us a Feedback...</font>
										</div>
										<div  class="form-group">
											<input class="form-control" type ="text"	name="Editbox1" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Full Name"	required>
										</div>
										<div class="form-group">
											<input  class="form-control" type ="email" name="Editbox2" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="E-mail Id">
										</div>
										<div class="form-group">
											<input class="form-control" type ="text"	name="Editbox3" id="tb" style="height:30px;width:100%;border-radius:5px" placeholder="Contact Number">
										</div>
										<div class="form-group">
											<textarea class="form-control" name="Editbox4" id="tb" style="width:100%;border-radius:5px" placeholder="Message..." required></textarea>
										</div>
										<div class="form-group">
											<button id ="tb" name="submit" class="b but"  style="width:100px;border-radius:8px"><font style="font-family:arial;font-size:10pt"><i class="fa fa-paper-plane"></i>&nbsp&nbspSend</font></button>				
											
											










											
											
										</div>
									</form>
									
									










									
									
					</div>
					<div class="col-sm-4" align="center">
						<img src="images/bd.jpg" style="width:100%">
					</div>
		
			</div>
			
				<?php
				include("footer.php");
				?>

	</body>
	
	
</html>