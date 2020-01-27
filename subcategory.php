<?php include('header.php');
$id=$_GET['id'];

?>
<style type="text/css">
	.selected{
font-weight: bold;

}
</style>
		
		<!-- Banner Start -->
		<div class="page-banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							<h1>Products</h1>
							<ul>
								<li><a href="index.php">Home</a></li>
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
					<div class="col-md-3">
						
						<!-- Sidebar Container Start -->
						<div class="sidebar">
							
							<div class="widget">
								<h4>Products</h4>
								<ul>
									<?php									
$sql = "SELECT * FROM main_cat order by main_id";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
$maincatname=$row['main_cat'];
$mainid=$row['main_id'];
?>
									<li <?php if($mainid==$id){echo  "class='selected'";}?>><a href="subcategory.php?id=<?php echo $mainid;?>"><?php echo $maincatname;?></a></li>
									<?php } ?>
								</ul>
							</div>
							
							
							
						</div>
						<!-- Sidebar Container End -->
					
					</div>
					<div class="col-md-9">
						
						<!-- Blog Classic Start -->
						
									<!-- Post Item End -->

									<!-- Post Item Start -->
									<section class="service-v3">
			<div class="container">
				<div class="row">
					<div class="col-md-9">

						

						<div id="mix-container">
																<?php									
$sql = "SELECT * FROM sub_cat where main_id_fk=$id order by scat_id";
$result = mysqli_query($con, $sql);
while($row2 = mysqli_fetch_assoc($result)) {
$subcatname=$row2['Sub_cat'];
$subid=$row2['scat_id'];
?>
							<div class="col-md-3 " style="margin-bottom: 10px;">
								<div class="inner">
									<div class="thumb">
										<img src="images/services/1.jpg" alt="">
										<div class="overlay"></div>
									</div>
									<div class="text" style="height:70px;">
										<h6><a href="product_list.php?id=<?php echo $subid;?>&mainid=<?php echo $id;?>"><?php echo $subcatname?></a></h6>
										
										
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