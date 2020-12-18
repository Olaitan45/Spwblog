<?php session_start();
include 'include/header.php';



?>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
	
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
					<?php include 'include/search.php' ?>
					
					<!-- main nav -->
					<?php include 'include/menu.php'?>
				</div>
			</div>
		</div>
    </header>
    <!-- header END -->
	<?php include 'include/top.php'?>
	<!-- Content -->
	<div class="page-content bg-white">
		<!-- Trending Post -->
		<div class="section-full trending-post-bx m-b20 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
			<div class="container-fluid">
				<div class="trending-post-carousel owl-carousel owl-none">
					<?php
					include 'admin/connection.php';
               			$query=mysqli_query($con,"SELECT * FROM post order by 1 DESC LIMIT 0,8");
                        			while($row=mysqli_fetch_array($query))
                        				{ $id = $row['id'];
                        				$title = $row ['title'];
                        				$date = $row['date'];
                        				$newDate = date("d M Y", strtotime($date));
    									$new_date = date('dS F, Y', strtotime($newDate)); ?>
					<div class="item">
						<div class="trending-post">
							<div class="dlab-post-media">
								<img src="admin/<?php echo $row['image']; ?>" style="height:95px;width:99px" alt="">
							</div>
							<div class="dlab-post-info">
								<h6 class="post-title"><a href="single_post.php?id=<?php echo $id ?>"><?php if(strlen($title) > 39){ echo substr($title, 0,38).' ..';}else{ echo $title; } ?></a></h6>
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);"><?php echo $row['category']; ?></a></li>
										<li class="post-date">at <span><?php echo $new_date ?></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- Trending Post End -->		
		<!-- Blog Post Carousel -->
		
		<!-- Blog Post End -->
		<!-- Post Grid Style -->
	
        <!-- Post Grid Style End -->
		<!-- Subscribe -->
   
		<!-- Subscribe End -->
		<!-- Blog Post -->
		<div class="section-full bg-white content-inner">
			<div class="container">
				<div class="section-head text-center">
					<span>Newlook Stores</span>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-12">
						<div class="row blog-box">
						
							<div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="blog-card blog-grid">
									<div class="dlab-post-media">
										<img src="images/newlook.jpg" alt="Travel">
									</div>
									<div class="blog-card-info">
										<div class="dlab-post-meta">
											<ul>
												<li class="post-category"><a href="javascript:void(0);"></a></li>
												<li class="post-date"> <span></span></li>
											</ul>
										</div>
										<h4 class="title"><a href="single_post.php?id=<?php echo $postid ?>">Newlook</a></h4>
										<div class="dlab-feed-meta">
											<span>Location: </span><h6>Ilac Centre, Henry Street, Dublin 1, Co. Dublin, D01 A213</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="blog-card blog-grid">
									<div class="dlab-post-media">
										<img src="images/newlook.jpg" alt="Travel">
									</div>
									<div class="blog-card-info">
										<div class="dlab-post-meta">
											<ul>
												<li class="post-category"><a href="javascript:void(0);"></a></li>
												<li class="post-date"> <span></span></li>
											</ul>
										</div>
										<h4 class="title"><a href="single_post.php?id=<?php echo $postid ?>">Newlook</a></h4>
										<div class="dlab-feed-meta">
											<span>Location: </span><h6>Ilac Centre, Henry Street, Dublin 1, Co. Dublin, D01 A213</h6>
										</div>
									</div>
								</div>
							</div>
						
					</div>
					
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
		<!-- Latest Post -->
		<div class="section-full latest-post-bx wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image:url(images/pattern/pt2.png);">
			<div class="setResizeMargin">
				<div class="section-head text-black no-line">
					<h6 class="title-head text-uppercase"><span>Latest Posts</span></h6>
				</div>
				<div class="post-carousel owl-carousel btn-style-1">
					<?php
					include 'admin/connection.php';
               			$query=mysqli_query($con,"SELECT * FROM post order by 1 DESC LIMIT 0,3");
                        			while($row=mysqli_fetch_array($query))
                        				{ $postid = $row['id'];
                        				$title = $row ['title'];
                        				$date = $row['date'];
                        				$newDate = date("d M Y", strtotime($date));
    									$new_date = date('dS F, Y', strtotime($newDate));

    									if(!empty($_SESSION["username"])) {
$userid= $_SESSION["userid"];

 // Checking user status
                    $status_query = "SELECT count(*) as cntStatus,type FROM like_unlike WHERE userid=".$userid." and postid=".$postid;
                    $status_result = mysqli_query($con,$status_query);
                    $status_row = mysqli_fetch_array($status_result);
                    $count_status = $status_row['cntStatus'];
                    if($count_status > 0){
                        $type = $status_row['type'];
                    }

                    // Count post total likes and unlikes
                    $like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=".$postid;
                    $like_result = mysqli_query($con,$like_query);
                    $like_row = mysqli_fetch_array($like_result);
                    $total_likes = $like_row['cntLikes'];

                    $unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=".$postid;
                    $unlike_result = mysqli_query($con,$unlike_query);
                    $unlike_row = mysqli_fetch_array($unlike_result);
                    $total_unlikes = $unlike_row['cntUnlikes'];


}


                    // Count post total likes and unlikes
                    $like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=".$postid;
                    $like_result = mysqli_query($con,$like_query);
                    $like_row = mysqli_fetch_array($like_result);
                    $total_likes = $like_row['cntLikes'];

                    $unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=".$postid;
                    $unlike_result = mysqli_query($con,$unlike_query);
                    $unlike_row = mysqli_fetch_array($unlike_result);
                    $total_unlikes = $unlike_row['cntUnlikes']; ?>
					<div class="item">
						<div class="blog-card blog-grid post-boxed">
							<div class="dlab-post-media">
								<img src="admin/<?php echo $row['image'] ?>" style="height: 250px" alt=""/>
							</div>
							<div class="blog-card-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);"><?php echo $row['category'] ?></a>,</li>
										<li class="post-date">at <span><?php echo $new_date ?></span></li>
									</ul>
								</div>
								<h4 class="title"><a href="single_post.php?id=<?php echo $postid ?>"><?php if(strlen($title) > 15){ echo substr($title, 0,14).' ..';}else{ echo $title; } ?></a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<input type="button" value="Like" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span>)&nbsp;

                            			<input type="button" value="Unlike" id="unlike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span>)
										</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- Latest Post End -->
		<!-- Most Popular -->
		
		<!-- Blog Post End -->
		<!-- Instagram Post Carousel -->

    <!-- Content END-->

	<!-- Footer -->
 <?php include 'include/footer.php'?>