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
								</div><!-- FULL-SCREEN -->
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
                    <h1 class="page-title">Profile</h1>
                    
                </div>
                           </div>
            <!-- PAGE-HEADER END -->
								            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="wideget-user text-center">
                                <div class="wideget-user-desc">
                                   
                                    <div class="user-wrap">
                                        <h4 class="mb-1"><?php echo $_SESSION['uname'] . ' ';?></h4>
                                        <h6 class="text-muted mb-4"></h6>
                                        <div class="wideget-user-icons mb-4">
                                            <a href="#" class="bg-facebook text-white mt-0"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="bg-info text-white"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="bg-google text-white"><i class="fa fa-google"></i></a>
                                            <a href="#" class="bg-dribbble text-white"><i class="fa fa-dribbble"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h3 class="card-title">Contact</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-body wideget-user-contact">
                            <div class="media mb-5 mt-0">
                                <div class="d-flex mr-3">
                                    <span class="user-contact-icon bg-primary"><i class="fa fa-envelope text-white"></i></span>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-dark">Support</a>
                                    <div class="text-muted fs-14">support@demo.com</div>
                                </div>
                            </div>
                            <div class="media mb-5 mt-0">
                                <div class="d-flex mr-3">
                                    <span class="user-contact-icon bg-secondary"><i class="fa fa-globe text-white"></i></span>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-dark">Address</a>
                                    <div class="text-muted fs-14">San Francisco, CA</div>
                                </div>
                            </div>
                            <div class="media mb-0 mt-0">
                                <div class="d-flex mr-3">
                                    <span class="user-contact-icon bg-warning"><i class="fa fa-phone text-white"></i></span>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-dark">Contact</a>
                                    <div class="text-muted fs-14">+125 5826 3658</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="wideget-user-tab">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav">
                                        <li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
                                        <!--<li><a href="#tab-61" data-toggle="tab" class="">Friends</a></li>
                                        <li><a href="#tab-71" data-toggle="tab" class="">Gallery</a></li>
                                        <li><a href="#tab-81" data-toggle="tab" class="">Followers</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-51">
                            <div class="card">
                                <div class="card-body">
                                    <div id="profile-log-switch">
                                        <div class="media-heading">
                                        	<?php
                        			include'connection.php'; //include database file
                        			$query=mysqli_query($con,"SELECT * FROM admin "); //select all from the blog table
                        			while($row=mysqli_fetch_array($query)) //fecth that query rows
                        				{ $id = $row['id']; ?>
                                            <h5><strong>Personal Information</strong></h5>
                                        </div>
                                        <div class="table-responsive ">
                                            <table class="table row table-borderless">
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                    <tr>
                                                        <td><strong>Full Name :</strong> <?php echo $row['fullname']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Location :</strong> <?php echo $row['location']; ?></td>
                                                    </tr>
                                                   
                                                </tbody>
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                  
                                                    <tr>
                                                        <td><strong>Email :</strong> <?php echo $row['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Phone :</strong> <?php echo $row['phone']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row profie-img">
                                            <div class="col-md-12">
                                                <div class="media-heading">
                                                    <h5><strong>Biography:</strong></h5>
                                                </div>
                                                <p>
                                                   <?php echo $row['bio']; ?></p>
                                            </div>
                                        </div>
                                      <?php } ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <div class="media-user mr-4">
                                            <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="assets/images/users/15.jpg"></div>
                                        </div>
                                        <div class="">
                                            <h6 class="mb-0 mt-2">Peter Hill</h6><span class="text-muted">5 mins ago</span>
                                        </div>
                                    </div>
                                    <div class="card-options">
                                        <div class="dropdown">
                                            <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fe fe-more-vertical text-dark"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit Post</a>
                                                <a class="dropdown-item" href="#">Delete Post</a>
                                                <a class="dropdown-item" href="#">Personal Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div><img alt="img" class="w-100" src="assets/images/media/13.jpg"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <div class="avatar-group">
                                            <a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="assets/images/users/19.jpg"></a>
                                            <a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="assets/images/users/20.jpg"></a>
                                            <a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="assets/images/users/1.jpg"></a>
                                            <a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="assets/images/users/2.jpg"></a>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="dropdown wideget-user-contact">
                                                <a class="user-contact-icon bg-light" href="JavaScript:void(0);" data-toggle="tooltip" data-placement="top" title="Likes"><i class="fe fe-heart text-dark"></i></a>
                                                <a class="user-contact-icon bg-light" href="JavaScript:void(0);" data-toggle="tooltip" data-placement="top" title="Comments"><i class="fe fe-message-square text-dark"></i></a>
                                                <a class="user-contact-icon bg-light" href="JavaScript:void(0);" data-toggle="tooltip" data-placement="top" title="Shares"><i class="fe fe-share-2 text-dark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                     
                      
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->
							</div><!-- End Page -->
						</div>
					</div>
					<!-- CONTAINER END -->
					<!-- SIDE-BAR -->
			
			<!-- SIDE-BAR CLOSED -->					<!-- FOOTER -->
<?php include 'include/footer.php' ?>