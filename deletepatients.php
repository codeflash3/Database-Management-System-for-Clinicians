<?php


 include("connection.php");
// include("functions.php");


$pid = $_GET['pid'];



$del= mysqli_query($con,"delete from patients where pid = '$pid'");
if($del)
{
    
    echo "Success";	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>