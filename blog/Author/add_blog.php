<?php

//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['fname']) || !isset($_SESSION['authorid']) ) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['fname'];
$id = $_SESSION['authorid'];
?>
<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 12:55:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Yoha –  HTML5 Bootstrap Admin Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard html template, admin dashboard template bootstrap 4, analytics dashboard templates, best admin template bootstrap 4, best bootstrap admin template, bootstrap 4 template admin, bootstrap admin template premium, bootstrap admin ui, bootstrap basic admin template, cool admin template, dark admin dashboard, dark admin template, dark dashboard template, dashboard template bootstrap 4, ecommerce dashboard template, html5 admin template, light bootstrap dashboard, sales dashboard template, simple dashboard bootstrap 4, template bootstrap 4 admin">

	<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>Yoha – HTML5 Bootstrap Admin Template</title>

		<!-- BOOTSTRAP CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/skin-modes.css" rel="stylesheet" />
		<link href="assets/css/dark-style.css" rel="stylesheet" />

		<!-- SIDE-MENU CSS -->
		<link href="assets/css/sidemenu.css" rel="stylesheet">

		<!--PERFECT SCROLL CSS-->
		<link href="assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="assets/css/icons.css" rel="stylesheet" />
 <!-- INTERNAL  WYSIWYG EDITOR CSS -->
        <link href="assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

				<!-- INTERNAL  FILE UPLODE CSS -->
		<link href="assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />

		<!-- INTERNAL SELECT2 CSS -->
		<link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- INTERNAL BOOTSTRAP-DATERANGEPICKER CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

		<!-- INTERNAL  TIME PICKER CSS -->
		<link href="assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

		<!-- INTERNAL  DATE PICKER CSS-->
		<link href="assets/plugins/date-picker/spectrum.css" rel="stylesheet" />

		<!-- INTERNAL  MULTI SELECT CSS -->
		<link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css">

		<!-- INTERNAL TELEPHONE CSS-->
		<link rel="stylesheet" href="assets/plugins/telephoneinput/telephoneinput.css">
		<!-- SIDEBAR CSS -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />
		
		<!-- Switcher CSS -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet"></head>

	<body class="app sidebar-mini">
		
		<!-- Start Switcher -->
		
		<!-- End Switcher -->
		
				<!-- GLOBAL-LOADER -->
				<div id="global-loader">
					<img src="assets/images/loader.svg" class="loader-img" alt="Loader">
				</div>
				<!-- /GLOBAL-LOADER -->

				<!-- PAGE -->
				<div class="page">
					<div class="page-main">
						<!--APP-SIDEBAR-->
				<?php include 'include/sidebar.php'?>
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
								</div><!-- FULL-SCREEN -->
								<!-- NOTIFICATIONS -->
								<!-- MESSAGE-BOX -->
								<?php include 'include/top_header.php' ?>
								<!-- SIDE-MENU -->
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
					<h1 class="page-title">Form Elements</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Forms</a></li>
						<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
					</ol>
				</div>
				
			</div>
			<!-- PAGE-HEADER END -->
														<!-- ROW-1 OPEN -->
			
			<!-- ROW-1 CLOSED -->

			<!-- ROW-2 OPEN -->
			
			<!-- ROW-2 CLOSED -->

			<!-- ROW-3 OPEN -->

				<?php
                	include'../admin/connection.php'; //including the database config 
                	if(isset($_POST['post'])) //if the submit button is clicked
                	{
						$title=mysqli_real_escape_string($con, $_POST['title']); //get the name inputted on this field
						$content=mysqli_real_escape_string($con, $_POST['content']); //get the name inputted on this field
						$date=date('Y-m-d H:i');
						$category=$_POST['category']; //get the name inputted on this field
                		$target = "../admin/images/"; // this is the folder the image files would be moved into
						$target = $target . basename( $_FILES['image']['name']); //get the image and file name to be moved
						$pic=basename($_FILES['image']['name']);
						$location = $pic;
						if ($_FILES['image']['type']=='image/jpg' || $_FILES['image']['type']=='image/jpeg' || $_FILES['image']['type']=='image/png'){
							$query=mysqli_query($con,"INSERT INTO `post`(title, content, image, category, postid, date ) VALUES ('$title', '$content', '$target', '$category', '$id', '$date')"); // insert what was written into the database with table name blog

						if ($query) { 

							    move_uploaded_file($_FILES['image']['tmp_name'],$target);
							    echo '<script> alert("Blog Added Successfully")</script>';
						 } 
						 else // else echo Error updating record:
						 {
						    echo "Error updating record: " . mysqli_error($con);
						 }
						}
						else{
							echo '<script> alert("Wrong Image Format")</script>';
						}
						

                	}
                	?>
			<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-6">
					<div class="card shadow">
						<div class="card-header">
							<h3 class="mb-0 card-title">File upload</h3>
						</div>
						<div class="card-body">
							<input type="file" class="dropify" name="image" data-height="300" />
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Blog Post</h3>
						</div>
						
							
						<div class="card-body ">
							<p class="text-muted">Enter Blog details below</p>
							<div class="form-group">
								<div class="form-group">
										<label class="form-label">Title</label>
										<input type="text" name="title" class="form-control" placeholder="Enter Blog Title">
									</div>
								<label class="form-label"> Select Category</label>
								<select class="form-control select2-show-search" name="category" data-placeholder="Choose one (with searchbox)">
									 <?php 
                        			    $query=mysqli_query($con,"SELECT * FROM `category`"); //select and display the fields inside the category table
                        			    while($row=mysqli_fetch_array($query)) // using while loop to run through the query
                        			    { ?>
									
										<option><?php echo $row['category']; ?></option>
									
										<?php } ?>
								</select>

							</div>
							
						</div>

					
					</div>
				</div><!-- COL END -->

					<div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Blog Content</div>
                        </div>
                        <div class="card-body">
                            <textarea class="content" name="content"></textarea>
                        </div>
                        <div class="example">
									
										
						<input name="post" type="submit" class="btn btn-success"/>
						<a href="index.php" class="btn btn-danger">Cancel</a>
										
									
						</div>
                    </div>
                </div>
            </div>
			</div>
			<!-- ROW-3 CLOSED -->

			<!-- ROW-4 OPEN -->
			
			<!-- ROW-4 CLOSED -->

			<!-- ROW-5 OPEN -->
			
			<!-- ROW-5 CLOSED -->

			<!-- ROW-6 OPEN -->
			
			<!-- ROW-6 CLOSED -->
			 </form>
							</div><!-- End Page -->
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
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2020 <a href="#">Yoha</a>. Designed by <a href="#"> Spruko Technologies Pvt.Ltd </a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER END -->				</div>
				<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="assets/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS-->
		<script src="assets/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- RATING STARJS -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- EVA-ICONS JS -->
		<script src="assets/iconfonts/eva.min.js"></script>

		<!-- INPUT MASK JS-->
		<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- SIDE-MENU JS-->
		<script src="assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- PERFECT SCROLL BAR js-->
		<script src="assets/plugins/p-scroll/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/sidemenu/sidemenu-scroll.js"></script>

		<!-- CUSTOM SCROLLBAR JS-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>


				<!-- INTERNAL  FILE UPLOADES JS -->
		<script src="assets/plugins/fileuploads/js/fileupload.js"></script>
		<script src="assets/plugins/fileuploads/js/file-upload.js"></script>

		<!-- INTERNAL SELECT2 JS -->
		<script src="assets/plugins/select2/select2.full.min.js"></script>

		<!-- INTERNAL BOOTSTRAP-DATERANGEPICKER JS -->
		<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- INTERNAL  TIMEPICKER JS -->
		<script src="assets/plugins/time-picker/jquery.timepicker.js"></script>
		<script src="assets/plugins/time-picker/toggles.min.js"></script>

		<!-- INTERNAL DATEPICKER JS-->
		<script src="assets/plugins/date-picker/spectrum.js"></script>
		<script src="assets/plugins/date-picker/jquery-ui.js"></script>
		<script src="assets/plugins/input-mask/jquery.maskedinput.js"></script>

		<!-- INTERNAL MULTI SELECT JS -->
		<script src="assets/plugins/multipleselect/multiple-select.js"></script>
		<script src="assets/plugins/multipleselect/multi-select.js"></script>

		<!--INTERNAL  FORMELEMENTS JS -->
		<script src="assets/js/form-elements.js"></script>
		<script src="assets/js/select2.js"></script>

		<!-- INTERNAL TELEPHONE JS -->
		<script src="assets/plugins/telephoneinput/telephoneinput.js"></script>
		<script src="assets/plugins/telephoneinput/inttelephoneinput.js"></script>
		<!-- SIDEBAR JS -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<!-- CUSTOM JS -->
		<script src="assets/js/custom.js"></script>
		

		        <!-- INTERNAL   WYSIWYG Editor JS -->
        <script src="assets/plugins/wysiwyag/jquery.richtext.js"></script>
        <script src="assets/plugins/wysiwyag/wysiwyag.js"></script>
		<!-- Swicther JS -->
		<script src="assets/switcher/js/switcher.js"></script>
	</body>


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 12:55:15 GMT -->
</html>