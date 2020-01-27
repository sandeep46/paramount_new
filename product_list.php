<?php 
include("admin/config1.php");
$id=$_GET['id'];
$mainid2=$_GET['mainid'];
//echo $mainid;exit;
$flag=0;
$sql3 = "SELECT * FROM sub_cat2 where subcat_id=$id";
$result3 = mysqli_query($con, $sql3);
while($row3 = mysqli_fetch_assoc($result3)) {
$flag=1;
}
if($flag==1)
{

header('Location:subcategory2.php?id='.$id);

}


include('header.php');

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
					<div class="col-md-3">
						
						<!-- Sidebar Container Start -->
						<div class="sidebar">
							
							<div class="widget">
								<h4>Sub Products</h4>
								<ul>
									<?php
					//				echo $mainid2;									
$sql2 = "SELECT * FROM sub_cat where main_id_fk=$mainid2 order by scat_id";
//echo $sql2;
$result2 = mysqli_query($con, $sql2);
while($row2 = mysqli_fetch_assoc($result2)) {
$subcatname=$row2['Sub_cat'];
$subid=$row2['scat_id'];
?>
									<li <?php if($subid==$id){echo  "class='selected'";}?>><a href="subcategory.php?id=<?php echo $mainid;?>"><?php echo $subcatname;?></a></li>
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
$sql = "SELECT * FROM model_details where sub_cat1=$id";
$result = mysqli_query($con, $sql);
while($row2 = mysqli_fetch_assoc($result)) {
$pname=$row2['model_name'];
$pid=$row2['model_id'];
$pcode=$row2['model_code'];
$mainimage=$row2['main_image'];
?>
							<div class="col-md-4" style="margin-bottom: 10px;">
							<a href="product_details.php?id=<?php echo $pid;?>">
								<div class="inner">
									<div class="text1">
										<h5><?php echo $pname?></h5>
										<p>Code:<?php echo $pcode;?></p>
										
									</div>
									<div class="thumb">
										<img src="admin/uploads/mainimage/<?php echo $mainimage;?>" style="width:200px;height:250px" alt="">
										<div class="overlay"></div>
									</div>
								
								</div>
								</a>
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
