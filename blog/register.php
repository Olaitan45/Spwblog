<?php  
include 'admin/connection.php';  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:index.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["name"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
          
           $fullname = mysqli_real_escape_string($con, htmlspecialchars($_POST["name"])); //to prevent xss attack 
           $email = mysqli_real_escape_string($con, htmlspecialchars($_POST["email"]));  //to prevent xss attack
           $password = mysqli_real_escape_string($con, htmlspecialchars($_POST["password"]));  //to prevent xss attack
           $password = password_hash($password, PASSWORD_DEFAULT); //password hashing
           $date=date('Y-m-d H:i'); 
           $status='pending';
           
                            $sql2 = "SELECT * FROM user WHERE email='$email' ";
                            $result2 = mysqli_query($con,$sql2);

                        
                            if (mysqli_num_rows($result2)){
                                echo '<script> alert("Email Already Exist")</script>';

                            }
                            else{
           $query = "INSERT INTO user(email, fullname, password, status, date) VALUES('$email', '$fullname', '$password', '$status', '$date')";  
           if(mysqli_query($con, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }
           }  
      }  
 } 
 ?>  
<?php include 'include/header.php' ?>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
<?php include 'include/top.php'?>
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
							
							<div class="dlab-post-info">
								<div class="dlab-post-text text">
									<h1 class="font-weight-600">Register</h1>
									
								</div>
							</div>
						</div>
						<form method="post" class="Form">
							<div class="dzFormMsg"></div>
							<input type="hidden" value="Contact" name="dzToDo">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Username</label>
										<input name="name" type="text" required="" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Email</label>
										<input name="email" type="text" required="" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Password</label>
										<input name="password" type="password" minlength="8" class="form-control" required="" placeholder="Password">
									</div>
								</div>
							
							
								
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<button name="register" type="submit" class="btn radius-no primary">Register</button>
										<p class="text-dark mb-0">Already have account?<a href="login.php" class="text-primary ml-1">Sign In</a></p>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 m-b30">
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
										<h6 class="title">Hi. I'm Olaitan</h6>
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
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Post End -->
		<!-- Instagram Post Carousel -->
		
    <!-- Content END-->
	<!-- Footer -->
  <?php include 'include/footer.php' ?>