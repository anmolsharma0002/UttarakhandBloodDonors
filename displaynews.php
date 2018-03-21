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
		<?php
		include("head.php");
		?>
		
		<div class="panel panel-default" style="border-color:red;border-radius:10px">
				<div class="panel-heading" align= "center" style="font-family:arial black;background-color:red;color:white;border-radius:10px" >Latest News </div>
        <div class="panel-body ">
			
			<div class="well" style="background-color:transparent">
			
				
				<?php
				  include("db.php");
				  $id=$_GET['rd'];
				  $yu=mysqli_query($cn,"select p_date,desp from news where pid='$id' ") ;
                  while($row=mysqli_fetch_array($yu))
				  {  
				  ?>
					<!--<div style="border-radius:4px">-->
                       	
				<div  class="row">
					<!--<div class="col-sm-12">-->
							
					<div class="col-sm-12 form-group">
						
							
					
							
								<div class="row">
									
									<center>Posted On :<b><font style="font-size:10pt"><?php echo $row['p_date']?></font></b></center><br>
									<b><font style="font-size:10pt"><?php echo $row['desp']?></font> </b>
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