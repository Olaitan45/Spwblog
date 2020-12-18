<?php
$getid=$_GET['id'];?>
<?php

//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['uname']) || !isset($_SESSION['id']) ) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['uname'];
$id = $_SESSION['id'];
?>

<?php include 'include/header.php';?>
	<body class="app sidebar-mini dark-mode">
		
		<!-- Start Switcher -->
		
		<!-- End Switcher -->
		
				<!-- GLOBAL-LOADER -->
				<div id="global-loader">
					<img src="assets/images/loader.svg" class="loader-img" alt="Loader">
				</div>
				<!-- /GLOBAL-LOADER -->

				<!-- PAGE -->
				
				<?php include 'include/sidebar.php' ?>
				<!--/APP-SIDEBAR-->						<!-- App-Header -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand d-md-none" href="index.html">
								<img src="assets/images/brand/logo-3.png" class="header-brand-img mobile-icon" alt="logo">
								<img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo mobile-logo" alt="logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M21 11.01L3 11v2h18zM3 16h12v2H3zM21 6H3v2.01L21 8z" /></svg>
							</a><!-- sidebar-toggle-->
							
							<div class="d-flex ml-auto header-right-icons header-search-icon">
								<button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="navbar-toggler-icon">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg>
								</button>
								<div class="dropdown d-none d-lg-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fullscreen-button">
											<path d="M0 0h24v24H0V0z" fill="none" />
											<circle cx="12" cy="12" opacity=".3" r="3" />
											<path d="M7 12c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 0c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3 3 1.35 3 3zM3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm18 0c0-1.1-.9-2-2-2h-4v2h4v4h2V5zm-2 14h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4z" /></svg>
									</a>
								</div><!-- FULL-SCREEN --><?php include 'include/top_profile.php'; ?><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<!-- responsive-navbar -->
			<!-- End responsive-navbar -->
				<!-- App-Header -->						<!--app-content open-->
						<div class="app-content">
							<div class="side-app">
											<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Edit Profile</h1>
					<ol class="breadcrumb">
					</ol>
				</div>
				
			</div>
			<!-- PAGE-HEADER END -->
											<!-- ROW-1 OPEN -->
			<div class="row">
				<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="text-center">
								<div class="userprofile">
									<h3 class="username text-dark mb-2"><?php echo $_SESSION['uname'] . ' ';?></h3>
									
									<div class="socials text-center mt-3">
										<a href="#" class="btn btn-circle btn-primary ">
											<i class="fa fa-facebook"></i></a> <a href="#" class="btn btn-circle btn-danger ">
											<i class="fa fa-google-plus"></i></a> <a href="#" class="btn btn-circle btn-info ">
											<i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						if(isset($_POST["update1"]))  
							 {  
							      if(empty($_POST["pass1"]) || empty($_POST["pass2"]) || empty($_POST["pass3"]))  
							      {  
							           echo '<script>alert("Both Fields are required")</script>';  
							      }  
							      else  
							      {  
							           $pass1 = mysqli_real_escape_string($con, $_POST["pass1"]);  
							           $pass3 = mysqli_real_escape_string($con, $_POST["pass3"]);
							           $pass3 = password_hash($pass3, PASSWORD_DEFAULT);
							           $pass2 = mysqli_real_escape_string($con, $_POST["pass2"]);  
           							   $pass2 = password_hash($pass2, PASSWORD_DEFAULT);
							           $query = "SELECT * FROM admin WHERE id = '$getid'";  
							           $result = mysqli_query($con, $query);  
							           if(mysqli_num_rows($result) > 0)  
							           {  
							                while($row = mysqli_fetch_array($result))  
							                {  
							                     if(password_verify($pass1, $row["password"]))  
							                     {  
							                         
							                         	$query="UPDATE admin SET password='$pass2' WHERE id='$getid'";// query to update the table by id
						if(mysqli_query($con, $query))  
           {  
                echo '<script>alert("Password Updated Successfully")</script>';  
           }

							                          
							                     }  
							                     else  
							                     {  
							                          //return false;  
							                          echo '<script>alert("Wrong User Details")</script>';  
							                     }  
							                }  
							           }  
							           else  
							           {  
							                echo '<script>alert("Wrong User pass Details")</script>';  
							           }  
							      }  
							 } 
							?>
					<form method="post" >
					<div class="card">
						<div class="card-header">
							<div class="card-title">Edit Password</div>
						</div>
						<div class="card-body">
							<!--<div class="d-flex mb-3">
								<img alt="User Avatar" class="rounded-circle avatar-lg mr-2" src="assets/images/users/10.jpg">
								<div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
									<a href="#" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Edit profile</a>
									<a href="#" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off mr-1"></i>Delete profile</a>
								</div>
							</div>-->
							<div class="form-group">
								<label class="form-label">Current Password</label>
								<input type="password" name="pass1" class="form-control" value="password">
							</div>
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" name="pass2" class="form-control" value="password">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm Password</label>
								<input type="password" name="pass3" class="form-control" value="password">
							</div>
						</div>
						<div class="card-footer text-right">
							<input name="update1" type="submit" class="btn btn-primary"/>
							<a href="profile.php" class="btn btn-danger">Cancel</a>
						</div>
					</div>
				</form>
				
				</div>
				<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
					<?php
                	include 'connection.php'; //including the database config 
                	if(isset($_POST['update'])) //if the submit button is cicked
                	{
                		$fullname=mysqli_real_escape_string($con,$_POST['fullname']);//get the name inputted on this field
                		$location=mysqli_real_escape_string($con,$_POST['location']);
                		$email=mysqli_real_escape_string($con,$_POST['email']);
                		$phone=mysqli_real_escape_string($con,$_POST['phone']); //get the name inputted on this field
                		$bio=mysqli_real_escape_string($con,$_POST['bio']);
                		
						$query="UPDATE admin SET  fullname='$fullname', email='$email', location='$location', phone='$phone', bio='$bio' WHERE id='$getid'";// query to update the table by id
						if(mysqli_query($con, $query))  
           {  
                echo '<script>alert("Account Updated Successfully")</script>';  
           }  
						}
                	?>

				<form method="post">

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Edit Profile</h3>
						</div>

						                	<?php
                	$query2=mysqli_query($con,"SELECT * FROM `admin` WHERE id='$getid'"); // display the field that was clicked by id
                	$rows=mysqli_fetch_array($query2);
                	?>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<label for="exampleInputname">Full Name</label>
										<input type="text" class="form-control" id="exampleInputname" name="fullname" value="<?php echo $rows['fullname']; ?>">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $rows['email']; ?>">
							</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
								<label for="exampleInputEmail1">Location</label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="location" value="<?php echo $rows['location']; ?>">
							</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
								<label for="exampleInputnumber">Conatct Number</label>
								<input type="number" class="form-control" id="exampleInputnumber" name="phone" value="<?php echo $rows['phone']; ?>">
							</div>
								</div>
								</div>
							<div class="form-group">
								<label class="form-label">About Me</label>
								<textarea class="form-control" rows="6" name="bio"><?php echo $rows['bio']; ?></textarea>
							</div>
							
						</div>
						<div class="card-footer">
							<input type="submit" name="update" value="Update" class="btn btn-success mt-1"/>
							<a href="../admin/profile.php" class="btn btn-danger mt-1">Cancel</a>
						</div>
					</div>

				</form>
				</div>
			</div>
			<!-- ROW-1 CLOSED -->
							</div><!-- End Page -->
						</div>
					</div>
					<!-- CONTAINER END -->
					<!-- SIDE-BAR -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="">
					<a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="p-3 border-bottom">
					<h5 class="border-bottom-0 mb-0">General Settings</h5>
				</div>
				<div class="p-4">
					<div class="switch-settings">
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Notifications</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Show your emails</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Show Task statistics</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Show recent activity</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">System Logs</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Error Reporting</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Show your status to all</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="mr-auto fs-15">Keep up to date</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="p-3 border-bottom">
					<h5 class="border-bottom-0 mb-0">Overview</h5>
				</div>
				<div class="p-4">
					<div class="progress-wrapper">
						<div class="mb-3">
							<p class="mb-2">Achieves<span class="float-right text-muted font-weight-normal">80%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Projects<span class="float-right text-muted font-weight-normal">60%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Earnings<span class="float-right text-muted font-weight-normal">50%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-success w-50" role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Balance<span class="float-right text-muted font-weight-normal">45%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Toatal Profits<span class="float-right text-muted font-weight-normal">75%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-danger w-75" role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Total Likes<span class="float-right text-muted font-weight-normal">70%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-teal w-70" role="progressbar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SIDE-BAR CLOSED -->					<!-- FOOTER -->
			<?php include 'include/footer.php'?>