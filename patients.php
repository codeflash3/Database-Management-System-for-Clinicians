<?php
  
session_start();
  include("connection.php");
  include("functions.php");

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
$query1 = mysqli_query($con,"select * from patients where user_id = '$data'");
$row1 = mysqli_fetch_array($query1);
$pid = $row1["pid"];
$sql= "select * from register where user_id = $pid";
$result = $mysqli->query($sql);
$mysqli->close();  

// $sql = "SELECT * FROM patients";
// $result = $mysqli->query($sql);
// $mysqli->close(); 

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patients Data</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
  <link rel="stylesheet" href="mainpage.css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <title>Patiets Details</title>
    
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: white;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
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
        <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Contact us</a>
        <a class="nav-item nav-link" href="#">About Us</a>

      </div>

    </div>
    <form class="form-inline my-2 my-lg-0">
      <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" href="#">Log Out</a>
    </form>
  </nav>
    <section>
        <h1>Patients Data</h1>
       
        <table>
            <tr>
                <th>Patient Id</th>
                <th>Name</th>
                <th>Symptoms</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Age</th>
                <th>Doctor Id</th>

            </tr>
            
            <?php  
                
                while($rows=$result->fetch_assoc())
                 {
             ?>
            <tr>
                <td><?php echo $rows['pid'];?></td>
                <td><?php echo $rows['pname'];?></td>
                <td><?php echo $rows['symptoms'];?></td>
                <td><?php echo $rows['pgender'];?></td>
                <td><?php echo $rows['paddress'];?></td>
                <td><?php echo $rows['p_age'];?></td>
                <td><?php echo $rows['doc_id'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>































