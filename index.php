<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php include("include/conn.php"); ?>
<!doctype html>
<html lang="zxx">

<head>
	<?php include('include/header.php'); ?>

</head>

<body>
	<!-- Headers-4 block -->
	<?php include('include/nav.php'); ?>


	<section class="w3l-gallery-6">
		<!--/gallery-->
		<div class="gallery-content-6 py-5">
			<div class="container py-lg-5">
				<div class="title-content mb-lg-5 mb-4">
					<span class="sub-title"></span>
					<h3 class="hny-title" align="center" style="margin-top: -65px;">Parking Dashboard </h3>
				</div>

				<div class="row gallery-grids">

					<?php
// Attempt select query execution

$sql = "SELECT inches FROM parkingdata ORDER BY id DESC LIMIT 1";
if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
        	header("refresh: 5");
                $dialvalue = $row['inches'];
				if($dialvalue < 20)
				{
?>
<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/no.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P1</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>
<?php
				}
				else
				{
?>
<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/yes.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P1</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>
<?php
				}
            //echo "</tr>";

        }

        mysqli_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Close connection

mysqli_close($link);

?>
<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/defined.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P2</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>
					<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/no.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P3</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>
					<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/no.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P4</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>
					<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/defined.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P5</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>
					<div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/defined.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P6</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div>





					<!-- <div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
						<div class="gal-slide-img">
							<a href="#"><img src="assets/images/no.jpg" class="img img-fluid" alt=""></a>
						</div>
						<div class="gal-slide-info">

							<a href="#">
								<h4 class="mt-4 mb-0">Slot P1</h4>
							</a>
							<h6 class="mt-sm-2 mt-1"> <span></span></h6>

						</div>
					</div> -->
			
					
					
				</div>
			</div>
		</div>
		<!--//gallery-->

	</section>
	
	<!-- footer-66 -->
	<?php include('include/footer.php'); ?>
	<!--//footer-66 -->
</body>

</html>
<?php include('include/footer_script.php'); ?>
