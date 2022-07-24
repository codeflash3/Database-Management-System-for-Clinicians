<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
  <link rel="stylesheet" href="mainpage.css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
                'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: transparent;
        }

        .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 22px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        .topnav a:hover {
            background-color: black;
            color: white;
        }

        .topnav a.active {
            background-color: black;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        .op {
            background-image: url("andy-holmes-rCbdp8VCYhQ-unsplash.jpg");
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        .parallax {

            background-image: url("medical.jpg");
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .box {
            margin: 0;
            padding: 50px;
            text-align: center;
            border-style: solid;
            border-bottom-color: lightgrey;
            border-top: white;
            border-left: white;
            border-right: white;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            padding: 64px;

        }

        .row:after {
            content: "";
            display: table;
            clear: both
        }

        .column-66 {
            float: left;
            width: 66.66666%;
            padding: 20px;
        }

        .column-33 {
            float: left;
            width: 33.33333%;
            padding: 20px;
        }

        .large-font {
            font-size: 35px;
        }

        .xlarge-font {
            font-size: 64px;
        }

        .button {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            background-color: red;
        }

        img {
            display: block;
            height: auto;
            max-width: 100%;
        }

        @media screen and (max-width: 1000px) {

            .column-66,
            .column-33 {
                width: 100%;
                text-align: center;
            }

            img {
                margin: auto;
            }

            h1 {
                font-family: sans-serif;
                font-weight: normal;
                font-size: 25px;
                letter-spacing: 4px;
                color: #555;
                text-align: center;
                margin-bottom:20px;
            }


        }

        .social-media {
            display: flex;
            padding-bottom: 40px;
            justify-content: center;
            margin-bottom: 40px;
            border-style: solid;
            border-color: lightgray;
            border-top-color: white;
            border-left-color: white;
            border-right-color: white;


        }

       


        a i {
            font-size: 45px;
            color: #777;
            letter-spacing:7px;
        }

        a:hover .fa-facebook {
            color: #3b5998;
        }

        a:hover .fa-twitter {
            color: deepskyblue;
        }

        a:hover .fa-whatsapp {
            color: limegreen;
        }

        a:hover .fa-instagram {
            color: hotpink;
        }

        a:hover .fa-youtube {
            color: orangered;
        }

        .fa-facebook {
            color: #3b5998;

        }

        .fa-twitter {
            color: #00aced;
        }

        .fa-instagram {
            color: #517fa4;
        }

        .fa-youtube {
            color: #bb0000;
        }

        .fa-facebook:hover,
        .fa-twitter:hover,
        .fa-instagram:hover,
        .fa-youtube:hover {
            color: grey;
        }

        .fa-facebook,
        .fa-twitter,
        .fa-instagram,
        .fa-youtube,
        .fa-globe,
        .fa-android,
        .fa-globe,
        .fa-sticky-note,
        .fa-phone {
            font-size: 1.8 rem;
            margin: 2px;
        }

        footer {
            background-color: #3f3f3f;
            color: #d5d5d5;
            padding-top: 2rem;
            padding-bottom: 2px;
        }



        footer li {
            list-style: none;
            padding: 5px;


        }

        footer a {
            color: #d5d5d5;
            margin: 3px auto;
            font-size: 18px;
        }

        footer a:hover {
            color: white;
            text-decoration: none;
        }

        footer h5 {
            color: #d5d5d5;
        }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="mainpage.php">WTL Mini Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="mainpage.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="viewrecords.php">Records</a>
    
        <a class="nav-item nav-link" href="#">Contact us</a>
        <a class="nav-item nav-link" href="#">About Us</a>

      </div>

    </div>
    <form class="form-inline my-2 my-lg-0">
      <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" href="#">Log Out</a>
    </form>
  </nav>

  <h1 class="header"
        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;font-size: 50px;font-weight: 150;">
        DB System for Clinicians
    <div class="parallax"></div>
    <h2 class="header"
        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;font-size: 50px;font-weight: 150;">
        Why it is important?</h2>
    <div class="box" style="height:130%;background-color:transparent;font-size:20px;margin:0px">
        <p>
        Clinical data is a staple resource for most health and medical research.
         Clinical data is either collected during the course of ongoing patient care or as part of a formal clinical trial program.
         The purest type of electronic clinical data which is obtained at the point of care at a medical facility, hospital, clinic or practice. Often referred to as the electronic medical record (EMR), 
         the EMR is generally not available to outside researchers. The data collected includes administrative and demographic information, diagnosis, treatment,
          prescription drugs, laboratory tests, physiologic monitoring data, hospitalization, patient insurance, etc.
        </p>
    </div>
    <div class="parallax1"></div>
    

    <!-- The App Section -->
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Important Records</b></h1>
                <h1 class="large-font" style="color:lightblue;"><b>Perks of storing Data</b></h1>
                <p><span style="font-size:32px">M</span>edical records collect valuable and sensitive information about the health of an individual. This includes their well being, medical conditions they suffer from and required medical treatments.
                 The need to retain medical records for long periods of time, makes them complex to manage.
                    dimensions.</p>
                <button class="button" style="background-color:lightskyblue">Read more</button>
            </div>
            <div class="column-33">
                <img src="records.jpg" width="335" height="471">
            </div>
        </div>
    </div>

    <!-- Clarity Section -->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">
            <div class="column-33">
                <img src="medicalrecord.png" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Accessibility</b></h1>
                <h1 class="large-font" style="color:lightblue;"><b>Easily Accessible</b></h1>
                <p><span style="font-size:24px">I</span>nformation contained in patients’ medical records about physicians’ prescribing practices or other treatment decisions can serve many valuable purposes, such as improving quality of care. However, ethical concerns arise when access to such information is sought for marketing purposes on behalf of commercial
                 entities that have financial interests in physicians’ 
                 treatment recommendations, such as pharmaceutical or medical device companies. </p>
                <button class="button" style="background-color:lightskyblue">Read More</button>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid ">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="" alt="LOGO">
                    <br><br>
                    <h5>
                        Mobile Site and apps
                    </h5>

                    <ul class="sites">
                        <li>
                            <i class="fas fa-globe"></i>
                            <a href="">www.oursitename.com</a>
                        </li>
                        <li>
                            <i class="fab fa-android"></i>
                            <a href="">OurAppName</a>
                        </li>
                        <li>
                            <i class="fab fa-apple"></i>
                            <a href="">OurAppName</a>
                        </li>
                    </ul>


                </div>

                <div class="col-md-4">

                    <h5>Follow Us On</h5>

                    <ul class="social">
                        <li>
                            <i class="fab fa-facebook"></i>
                            <a href="">
                                facebook
                            </a>
                        </li>
                        <li>
                            <i class="fab fa-twitter"></i>
                            <a href="">
                                twitter
                            </a>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                            <a href="">
                                instagram
                            </a>

                        </li>
                        <li>
                            <i class="fab fa-youtube"></i>
                            <a href="">
                                youtube
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-4 text-center">
                    <h5>Community</h5>
                    <ul>
                        <li><i class="far fa-sticky-note"></i><a href="">Write for Us</a></li>
                        <li><i class="fas fa-phone"></i><a href="">Contact Us</a></li>
                        <li><a href="">Give a feedback!</a></li>
                    </ul>
                </div>

                <div class="col-12">
                    <p>&copy; 2020 OurSitename.com . All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
  


</body>

</html>