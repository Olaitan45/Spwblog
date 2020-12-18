<?php

//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['fname'])) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['fname'];

include '../admin/connection.php';  //including the database config 
$get_id=$_GET['id']; //get that blog by the id since its unique
$query=mysqli_query($con,"delete from post where id='$get_id'");//query to delete that blog by id since its unique
if($query){ //if query is true reload the view page and echo deleted successfully
    
    echo '<script> alert("Blog Deleted Successfully")</script>';
    echo '<script> window.location.href = "view_blog.php"</script>';
}

else{
    echo "Error Deleting Blog: " . mysql_error();

}

?>