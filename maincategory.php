<?php include('header.php'); ?>

		
		<!-- Banner Start -->
		<div class="page-banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							<h1>Products</h1>
							<ul>
								<li><a href="home-layout-1.html">Home</a></li>
								<li><i class="fa fa-angle-right"></i></li>
								<li>Products</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		
		<!-- Blog Start -->
		<section class="blog">
			<div class="container">
				<div class="row">
					
					<div class="col-md-9">
						
						<!-- Blog Classic Start -->
						
									<!-- Post Item End -->

									<!-- Post Item Start -->
									<section class="service-v3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						

						<div id="mix-container">
																<?php									
$sql = "SELECT * FROM main_cat";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
$maincatname=$row['main_cat'];
$mainid=$row['main_id'];
?>
							<div class="col-md-3 mix cardiology all" data-my-order="2">
								<div class="inner">
									<div class="thumb">
										<img src="images/services/1.jpg" alt="">
										<div class="overlay"></div>
									</div>
									<div class="text">
										<h3><a href="subcategory.php?id=<?php echo $mainid;?>"><?php echo $maincatname?></a></h3>
										
										
									</div>
								</div>
							</div>
						<?php } ?>
							
							
							
						</div>

					</div>
				</div>
			</div>
		</section>

                                    
                                    
                                    
                                    
                                    
									<!-- Post Item End -->

									<!-- Post Item Start -->
									
									<!-- Post Item End -->

									<!-- Post Item Start -->
									
									<!-- Post Item End -->

									<!-- Post Item Start -->
									
									<!-- Post Item End -->
								</div>

								<div class="col-md-12">
									<div class="pagination">
										
									</div>
								</div>

							</div>
						</div>
						<!-- Blog Classic End -->

					</div>
					

					


				</div>
			</div>
		</section>
		<!-- Blog End -->
<?php include('footer.php'); ?>