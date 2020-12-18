<?php

//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['uname'])) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['uname'];

include 'connection.php';  //including the database config 
$get_id=$_GET['id']; //get that blog by the id since its unique
$disapprove="disapprove";
$query=mysqli_query($con,"UPDATE user SET status='$disapprove' WHERE id='$get_id'");//query to delete that blog by id since its unique
if($query){ //if query is true reload the view page and echo deleted successfully
  
    echo '<script> alert("User Has been Disapproved Successfully")</script>';
  echo '<script> window.location.href = "approved_user.php"</script>';
    
}
   

?>