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
$approve="approve";
$query=mysqli_query($con,"UPDATE author SET status='$approve' WHERE id='$get_id'");//query to delete that blog by id since its unique
if($query){ //if query is true reload the view page and echo deleted successfully
  
    echo '<script> alert("Author Has been Approved Successfully")</script>';
  echo '<script> window.location.href = "disapproved_author.php"</script>';
    
}
   

?>