<?php

session_start();

	include("connection.php");
	include("functions.php");

    $user_data = check_login($con);


	$data = $_SESSION["user_id"];
	$query = mysqli_query($con,"select * from users where user_id = '$data'");
	$row = mysqli_fetch_array($query);
	$id = $row["id"];

	if(isset($_REQUEST['submit']))
	{
		$pid = $_REQUEST['pid'];
        
        $appt_date = $_REQUEST['appt_date'];
        $doc_id = $_REQUEST['doc_id'];
               
        
        mysqli_query( $con, "insert into appointments (id,pid,appt_date,doc_id) values ('$id','$pid','$appt_date','$doc_id')");
        
	} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Appointments</title>
    <style>
        #text-center text-info{

        }
    </style>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<link rel="stylesheet" href="index.css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DBMS Mini Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="mainpage.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Records</a>
    
        <a class="nav-item nav-link" href="#">Contact us</a>
        <a class="nav-item nav-link" href="#">About Us</a>

      </div>

    </div>
    <form class="form-inline my-2 my-lg-0">
      <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" href="#">Log Out</a>
    </form>
  </nav>
    <div id="login">
        <h3 class="text-center text-white pt-5" id="text3">Add Appointments </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info" id="header-center">Add</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Pid</label><br />
                                <input type="text" name="pid" id="username"  class="form-control" required/>
                            </div>
                            
                            <div class="form-group">
                                <label for="username" class="text-info">Appointment Date</label><br />
                                <input type="text" name="appt_date" id="username"  class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Doctor ID</label><br />
                                <input type="text" name="doc_id" id="username"  class="form-control" required/>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Add" />
                            </div>
							<a href="arecords.php">Go Back</a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>
</body>

</html>




