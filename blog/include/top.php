<div class="header-author">
		<div class="author-bx">
			<div class="author-media">
				<img src="images/ola.jpg" alt=""/>
			</div>
			<div class="author-info">
				<h2 class="title">Hi. I'm Olaitan</h2>
				<p>I am a fashionist based in Ireland</p>
				<ul class="author-social">
					<li><a href="javascript:void(0);" target="_blank" class=""><i class="fa fa-facebook"></i> <span>facebook</span></a></li>
					<li><a href="javascript:void(0);" target="_blank" class=""><i class="fa fa-instagram"></i> <span>instagram</span></a></li>
					<li><a href="javascript:void(0);" target="_blank" class=""><i class="fa fa-twitter"></i> <span>twitter</span></a></li>
					<li><a href="javascript:void(0);" target="_blank" class=""><i class="fa fa-linkedin"></i> <span>linkedin</span></a></li>
				</ul>
			</div>
			<?php 
			if(!empty($_SESSION["username"])) {
			echo '<ul class="author-social">
				
					<li><a href="../blog/logout.php" class=""><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
				</ul>';
			} ?>
		</div>
		<p><?php 
                        if(!empty($_SESSION["username"])) { //if user is logged in display a welcome username else leave blank
                            echo '<h4>'.$_SESSION['username'].'</h4>';

                        } else {
                            echo' <h4>Welcome!!! <br><a href="../blog/login.php">Sign In Here</a></h4>';
                        }
                        ?></p>
                        
	</div>