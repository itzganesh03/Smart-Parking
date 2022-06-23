<?php 
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<section class="w3l-header-4 mobile-header">
		<div class="header-tophny">
			<div class="container-fluid">
				<header class="top-headerhny">
					<!--/nav-->
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo.png" alt="logo" title="Your logo" style="height:35px;" />
                    </a>
						<!-- <a class="navbar-brand" href="index.html">
							Str<span class="fa fa-globe" aria-hidden="true"></span>ll</a> -->
						<!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item <?php if($actual_link == "http://localhost/parking/index.php"){ echo "active";}?>">
									<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://www.google.com/maps/search/near+by+parking+area/@23.0653643,72.5319679,12z/data=!3m1!4b1">Near By Parking Area</a>
								</li>
								<li class="nav-item <?php if($actual_link == "http://localhost/parking/about.php"){ echo "active";}?>">
									<a class="nav-link" href="about.php">About</a>
								</li>
								
							</ul>

						</div>


					</nav>
					<!--//nav-->
				</header>
			</div>
		</div>
	</section>