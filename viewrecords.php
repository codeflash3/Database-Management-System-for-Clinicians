<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Records</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
  <link rel="stylesheet" href="mainpage.css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
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
    <a class="navbar-brand" href="mainpage.php">DBMS Mini Project</a>
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
<div class="header">
    <h1>Database Management System for Clinicians</h1>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h2>Patients Data</h2>
            <p class="card-text">Patient's data such as name,gender,address,age and other things can be 
              viewed here.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a class="deco" href="precords.php">View</a></button>
                <button type="button" class="btn btn-sm btn-outline-secondary"><a class="deco" href="#">Edit</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h2>Medical Records</h2>
            <p class="card-text">Information about diagnosis of any patient can be viewed here.You can also add
              and delete such information.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary"><a class="deco" href="mrecords.php">View</a></button>
                <button type="button" class="btn btn-sm btn-outline-secondary"><a class="deco" href="#">Edit</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h2>Appointments</h2>
            <p class="card-text">To add or view appointments details like date,time you can click here.You can even delete after appointment is done </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary"><a class="deco" href="arecords.php">View</a></button>
                <button type="button" class="btn btn-sm btn-outline-secondary"><a class="deco" href="#">Edit</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
</body>
</html>