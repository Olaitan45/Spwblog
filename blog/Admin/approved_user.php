<?php

//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['uname']) || !isset($_SESSION['id'])) {
    header("location: login.php");
    exit();
}


$name = $_SESSION['uname'];
?>
<?php include 'include/header.php'?>
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
						<li class="breadcrumb-item active" aria-current="page">View Authors</li>
					</ol>
				</div>
				<!--<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="#" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
							<span>
								<i class="fe fe-shopping-cart"></i>
							</span>
						</a>
						<a href="#" class="btn btn-orange btn-icon text-white" data-toggle="tooltip" title="Download" data-placement="top">
							<span>
								<i class="fe fe-download"></i>
							</span>
						</a>
						<a href="#" class="btn btn-info btn-icon text-white" data-toggle="tooltip" title="Add User" data-placement="top">
							<span>
								<i class="fe fe-plus"></i>
							</span>
						</a>
						<a href="#" class="btn btn-secondary btn-icon text-white dropdown-toggle" data-toggle="dropdown">
							<span>
								<i class="fe fe-external-link"></i>
							</span> Export <span class="caret"></span>
						</a>
						<div class="dropdown-menu" role="menu">
							<a href="#" class="dropdown-item"><i class="bx bxs-file-pdf mr-2"></i>Export as Pdf</a>
							<a href="#" class="dropdown-item"><i class="bx bxs-file-image mr-2"></i>Export as Image</a>
							<a href="#" class="dropdown-item"><i class="bx bxs-file mr-2"></i>Export as Excel</a>
						</div>
					</div>
				</div>-->
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
												<h3 class="font-weight-semibold">Welcome Admin</h3>
												
												<p class="mb-lg-0 text-white-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
										</div>
										<div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">
											
											<h2 class="display-2 mb-3 number-font text-white">Welcome Admin</h2>
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

			<!-- Row -->
			
			<!-- Row-1 End -->

			<!-- ROW-2 -->
			<!--<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 col-xl-3">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Sales By Category</h3>
						</div>
						<div class="card-body">
							<div class="">
								<canvas id="canvasDoughnut" class="chartsh"></canvas>
							</div>
							<div class="mt-5 fs-12">
								<div class="float-left mr-3"><span class="dot-label bg-primary mr-1"></span><span class="">Mens</span></div>
								<div class="float-left mr-3"><span class="dot-label bg-secondary mr-1"></span><span class="">Womens</span></div>
								<div class="float-left mr-3"><span class="dot-label bg-secondary1 mr-1"></span><span class="">Kids</span></div>
								<div class="float-left mr-3"><span class="dot-label bg-canvas1 mr-1"></span><span class="">Electronics</span></div>
								<div class="float-left"><span class="dot-label bg-canvas2 mr-1"></span><span class="">Home & Furniture</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12 col-xl-9">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Monthly Sales Statistics</h3>
						</div>
						<div class="card-body">
							<div id="sales" class=""></div>
						</div>
					</div>
				</div>
			</div>-->
			<!-- ROW-2 END -->

			<!-- Row-3 -->
			<!--<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<div class="card overflow-hidden">
						<div class="card-body pb-0">
							<div class="">
								<div class="d-flex">
									<div class="">
										<p class="mb-1">Monthly Sales</p>
										<h2 class="mb-1  number-font">42,567</h2>
										<p class="text-muted  mb-0"><span class="text-muted fs-13 mr-2">(+43%)</span> than Last week</p>
									</div>
									<div class="ml-auto">
										<i class="bx bxs-dollar-circle fs-40 text-secondary"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="chart-wrapper">
							<canvas id="widgetChart1" class=""></canvas>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Sales Overview</h3>
						</div>
						<div class="card-body">
							<div class="mb-5">
								<p class="mb-2">Total Profit<span class="float-right"><b>51,234</b><span class="text-muted ml-1">(80%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
								</div>
							</div>
							<div class="mb-5">
								<p class="mb-2">Total Income<span class="float-right"><b>12,786</b><span class="text-muted ml-1">(50%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-secondary w-50 " role="progressbar"></div>
								</div>
							</div>
							<div class="mb-0">
								<p class="mb-2">Total Expenses<span class="float-right"><b>32,167</b><span class="text-muted ml-1">(60%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-secondary1 w-60 " role="progressbar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-body">
							<div class="">
								<p class="mb-1">Your Current Balance</p>
								<h2 class="mb-1  number-font">$32745.00</h2>
							</div>
							<div class="mt-5">
								<p class="mb-1 d-flex">
									<span class=""><i class="fa fa-money text-muted mr-2 mt-1 fs-16"></i></span>
									<span class="fs-13 font-weight-normal text-muted mr-2">Received Amount </span> : <span class="ml-auto fs-14">+ 1,50,500</span>
								</p>
								<p class="mb-1 d-flex">
									<span class=""><i class="fa fa-credit-card mr-2 mt-1 fs-16 text-muted"></i></span>
									<span class="fs-13 font-weight-normal text-muted mr-2">Sent Amount </span> : <span class="ml-auto fs-14">- 25,500</span>
								</p>
								<p class="d-flex">
									<span class=""><i class="fa fa-university mr-2 fs-16 text-muted"></i></span>
									<span class="fs-13 font-weight-normal text-muted mr-2">Total Amount </span> : <span class="ml-auto font-weight-bold fs-15">$ 1,00,500</span>
								</p>
							</div>
							<div class="row mt-3">
								<div class="col-6">
									<a class="btn btn-primary btn-block btn-rounded" href="#">Transfer</a>
								</div>
								<div class="col-6">
									<a class="btn btn-secondary btn-rounded btn-block" href="#">Receive</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<!-- Row-3 End -->

			<!-- ROW-4 -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Recent Authors</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover text-nowrap mb-0">
									<thead>
										<tr>
											<th>Number</th>
											<th>Usename</th>
											<th>Email</th>
											<th>Date Joined</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
									include 'connection.php';
								
                        			$query=mysqli_query($con,"SELECT * FROM user WHERE status = 'approve'");
                        			while($row=mysqli_fetch_array($query))
                        				{ $id = $row['id']; 
                        			$date = $row['date'];
                        				$newDate = date("d M Y", strtotime($date));
    									$new_date = date('dS F, Y', strtotime($newDate)); ?>
										<tr>
											<td><?php echo $row['id'] ?></td>
											<td><?php echo $row['fullname'] ?></td>
											<td><?php echo $row['email'] ?></td>
											<td><?php echo $new_date ?></td>
											<td class="font-weight-semibold fs-15"><?php echo $row['status'] ?></td>
											<td>
												<a href="change3_status.php?id=<?php echo $id?>" class="btn btn-primary">Disapprove</a>
											</td>
										</tr>
										<?php }?>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- ROW-4 END -->

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