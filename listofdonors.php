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
								.css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before
 {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
						

.hide{
  display:none;  
}						
								
								
								
			</style>
			
			
			
			
	</head>
	<body >
			
			
				
			
			
					<br><br>
			
			
					<div class="container" align="center">
				
		
						
						<font style="font-family:arial black;color:red;font-size:11spt" ><p> <i class="fa fa-users"></i>&nbsp&nbspList of All the Registered Blood Donors</p></font>
				
					</div>
					
					<hr>
			
				
			
			
							
							
							
							
				<div class="container-fluid">			
				
					<div class="table-responsive">
					
						<table class="table css-serial table-bordered"  >
							<thead>
								<tr  style="font-family:arial">
								<th>S No.</th>
							    <th>Photo  </th>
								<th>Full Name  </th>
														
								
								<th>Gender</th>
								
								
								<th>Blood group </th>
							
								<th>City </th>
								<th>District</th>
								<th>State </th>
								<th>Country </th>
				
								<th>Contact number </th>
								<th>Delete</th>
								</tr>
							</thead>
							<tbody>
							
							
							 
				 <?php
				  include("db.php");
				  $yu=mysqli_query($cn,"select full_name,father_name,gender,blood_group,country,state,district,city,street,email,password,email,contact_no,alternate_no,photo from newdonor where date<= now()-interval 3 month ");					
				  while($row=mysqli_fetch_array($yu))
				  {  
				  ?>
								<tr align="center" class="active">
								<td></td>
								<td><img src="<?php echo $row['photo'];?>" style="height:40px;border-radius:100px;width:40px;border:solid;border-width:2px"></td>
								<td><font style="font-size:8pt;color:black"><?php echo $row['full_name'] ?></font></td>
								
								<td><font style="font-size:8pt;color:black"><?php echo $row['gender']?></font></td>
								<td><font style="font-size:8pt;color:black"><?php echo $row['blood_group']?></font></td>
								
								<td><font style="font-size:8pt;color:black"><?php echo $row['city']?></font></td>
								<td><font style="font-size:8pt;color:black"><?php echo $row['district']?></font></td>
								<td><font style="font-size:8pt;color:black"><?php echo $row['state']?></font></td>
								<td><font style="font-size:8pt;color:black"><?php echo $row['country']?></font></td>
								<td class="hide"> <font style="font-size:8pt;color:black"><?php echo $row['email']?></font></td>
								<td><font style="font-size:8pt;color:black"><?php echo $row['contact_no']?> <br><?php echo $row['alternate_no']?> </font></td>
								<td>
								<form action="delete.php?rd=<?php echo $row['email'];?>" method="post">
								<button type="submit" name="del" style="font-size:8pt">Delete</button>
								
								</form>
								</td>
								</tr>
						<?php
				  }
				  ?>	
			
							</tbody>			
					</table>
					
					<center>
						<button  id ="tb" class="b but" onclick="printpage()">Print</button>
						<button id="tb" class="b but" onclick="closeWin()">Close</button>
					</center>
					</div>
				
					
			</div>
			
			
			
			
			
			<?php
			include("footer.php");
			?>
	</body>
	<script>
		function printpage(){
			window.print();
		}





function closeWin() {
    this.close();
}
</script>
	
	
</html>