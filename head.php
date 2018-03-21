<! DOCTYPE HTML>

<head>
    <title>Uttarakhand Blood Donors</title>
    <link href="images/1.ico" rel="shortcut icon">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script  type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #tb {
            box-shadow: 5px 5px 20px rgb(145, 145, 145);
        }


        #tlb,
        #lpp,
        #tbbb,
        #tbb {

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

        <!--logo adjustable size depend on screen-->
        /* Only affects 1600px width and higher */

        @media only screen and (min-width: 1600px) {
            .logo {
                font-size: 72px;
            }
        }

        /* Only affects 1200px-1600px width */

        @media only screen and (max-width: 1600px) {
            .logo {
                font-size: 48px;
            }
        }

        /* Only affects 900px-1200px width */

        @media only screen and (max-width: 1200px) {
            .logo {
                font-size: 36px;
            }
        }

        /* Only affects 600px-900px width */

        @media only screen and (max-width: 900px) {
            .logo {
                font-size: 32px;
            }
        }

        * Only affects 400-600px width */ @media only screen and (max-width: 600px) {
            .logo {
                font-size: 24px;
            }
        }

        /* Only affects 400px width and lower */

        media only screen and (max-width: 400px) {
            .logo {
                font-size: 20px;
            }
        }

        <!--logo icon adjustable size depends on screen-->
        /* Only affects 1600px width and higher */

        @media only screen and (min-width: 1600px) {
            .licon {
                height: 93px;
                width: 183px;
            }
        }

        /* Only affects 1200px-1600px width */

        @media only screen and (max-width: 1600px) {
            .licon {
                height: 93px;
                width: 183px;
            }
        }

        /* Only affects 900px-1200px width */

        @media only screen and (max-width: 1200px) {
            .licon {
                height: 68px;
                width: 123px;
            }
        }

        /* Only affects 600px-900px width */

        @media only screen and (max-width: 900px) {
            .licon {
                height: 68px;
                width: 123px;
            }
        }

        * Only affects 400-600px width */ @media only screen and (max-width: 600px) {
            .licon {
                height: 45px;
                width: 78px;
            }
        }

        /* Only affects 400px width and lower */

        media only screen and (max-width: 400px) {
            .licon {
                height: 45px;
                width: 78px;
            }
        }





        .button {
            background-color: white;
            border: none;
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


        .button1:hover {
            background-color: red;
            font-family: arial black;
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);


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

        .hide {
            display: none;

        }

        .nav-button {
            font-family: arial;
            font-size: 9pt;


        }

        .fa-nav {
            color: #f44336;
            ;
            margin-right: 2px;
        }

        .navbar-brand {
            float: left;
        }
        .bg-cover{
            padding-top: 15rem;
        }

       
    </style>
</head>




<body>


    <div class="container">
        <nav class="container navbar navbar-default navbar-fixed-top" style="background-color:white">
            <div class="navbar-header ">
<button class="navbar-toggle" data-toggle="collapse" data-target="#colnav">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                <a class="navbar-brand" href="#">
                    <font style="font-famly:arial black;font-size:14pt;color:#f44336;">Uttarakhand Blood Donors</font>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="colnav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="nav-button"><i style="font-size:16px;" class="fa fa-home fa-nav"></i>Home</a></li>


                    <li><a href="aboutus.php" class="nav-button"><i style="font-size:16px;" class="fa fa-users fa-nav"></i>About us</a></li>

                    <li><a href="services.php" class="nav-button"><i style="font-size:16px;" class="fa fa-gift fa-nav" ></i>Services</a></li>
                    <li><a href="contactus.php" class="nav-button"><i style="font-size:16px;" class="fa fa-envelope fa-nav"></i>Contact us</a></li>
                    <li><a href="needblood.php" class="nav-button"><i style="font-size:16px;" class="fa fa-medkit fa-nav"></i>Post Blood Request</a></li>
                    <li><a href="newdonor.php" class="nav-button"><i style="font-size:16px;" class="fa fa-user fa-nav"></i>Donor Register</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal" class="nav-button"><i style="font-size:16px;" class="fa fa-user-circle fa-nav" ></i>User Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="bg-cover jumbotron text-center" style="background:white">

            <img src="images/logo_new.png" alt="logo" height="150px">
        </div>
        <div class="row">

            <div class="col-sm-3" align="left" style="margin-top:30px">
                <a href="bloodfacts.php" style="text-decoration:none">
                    <font style="font-size:10pt">Blood Facts |</font>
                </a>
                <a href="feedback.php" style="text-decoration:none">
                    <font style="font-size:10pt">Feedback |</font>
                </a>
                <a href="#adminmodal" data-toggle="modal" data-target="#adminmodal" style="text-decoration:none">
                    <font style="font-size:10pt"><i class="fa fa-user-circle"></i>&nbspAdmin</font>
                </a>
                <br>
                <font style="font-family:arial;font-size:10pt"><i class="fa fa-phone" style="font-size:10pt"></i>&nbsp+91-8958719670</font>


            </div>

        </div>


        <hr>



    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" method="post" action="ulogin.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="color:red">User Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <label class="label-control" style="font-family:arial">Email</label>
                                    <input class="form-control" type="email" placeholder="Enter email Id" name="Editbox1" required>
                                </div>
                                <div style="margin-top:16px" class="form-group">
                                    <label class="label-control" style="font-family:arial">Password</label>
                                    <input class="form-control" type="password" placeholder="Enter Password" name="Editbox2" required>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="b but">Login</button>
                        <a href="#" data-toggle="modal" data-target="#forgotpass" style="text-decoration:none">
                            <font style="font-family:arial;font-size:10pt">forgot Password?</font>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" method="post" action="viewpass.php" target="viewpass.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="color:red">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body ">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <label class="label-control" style="font-family:arial">Email</label>
                                    <input class="form-control" type="email" placeholder="Enter email Id" name="email" required>
                                </div>
                                <div style="margin-top:16px" class="form-group">
                                    <label class="label-control" style="font-family:arial">Date of birth</label>
                                    <input class="form-control" type="date" name="dob" style="font-size:10pt;border-radius:5px" required>


                                </div>
                                <div style="margin-top:16px" class="form-group">
                                    <label class="label-control" style="font-family:arial">Blood Group</label>
                                    <select class="form-control" name="bloodgroup" style="font-size:10pt;border-radius:5px" required>
								<option>~Choose your Blood Group~</option>
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


                            </div>
                            <div class="col-sm-1"></div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="b but">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>










    <div class="modal fade" id="adminmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" method="post" action="alogin.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="color:red">Admin Login</h4>
                    </div>
                    <div class="modal-body ">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <label class="label-control" style="font-family:arial">Email</label>
                                    <input class="form-control" type="textbox" placeholder="Enter email Id" name="Editbox1" required>
                                </div>
                                <div style="margin-top:16px" class="form-group">
                                    <label class="label-control" style="font-family:arial">Password</label>
                                    <input class="form-control" type="password" placeholder="Enter Password" name="Editbox2" required>


                                </div>


                            </div>
                            <div class="col-sm-1"></div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="b but">Login</button>

                    </div>
                </form>
            </div>
        </div>
    </div>










</body>

</html>
