<div class="header-nav navbar-collapse collapse justify-content-left" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index.php"><img src="images/logo.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav">	
						
							<li><a href="trending.php">Trending Topics</a></li>
							<li><a href="style.php">Style Inspiration</a></li>
						
							<li class="has-mega-menu post-slider life-style">
								<a href="javascript:void(0);">Hair & Beauty Inspiration<i class="fa fa-chevron-down"></i></a>
								<div class="mega-menu">
									<div class="life-style-bx">
										<div class="life-style-tabs">
											<ul>
												
												<li><a href="javascript:void(0);" id="st-makeup" class="post-tabs">MakeUp</a></li>
												<li><a href="javascript:void(0);" id="st-hair" class="post-tabs">Hair</a></li>
												<li><a href="javascript:void(0);" id="st-nail" class="post-tabs">Nail</a></li>
											</ul>
										</div>
										<div class="life-style-post text-center">
											
											<div id="makeup" class="life-style-post-bx">
												<div class="header-blog-carousel owl-carousel owl-btn-center-lr">
													<?php
												include 'admin/connection.php';
							               			$query=mysqli_query($con,"SELECT * FROM post WHERE category = 'makeup' order by 1 DESC LIMIT 0,5");
							                        			while($row=mysqli_fetch_array($query))
							                        				{ $postid = $row['id'];
                        											$title = $row ['title']; ?>
													<div class="item">
														<div class="blog-post blog-sm">
															<div class="dlab-post-media">
																<a href="../blog/single_post.php?id=<?php echo $postid ?>">
																	<img src="admin/<?php echo $row['image'] ?>" style="height: 150px" alt=""></a>
															</div>
															<div class="dlab-post-info">
																<div class="dlab-post-title ">
																	<h5 class="post-title"><a href="../blog/single_post.php?id=<?php echo $postid ?>"><?php echo $title ?></a></h5>
																</div>
															</div>
														</div>
													</div>
													<?php } ?>
												
													
													
												</div>
											</div>
										
											<div id="hair" class="life-style-post-bx">
												<div class="header-blog-carousel owl-carousel owl-btn-center-lr">
													<?php
												include 'admin/connection.php';
							               			$query=mysqli_query($con,"SELECT * FROM post WHERE category = 'hair' order by 1 DESC LIMIT 0,5");
							                        			while($row=mysqli_fetch_array($query))
							                        				{ $postid = $row['id'];
                        											$title = $row ['title']; ?>
													<div class="item">
														<div class="blog-post blog-sm">
															<div class="dlab-post-media">
																<a href="../blog/single_post.php?id=<?php echo $postid ?>"><img src="admin/<?php echo $row['image'] ?>" style="height: 150px" alt=""></a>
															</div>
															<div class="dlab-post-info">
																<div class="dlab-post-title ">
																	<h5 class="post-title"><a href="../blog/single_post.php?id=<?php echo $postid ?>"><?php echo $title ?></a></h5>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
													
												</div>
											</div>
											<div id="nail" class="life-style-post-bx">
												<div class="header-blog-carousel owl-carousel owl-btn-center-lr">
													<?php
												include 'admin/connection.php';
							               			$query=mysqli_query($con,"SELECT * FROM post WHERE category = 'nail' order by 1 DESC LIMIT 0,5");
							                        			while($row=mysqli_fetch_array($query))
							                        				{ $postid = $row['id'];
                        											$title = $row ['title']; ?>
													
													<div class="item">
														<div class="blog-post blog-sm">
															<div class="dlab-post-media">
																<a href="../blog/single_post.php?id=<?php echo $postid ?>"><img src="admin/<?php echo $row['image'] ?>" style="height: 150px" alt=""></a>
															</div>
															<div class="dlab-post-info">
																<div class="dlab-post-title">
																	<h5 class="post-title"><a href="../blog/single_post.php?id=<?php echo $postid ?>"><?php echo $title ?></a></h5>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>

												</div>
											</div>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<a href="javascript:void(0);">Places To Shop<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="newlook.php">Newlook</a></li>
									<li><a href="penny.php">Pennys</a></li>
									<li><a href="dunn.php">Dunes</a></li>
									<li><a href="river_island.php">River Island</a></li>
								</ul>
							</li>
							<li><a href="about.php">About </a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>