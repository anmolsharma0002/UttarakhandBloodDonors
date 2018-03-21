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
								.css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
								
			</style>
			
			
			
			
			
			
			
			
			
			
	</head>
	
	<body >
		<div class="container"> 
		<div class="panel panel-default" style="border-color:red">
				<div class="panel-heading" align= "center" style="background-color:red;color:white" >Blood request details</div>
        <div class="panel-body ">
			
			<div class="well" style="background-color:transparent">
			
				
				<?php
				  include("db.php");
				  $ap=$_GET['rt'];
				  $yu=mysqli_query($cn,"select patient_name,gender,req_blood_group,req_unit,hospital_address,country,state,district,city,req_date,contact_no,alternate_no,reason_for_blood,post_date from needblood where uid='$ap'") ;
                  while($row=mysqli_fetch_array($yu))
				  {  
				  ?>
					<!--<div style="border-radius:4px">-->
                       	
				<div  class="row">
					<!--<div class="col-sm-12">-->
							<div class="row form-group" align="center" >
								<div class="form-group" >
									<font style="font-size:10pt">&nbsp<b>Posted on:</b> </font>
									<b><font style="font-size:10pt"><?php echo $row['post_date']?></font></b>
				
								</div>
							</div>
					<div class="col-sm-6 form-group">
						<div class="row">
							<div class="col-sm-4 form-group">
								<font style="font-size:10pt;color:black">&nbsp<b>Patient Details:</b> </font>
							</div>
					
							<div class="col-sm-8 form-group">
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>Patient Name:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['patient_name']?></font></b>
								</div>
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>Gender:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['gender']?></font> </b>
								</div>
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>Required Blood Group:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['req_blood_group']?></font></b>
								</div>
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>Required Unit:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['req_unit']?> unit/units</font> </b>
								</div>
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>When Required:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['req_date']?></font> </b>
								</div>
								
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>Contact Number:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['contact_no']?>, <?php echo $row['alternate_no']?></font> </b>
								</div>
								<div class="row">
									<font style="font-size:10pt;color:black">&nbsp<b>Reason for Blood:</b> </font>
									<b><font style="font-size:10pt;color:red"><?php echo $row['reason_for_blood']?></font> </b>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 form-group " >
						<div class="row">
								<div class="col-sm-4 form-group">
										<font style="font-size:10pt;color:black"><b>Hospital :(Name/Address)</b> </font>
								</div>
								<div class="col-sm-8 form-group">
									<div class="row">
										<b><font style="font-size:10pt;color:red"><?php echo $row['hospital_address']?>,&nbsp<?php echo $row['city']?>(&nbsp<?php echo $row['district']?>)&nbsp<?php echo $row['state']?>,&nbsp<?php echo $row['country']?>    </font> </b>
									</div>
								</div>
								
						</div>
					</div>	
				<!--	</div>-->
				</div>
					
				
					<?php
					
				  }
				  ?>
				
			</div>
			<button class="b but" onclick="closeWin()">Close</button>

<script>




function closeWin() {
    this.close();
}
</script>



				</div>
			</div>


		</div>
		<?php
		
		include("footer.php");
		
		?>
	</body>
</html>