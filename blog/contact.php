<?php include 'include/header.php' ?>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>

	<?php include 'include/top.php' ?>
	<!-- header -->
    <header class="site-header mo-left header-full header">
		<!-- main header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container-fluid">
					<!-- website logo -->
					<div class="logo-header mostion">
						<a href="index.php"><img src="images/logo-black.png" alt=""></a>
					</div>
					
					<!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- extra nav -->
					<div class="extra-nav">
						<div class="extra-cell">
							<ul>
								<li class="search-btn">
									<a id="quik-search-btn" href="javascript:;"><i class="ti-search m-r10"></i><span>Search</span></a>
								</li>
								
							</ul>
						</div>
					</div>
					
					<!-- Quik search -->
					<div class="dlab-quik-search">
						<form action="#">
							<input name="search" value="" type="text" class="form-control" placeholder="Search...">
							<span id="quik-search"><i class="ti-search"></i></span>
						</form>
						<span class="search-remove" id="quik-search-remove"><i class="ti-close"></i></span>
					</div>
					
					<!-- main nav -->
					<?php include 'include/menu.php' ?>
				</div>
			</div>
		</div>
    </header>
    <!-- header END -->
	<!-- Content -->
	<div class="page-content bg-white">
		<!-- Blog Post -->
		<div class="section-full bg-white content-inner contact-form">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-12">
						<div class="blog-post blog-single mb-0">
							<div class="dlab-post-media m-b50 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
								<img src="images/about/pic7.jpg" alt="">
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-text text">
									<h1 class="font-weight-600">Contact Me</h1>
									
								</div>
							</div>
						</div>
						<form method="post" class="dzForm" action="https://news360.dexignzone.com/xhtml/script/contact.php">
							<div class="dzFormMsg"></div>
							<input type="hidden" value="Contact" name="dzToDo">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input name="dzName" type="text" required="" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input name="dzEmail" type="email" class="form-control" required="" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<textarea name="dzMessage" rows="4" class="form-control" required="" placeholder="Add Your Message"></textarea>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
										<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<button name="submit" type="submit" value="Submit" class="btn radius-no primary">Send Message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="side-bar sticky-top">
							<div class="widget widget-author wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<h6 class="widget-title">About Me</h6>
								<div class="author-profile-info">
									<div class="author-profile-pic">	
										<a href="javascript:void(0);">
											<img src="images/ola.jpg" alt="Profile Pic" width="130" height="130">
										</a>
									</div>
									<div class="author-profile-content">
										<h6 class="title">Hi. I'm Olaitan </h6>
										<p>I am a fashionist based in Ireland.</p>
										<ul class="social-icon m-b0">
											<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-instagram"></i></a></li>
											<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-twitter"></i></a></li>
											<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-facebook"></i></a></li>
											<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-pinterest-p"></i></a></li>
											<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-youtube-play"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="widget recent-posts-entry wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
								<h6 class="widget-title"><span>Popular Posts</span></h6>
								<div class="widget-post-bx">
								<?php
					include 'admin/connection.php';
               			$query=mysqli_query($con,"SELECT * FROM post order by 1 DESC LIMIT 0,3");
                        			while($row=mysqli_fetch_array($query))
                        				{ $id = $row['id'];
                        				$title = $row ['title'];
                        				$date = $row['date'];
                        				$newDate = date("d M Y", strtotime($date));
    									$new_date = date('dS F, Y', strtotime($newDate)); ?>
								
									<div class="widget-post clearfix">
										<div class="dlab-post-media">
											<img src="admin/<?php echo $row['image'] ?>" alt="">
										</div>
										<div class="dlab-post-info">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
													<li class="post-date">at <span><?php echo $new_date ?></span></li>
												</ul>
											</div>
											<h6 class="post-title"><a href="single_post.php?id=<?php echo $id ?>"><?php echo $title ?></a></h6>
										</div>
									</div>
									<?php } ?>
									
								</div>
							
							</div>
							<div class="widget widget_categories wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<h6 class="widget-title"><span>Categories</span></h6>
								<ul>
										<?php
										include 'admin/connection.php';
									
               							$query=mysqli_query($con,"SELECT * FROM category");
                        					while($row=mysqli_fetch_array($query))
                        					{ $id = $row['id'];
                        					$category = $row['category']; ?>
									<li><a><?php echo $category ?></a> <span class="badge"> </span> </li>
								<?php } ?>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Post End -->
		<!-- Instagram Post Carousel -->
	<?php include 'include/footer.php' ?>