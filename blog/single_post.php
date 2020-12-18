<?php session_start();
include 'include/header.php';?>
<?php        
include 'admin/connection.php';                                   
$getid=$_GET['id'];

$query=mysqli_query($con,"SELECT * FROM post WHERE id = '$getid'");
while ($row = mysqli_fetch_array($query)){  
$postid = $row['id'];                                                             
$title = $row['title'];
$content = $row['content'];
$image = $row['image'];
$category = $row['category'];
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
                    $total_unlikes = $unlike_row['cntUnlikes'];
?>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
	
<?php include 'include/top.php';?>
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
					<?php include 'include/menu.php'?>
				</div>
			</div>
		</div>
    </header>
    <!-- header END --> 
    <!-- Content -->





    <div class="page-content bg-white">
		<!-- About Us -->
		<div class="section-full content-inner bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-12">
						<div class="blog-post blog-single sidebar">
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										
										<li class="post-category">in <a href="javascript:void(0);"><?php echo $category ?></a>,</li>
										<li class="post-date">at <span><?php echo $new_date ?></span></li>
									</ul>
								</div>
								<h2 class="title"><?php ?></h2>
								<div class="dlab-post-text text mt-0">
									<div class="wp-block-image">
										<figure class="alignleft">
											<img src="admin/<?php echo $image ?>" style="height:100%" alt="">
										</figure>
									</div>
									<p><?php echo $content ?></p>
									
								</div>
								  <input type="button" value="Like" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span>)&nbsp;

                            <input type="button" value="Unlike" id="unlike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span>)

							</div>
						</div>
						<?php }?>
						<div class="min-container">
						
							<div class="clear m-b30" id="comment-list">
								<div class="comments-area" id="comments">
									<div class="section-head text-center">
										<span>Comments</span>
									</div>
									<!-- comment list END -->
                                    <ol class="comment-list">
                                    	 <?php
                                
                                                        
                                                      
                                                        $query=mysqli_query($con,"SELECT * FROM comment WHERE postid='$getid'");
                                                        while ($row = mysqli_fetch_array($query)){                                                               
                                                        $fullname = $row['fullname'];
                                                        $comment = $row['comment'];
                                                        $date = $row['date'];
														$newDate = date("d M Y", strtotime($date));
														$new_date = date('dS F, Y', strtotime($newDate));
                                                       
                                                        
                                                        
                                                        ?>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">  
													<cite class="fn"><?php echo $fullname?></cite> 
													<span class="says">says:</span> 
													 <div class="comment-meta"> <a href="javascript:void(0);"><?php echo $new_date?></a> </div>
												
												</div>
												<div class="comment-content">
													<p><?php echo $comment ?></p>
												</div>
                                            </div>
                                           
                                            <!-- list END -->
                                        </li>
										<?php } ?>
                                    </ol>
                                    <!-- comment list END -->
								</div>
							</div>
							<!-- Form -->
							<div class="comments-area" id="respond">
								<div class="comment-respond">
									<div class="section-head text-center">
										<span>LEAVE A REPLY</span>
									</div>
									<h3 class="comment-reply-title" id="reply-title">
										<small> <a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small>
									</h3>
									        <?php
                        include 'admin/connection.php'; 
                        if(!empty($_SESSION["username"])){

                            if(isset($_POST['submit']))
                        {
                            $fullname = mysqli_real_escape_string($con, htmlspecialchars($_POST['fullname']));
                            $email = mysqli_real_escape_string($con, htmlspecialchars($_POST['email']));
                            $comment = mysqli_real_escape_string($con, htmlspecialchars($_POST['comment']));
                            $date = date('Y-m-d H:i:s');
                            
                            
                            $query = mysqli_query($con,"INSERT INTO `comment` (id, email, fullname, comment, date, postid) VALUES (NULL, '$email', '$fullname', '$comment', '$date', '$getid')");
                           // $result = mysqli_query($con, $query);
					             if($query)  
					           {  
					                echo '<script>alert("Comment Submitted Successfully")</script>'; 
					           } 
					           else{
					           	echo 'Error';
					           }
                            
                         
                        }?>
									<form class="comment-form" method="post">
										<p class="comment-form-author">
											<label for="author">Name <span class="required">*</span></label>
											<input type="text" name="fullname" placeholder="Name">
										</p>
										<p class="comment-form-email">
											<label for="email">Email <span class="required">*</span></label>
											<input type="text" name="email" placeholder="Email">
										</p>
										<p class="comment-form-comment">
											<label for="comment">Comment</label>
											<textarea rows="8" name="comment" placeholder="Add a Comment" ></textarea>
										</p>
										<p class="form-submit">
											<input type="submit" name="submit" value="Post Comment" class="btn radius-no secondry">
										</p>
									</form>
									 <?php } 
									 else{         echo 'Please Login To Comment';
        
                                    
                                    } ?>
								</div>
							</div>
							<!-- Form END -->
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
										<h6 class="title">Hi. I'm Olaitan Oloriburuku Girl</h6>
										<p>I am a fashionist based in Melbourn.</p>
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
									<li><a href="category.html"><?php echo $category ?></a> <span class="badge"> </span> </li>
								<?php } ?>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us End -->
		<!-- Instagram Post Carousel -->
		
		<!-- Blog Card Carousel End -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
 <?php include 'include/footer.php'; ?>
