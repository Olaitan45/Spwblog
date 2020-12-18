<?php

//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['fname']) || !isset($_SESSION['authorid'])) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['fname'];
$id = $_SESSION['authorid'];
?>
<?php include 'include/header.php'?>

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
					<h1 class="page-title">Hi! Welcome To Dashboard</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Sales Dashboard</li>
					</ol>
				</div>
				
			</div>
			<!-- PAGE-HEADER END -->
											<!-- ROW-1 -->
			<div class="row">
				<div class="col-md-12">
					<div class="card  banner">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-3 col-lg-2 text-center">
									<img src="assets/images/pngs/profit.png" alt="img" class="w-95">
								</div>
								<div class="col-xl-9 col-lg-10 pl-lg-0">
									<div class="row">
										<div class="col-xl-7 col-lg-6">
											<div class="text-left text-white mt-xl-4">
												<h3 class="font-weight-semibold">Welcome <?php 
                        if(!empty($_SESSION["fname"])) { //if user is logged in display a welcome username else leave blank
                            echo $_SESSION['fname'] . ' ';
                        } else {
                            //require_once 'index.php';
                        }
                        ?></h3>
												
												<p class="mb-lg-0 text-white-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
										</div>
										<div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">
											
											<h2 class="display-2 mb-3 number-font text-white">Welcome <?php 
                        if(!empty($_SESSION["fname"])) { //if user is logged in display a welcome username else leave blank
                            echo $_SESSION['fname'] . ' ';
                        } else {
                            //require_once 'index.php';
                        }
                        ?></h2>
											<div class="btn-list mb-xl-0">
												
												<a href="#" class="btn btn-white mb-xl-0" id="skip">Dismiss Message</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 End-->
			<?php
include ("../admin/connection.php");


$sql = "SELECT * FROM post where postid = $id"; //select all from the table blog
$result = mysqli_query($con,$sql); // query that sql selection
$count = mysqli_num_rows($result); // count the number of rows in that table


$sql1 = "SELECT * FROM author"; //select all from the table blog
$result1 = mysqli_query($con,$sql1); // query that sql selection
$count1 = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM user"; //select all from the table blog
$result2 = mysqli_query($con,$sql2); // query that sql selection
$count2 = mysqli_num_rows($result2);

$sql3 = "select * from comment";
$result3 = mysqli_query($con,$sql3);
$count3 = mysqli_num_rows($result3);

?>
			<!-- Row -->
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row mb-1">
								<div class="col">
									<p class="mb-1">Total Posts</p>
									<h3 class="mb-0 number-font"><?php echo $count ?></h3>
								</div>
								<div class="col-auto mb-0">
									<div class="dash-icon text-orange">
										<i class="bx bxs-shopping-bags"></i>
									</div>
								</div>
							</div>
							<span class="fs-12 text-muted"> <strong></strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1">Total Number of Posts</span></span>
						</div>
					</div>
				</div>
				
				
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row mb-1">
								<div class="col">
									<p class="mb-1">Total Comments</p>
									<h3 class="mb-0 number-font"><?php echo $count3 ?></h3>
								</div>
								<div class="col-auto mb-0">
									<div class="dash-icon text-warning">
										<i class="bx bxs-credit-card-front"></i>
									</div>
								</div>
							</div>
							<span class="fs-12 text-muted"> <strong></strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1">Total Number of Comments</span></span>
						</div>
					</div>
				</div>
			</div>
			<!-- Row-1 End -->

			<!-- ROW-2 -->
		
			<!-- ROW-2 END -->

			<!-- Row-3 -->
			
			<!-- Row-3 End -->

			<!-- ROW-4 -->
			
			<!-- ROW-4 END -->
<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="card">
						<div class="card-header ">
							<h3 class="card-title">Blog Posts</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive service">
								<table class="table table-bordered table-hover mb-0 text-nowrap">
									<thead>
										<tr>
											<th>Number</th>
											<th>Category</th>
											<th>Blog Title</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
									
								
                        			$query=mysqli_query($con,"SELECT * FROM post WHERE postid = '$id'");
                        			while($row=mysqli_fetch_array($query))
                        				{ $id = $row['id']; ?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['category']; ?></td>
											<td><?php echo $row['title']; ?></td>
											<td><?php echo $row['date']; ?></td>
											<td>
												<a href="edit_blog.php?id=<?php echo $id?>" class="btn btn-primary btn-sm text-white mb-1" data-original-title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a> <a href="delete_blog.php?id=<?php echo $id?>" class="btn btn-danger btn-sm text-white mb-1" data-original-title="Delete" data-toggle="tooltip"><i class="fa fa-trash-o"></i></a><br>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div>
			<!-- ROW-5 -->
			
			<!-- ROW-5 END -->
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