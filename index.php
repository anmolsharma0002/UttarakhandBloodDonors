<! DOCTYPE HTML>

<head>
    <title>Uttarakhand Blood Donors</title>
    <link href="images/1.ico" rel="shortcut icon">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="cont.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        #tb {

            box-shadow: 5px 5px 20px rgb(145, 145, 145);

        }

        #country,
        #state,
        #district,
        #city {

            box-shadow: 5px 5px 20px rgb(145, 145, 145);

        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none
        }

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
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */

        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }









        body,
        html {
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

    </style>




</head>

<body>
    
<?php
include("head.php");
?>

    <div class="container">

        <div class="row container">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="5" direction="left">
                <p>
                    <font style="color:red">Warning : </font>Please keep aware, Do not pay any type of fees to any blood donor ,if any donor ask for money directly inform to us Uttarakhand Blood Donors or Call our Nearest Team members</p>
            </marquee>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3 ">
                <div class="panel panel-default" style="border:none">
                    <div class="panel-heading" id="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center">
                        <i class="fa fa-search"> </i>&nbsp Search Blood Donors
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="donorlist.php" method="post">
                            <div class="form-group" style="margin-top:10px">
                                <select class="form-control" name="blood" id="tb" style="height:30px;width:100%;border-radius:5px">
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

                            <div class="form-group" style="margin-top:-10px">
                                <select class="form-control" readonly="true" onchange="print_state('state',this.selectedIndex);" name="country" id="country" style="height:30px;width:100%;border-radius:5px">
										<option>India</option>
											
									</select>






                            </div>

                            <div class="form-group" style="margin-top:-10px">
                                <select class="form-control" readonly="true" onchange="print_district('district',this.selectedIndex);" name="state" id="state" style="height:30px;width:100%;border-radius:5px">
										<option>Uttarakhand</option>
				
									</select>


                            </div>

                            <div class="form-group" style="margin-top:-10px">
                                <select class="form-control" onchange="print_city('city',this.selectedIndex);" name="district" id="district" style="height:30px;width:100%;border-radius:5px">
										<option>~Select District~</option>
		
									</select>


                            </div>

                            <div class="form-group" style="margin-top:-10px">
                                <select class="form-control" name="city" id="city" style="height:30px;width:100%;border-radius:5px">
										<option>~Select City~</option>
									</select>
                            </div>

                            <div class="form-group" style="margin-top:10px" align="center">
                                <button id="tb" class="b but" style="width:100px"><font style="font-family:arial;font-size:10pt"><i class="fa fa-search"></i>&nbsp&nbspSearch</font></button>
                            </div>
                            <script language="javascript">
                                print_district("district");

                            </script>
                        </form>
                        <!-- <a href="listofdonors.php" style="text-decoration:none;color:red" target="listofdonors.php">
							
								<font style="font-family:arial;font-size:10pt">
										<i class="fa fa-mail-forward"></i>Click to see All Registered Donors
								</font>
							</a>-->
                    </div>
                </div>

            </div>
            <!-- search donor coloumn ends ->>
						
						<!-- slides -->
            <div class="col-sm-6">
                <center>
                    <div class="slideshow-container">


                        <div class="mySlides fade">
                            <img src="images/23.jpg" style="height:300px;width:100%">

                        </div>

                        <div class="mySlides fade">
                            <img src="images/22.jpg" style="height:300px;width:100%">

                        </div>

                        <div class="mySlides fade">
                            <img src="images/42.jpg" style="height:300px;width:100%">

                        </div>
                        <div class="mySlides fade">
                            <img src="images/37.jpg" style="height:300px;width:100%">

                        </div>
                        <div class="mySlides fade">
                            <img src="images/2.jpg" style="height:300px;width:100%">

                        </div>
                        <div class="mySlides fade">
                            <img src="images/18.jpg" style="height:300px;width:100%">

                        </div>
                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                </center>
            </div>


            <div class="col-sm-3">
                <div class="panel panel-default" style="border-radius:8px">
                    <div class="panel-heading" id="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center">
                        <i class="fa fa-envelope"></i>&nbsp Recent Blood Request
                    </div>
                    <div class="panel-body">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2.2" direction="up" style="height:100px">

                            <?php
										include("db.php");
										// where  `post_date` >= DATE(NOW()) - INTERVAL 7 DAY
										$yu=mysqli_query($cn,"select uid,req_blood_group,req_unit,hospital_address,req_date,post_date from needblood  order by uid desc ") ;
										while($row=mysqli_fetch_array($yu))
											{  
										?>
                                <!--<div style="border-radius:4px">-->

                                <a href="request.php?rt=<?php echo $row['uid']?>" style="text-decoration:none;font-size:8pt" target="request.php">

                                    <p>
                                        <b><font style="font-size:9pt;color:black"><?php echo $row['post_date']?>&nbsp :</font></b>
                                        <font style="font-size:8pt;color:black">&nbspRequired&nbsp </font>
                                        <b><font style="font-size:8pt;color:red"><?php echo $row['req_blood_group']?></font></b>

                                        <font style="font-size:8pt;color:black">&nbspat&nbsp </font>
                                        <b><font style="font-size:8pt;color:red"><?php echo $row['hospital_address']?></font></b>

                                    </p>
                                </a>

                                <!--</div>-->
                                <hr>
                                <?php
											}
										?>
                        </marquee>
                    </div>
                    <!-- row end-->
                </div>
                <!-- end of panel-default-->




                <div class="panel panel-default" style="border-radius:8px">
                    <div class="panel-heading" id="tb" style="font-family:arial black;font-size:10pt;border-radius:8px;background:red;color:white" align="center">
                        <i class="fa fa-envelope"></i>&nbsp Latest Updates
                    </div>
                    <div class="panel-body">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2.2" direction="up" style="height:100px">
                            <?php
										include("db.php");
										//
										//$yu=mysqli_query($cn,"select pid,p_date,title,desp from news where `p_date` BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY) order by pid desc ") ;
										$yu=mysqli_query($cn,"select pid,p_date,title,desp from news  order by pid desc LIMIT 7 ") ;
										while($row=mysqli_fetch_array($yu))
											{  
										?>
                                <!--<div style="border-radius:4px">-->

                                <a href="displaynews.php?rd=<?php echo $row['pid']?>" style="text-decoration:none;font-size:8pt" target="displaynews.php">

                                    <p>
                                        <b><font style="font-size:9pt;color:black"><?php echo $row['p_date']?>&nbsp :</font></b>

                                        <b><font style="font-size:8pt"><?php echo $row['title']?></font></b>
                                    </p>
                                </a>

                                <!--</div>-->

                                <?php
											}
										?>

                        </marquee>
                        <a href="allnews.php" style="text-decoration:none">
                            <font style="font-size:8pt">more news>></font>
                        </a>
                    </div>
                    <!-- row end-->
                </div>









            </div>
            <!--end of col-sm-3 -->
        </div>
        <!-- end of the row slides request search-->
    </div>




    <br><br>

    <div class="container" align="center">
        <div class="row">
            <font style="font-family:arial black;color:red;font-size:16pt">
                <p>Save Life ! Donate Blood !</p>
            </font>

        </div>
        <center>
            <hr id="tb" style="height:1px">
        </center>
    </div>



    <br><br>


    <!--  below sldes 	-->


    <?php
				include("3service.php");
				?>




    <?php
				include("footer.php");
				?>


    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

    </script>
</body>

</html>
