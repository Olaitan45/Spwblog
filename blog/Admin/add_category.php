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
<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Dark/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 12:14:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Yoha –  HTML5 Bootstrap Admin Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="php admin panel template, laravel dashboard template, best laravel admin panel, laravel admin dashboard, laravel dashboard template, best admin panel for laravel, laravel admin dashboard template, laravel admin template bootstrap 4, laravel bootstrap admin template, best admin panel for laravel, php admin panel template, laravel admin dashboard, laravel admin template bootstrap 4, laravel bootstrap admin template, laravel admin dashboard template,">

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
		<link href="assets/switcher/demo.css" rel="stylesheet">
		
		</head>

	<body class="app sidebar-mini dark-mode">
		
		<!-- Start Switcher -->
		
		<!-- End Switcher -->
		
				<!-- GLOBAL-LOADER -->
				<div id="global-loader">
					<img src="assets/images/loader.svg" class="loader-img" alt="Loader">
				</div>
				<!-- /GLOBAL-LOADER -->

				<!-- PAGE -->
				<?php include 'include/sidebar.php'; ?>
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
							<div class="header-search d-none d-md-flex">
								<form class="form-inline">
									<div class="search-element">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color" type="submit">
											<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
												<path d="M0 0h24v24H0V0z" fill="none" />
												<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /></svg>
										</button>
									</div>
								</form>
							</div>
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
								
								<?php include 'include/top_profile.php'; ?>
								<!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<!-- responsive-navbar -->
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /></svg>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-left">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control " placeholder="Search....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
													<path d="M0 0h24v24H0V0z" fill="none" />
													<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /></svg>
											</button>
										</div>
									</div>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fullscreen-button">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<circle cx="12" cy="12" opacity=".3" r="3" />
										<path d="M7 12c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 0c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3 3 1.35 3 3zM3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm18 0c0-1.1-.9-2-2-2h-4v2h4v4h2V5zm-2 14h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4z" /></svg>
								</a>
							</div><!-- FULL-SCREEN -->
						<!-- NOTIFICATIONS -->
							<!-- MESSAGE-BOX -->
							
						</div>
					</div>
				</div><!-- End responsive-navbar -->
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
			      	<?php
                	include'connection.php'; //including the database config 
                	if(isset($_POST['post'])) //if the submit button is clicked
                	{
						$category=mysqli_real_escape_string($con, $_POST['category']); //get the name inputted on this field
						$content = mysqli_real_escape_string($con, $_POST['content']);
						$target = "images/"; // this is the folder the image files would be moved into
						$target = $target . basename( $_FILES['image']['name']); //get the image and file name to be moved
						$pic=basename($_FILES['image']['name']);
						$location = $pic;
						if ($_FILES['image']['type']=='image/jpg' || $_FILES['image']['type']=='image/jpeg' || $_FILES['image']['type']=='image/png'){
							$query=mysqli_query($con,"INSERT INTO `category`(category, content, image ) VALUES ('$category', '$content', '$target')"); // insert what was written into the database with table name blog

						if ($query) { 

							    move_uploaded_file($_FILES['image']['tmp_name'],$target);
							    echo '<script> alert("Category Added Successfully")</script>';
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
							<input type="file" name="image" class="dropify" data-height="300" />
						</div>
					</div>
				</div>
				<!-- COL END -->
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Category</h3>
						</div>
						
							
						<div class="card-body ">
							<p class="text-muted">Enter Category details below</p>
							<div class="form-group">
								<div class="form-group">
										<label class="form-label">Category Name</label>
										<input type="text" name="category" class="form-control"  placeholder="Enter Category Name">
									</div>
								

							</div>
													
						</div>


					
					</div>
				</div><!-- COL END -->
			</div>
			   <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Short Description</div>
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

	
            </form>
        </div><!-- End Page -->
						</div>
					</div>
					<!-- CONTAINER END -->
					<!-- SIDE-BAR -->
			
			<!-- SIDE-BAR CLOSED -->					<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2020 <a href="#"></a>.All rights reserved.
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


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Dark/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 12:14:11 GMT -->
</html>