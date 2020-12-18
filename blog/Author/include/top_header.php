<?php

//Start session


//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['fname']) || !isset($_SESSION['authorid']) ) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['fname'];
$id = $_SESSION['authorid'];
?>
		
								<div class="dropdown profile-1">
									<a href="#" data-toggle="dropdown" class="nav-link pl-2 pr-2  leading-none d-flex">
										<span>
											<i class="dropdown-icon mdi mdi-account-outline"></i> 
										</span>
										<div class="text-center mt-1 d-none d-xl-block">
											<h6 class="text-dark mb-0 fs-13 font-weight-semibold"><?php 
                        if(!empty($_SESSION["fname"])) { //if user is logged in display a welcome username else leave blank
                            echo $_SESSION['fname'] . ' ';
                        } else {
                            //require_once 'index.php';
                        }
                        ?></h6>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="../author/profile.php">
											<i class="dropdown-icon mdi mdi-account-outline"></i> My Profile
										</a>
										<?php
                        			include '../admin/connection.php'; //include database file
                        			$query=mysqli_query($con,"SELECT * FROM author where id = $id"); //select all from the blog table
                        			while($row=mysqli_fetch_array($query)) //fecth that query rows
                        				{ $id = $row['id']; ?>
										<a class="dropdown-item" href="../author/editprofile.php?id=<?php echo $id;?>">
											<i class="dropdown-icon zmdi zmdi-edit"></i> Edit Profile
										</a>
										<?php } ?>
										
										<a class="dropdown-item" href="../author/logout.php">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>