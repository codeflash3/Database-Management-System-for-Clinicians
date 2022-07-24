<?php
  
session_start();
include("functions.php");
include("connection.php");

$user_data=check_login($con);
$user = 'root';
$password = ''; 
  

$database = 'miniproject2'; 
  


$servername='localhost:3307';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  

if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
$data = $_SESSION["user_id"];
$query1 = mysqli_query($con,"select * from users where user_id = '$data'");
$row1 = mysqli_fetch_array($query1);
$id = $_SESSION["user_id"];
$id = $row1["id"];
$sql= "select * from patients where id = $id";
// $sql= "select * from patients";

$result = $mysqli->query($sql);
$mysqli->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
  <link rel="stylesheet" href="mainpage.css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Patiets Records</title>
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: absolute;
  bottom: 15%;
  left:29.33%;
  top:14%;

  
  /* bottom: 0; */
  /* right: 15px; */
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

a{
  color:white;
}


    </style>

</head>
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
  <h2 style="font-weight:300;margin-top:2%;margin-bottom:1%;margin-left:1%">Patients Records</h2>
  
  <button type="button"  class="btn btn-secondary btn-lg"><a id="kal "href="addpatient.php"><i class="fa fa-plus" id="icon"aria-hidden="true"></a></i></button>
  
  
  
  
    <div class="table_responsive">
        <table>
          <thead>
            <tr>
              <th>Patient Id</th>
              <th>Name</th>
              <th>Symptoms</th>
              <th>Gender</th>
              <th>Age</th>
              <th>Doctor Id</th>
              <th>Actions</th>

            </tr>
          </thead>
      
          <tbody>
            <?php  
                
                while($row = $result->fetch_assoc())
                 {
             ?>
      
            <tr>
              
          
              <tr>
                <td><?php echo $row['pid'];?></td>
                <td><?php echo $row['p_name'];?></td>
                <td><?php echo $row['symptoms'];?></td>
                <td><?php echo $row['p_gender'];?></td>
                <td><?php echo $row['p_age'];?></td>
                <td><?php echo $row['doc_id'];?></td>
              <td>
                <span class="action_btn">
                    
                  <a href="deletepatients.php?id=<?php echo $row['pid'];?>" ><i class="fa fa-trash-o" style="font-size:17px"></i></a>
                </span>
              </td>
            </tr>
            <?php
                }
             ?>
          </tbody>
        </table>
      </div>


</body>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</html>