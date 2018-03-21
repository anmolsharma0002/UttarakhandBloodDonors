<! DOCTYPE HTML>

<head>
    <title>Uttarakhand Blood Donors</title>
    <link href="images/1.ico" rel="shortcut icon">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="googlemap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">


    <style>
        #tb {

            box-shadow: 5px 5px 20px rgb(145, 145, 145);

        }

        body,
        html {
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


        .google-map {
            height: 5rem;
        }

        #map {
            height: 100%;
            width: 100%;
            border: 1px solid red;
        }






        .b {
            background-color: white;
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
            border-radius: 12px;
            box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);

        }


        .but:hover {
            background-color: #f44336;

            color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);


        }

        .css-serial {
            counter-reset: serial-number;
            /* Set the serial number counter to 0 */
        }

        .css-serial td:first-child:before {
            counter-increment: serial-number;
            /* Increment the serial number counter */
            content: counter(serial-number);
            /* Display the counter */
        }

    </style>










</head>

<body>
    <div class="container">


        <?php
					include("head.php");
				
					?>






        <div class="row container">

            <?php
				  include("db.php");
				  $blood=$_POST['blood'];
			
				  //$yu=mysqli_query($cn,"select full_name,father_name,gender,weight,blood_group,country,state,district,city,street,email,password,contact_no,alternate_no,photo from newdonor where blood_group='$blood' AND country='$country' AND state='$state' AND district='$district' AND city='$city' ") ;
					?>


                <font style="font-family:arial black;color:red;font-size:12pt">
                    <p> <i class="fa fa-users"></i>&nbsp&nbspDonor list of :&nbsp
                        <?php echo "$blood"?>
                    </p>
                </font>

        </div>

        <hr>










        <div class="table-responsive">

            <table class="table css-serial table-bordered">
                <thead>
                    <tr style="font-family:arial">
                        <th>S No.</th>
                        <th>Photo </th>
                        <th>Full Name </th>



                        <th>Gender</th>


                        <th>Blood group </th>

                        <th>City </th>
                        <th>District</th>
                        <th>State </th>
                        <th>Country </th>

                        <th>Contact number </th>
                    </tr>
                </thead>
                <tbody>

                    <?php
				  include("db.php");
				  $blood=$_POST['blood'];
				  $country=$_POST['country'];
				  $state=$_POST['state'];
				  $district=$_POST['district'];
				  $city=$_POST['city'];
				  $yu=mysqli_query($cn,"select full_name,gender,blood_group,country,state,district,city,email,password,contact_no,alternate_no,photo from newdonor where blood_group='$blood' AND country='$country' AND state='$state' AND district='$district' AND city='$city' ") ;
					
		
					
				 while($row=mysqli_fetch_array($yu))
				  {  
				  ?>
                        <tr align="center" class="active">
                            <td></td>
                            <td><img src="<?php echo $row['photo'];?>" style="height:40px;border-radius:100px;width:40px;border:solid;border-width:2px"></td>
                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['full_name']?>
                                </font>
                            </td>

                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['gender']?>
                                </font>
                            </td>


                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['blood_group']?>
                                </font>
                            </td>

                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['city']?>
                                </font>
                            </td>
                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['district']?>
                                </font>
                            </td>
                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['state']?>
                                </font>
                            </td>
                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['country']?>
                                </font>
                            </td>
                            <td>
                                <font style="font-size:10pt;color:black">
                                    <?php echo $row['contact_no']?>&nbsp&nbsp
                                    <?php echo $row['alternate_no']?> </font>
                            </td>


                        </tr>
                        <?php
				  }
				  ?>
                </tbody>
            </table>


        </div>


        <div class="google-map" id="map">Google Map
        
     
        </div>

 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaeAoh0mrxozf1WaRNWfSmfYHgKc_IzRQ&callback=initMap">
    </script>




    </div>
    <?php
			include("footer.php");
			?>
</body>


</html>
