<?php include('header.php'); 
include("admin/config1.php"); 

$id=$_GET['id'];
  $sql = "SELECT * FROM model_details where maincat_id=$id";
$result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		$mcode=$row['model_code'];
		$mname=$row['model_name'];
		$mdesc=$row['model_desc'];
		$pdf=$row['pdf_upload'];
		$img=$row['images_slider'];
		$main_image=$row['main_image'];
		$subcat1=$row['sub_cat1'];
	}

?>
		
		<!-- Banner Start -->
		<div class="page-banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- Doctor Start -->
		<section class="doctor-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="doctor-single">
							<div class="thumb">
								
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php
    $docarray = explode(',', $img);
    $total= count($docarray);
    for($k=0;$k<=$total;$k++)
    {
    if($k==0)
    {
    $cl="active";
    }
    else
    {
    $cl="";
    }
    ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $k;?>" class="<?php echo $cl;?>" ></li>
 <?php
 }
 ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

 <div class="item active">
        <img src="admin/uploads/mainimage/<?php echo $main_image;?>" alt="">
      </div>
    	<?php

foreach ($docarray as &$value) {
    if($value!="")
        {
   ?>
    <div class="item">
      <img class="img-responsive" src="admin/uploads/images/<?php echo $value; ?>"> 
      </div>
                            
      <?php
    }
}
?>      
     

      
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


							</div>
							<div class="text">
								<h2>
<?php echo $mname; ?>
</h2>
								<h3><?php echo $mcode; ?></h3>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-8">
						
						<!-- Doctor Detail Tab Start -->
						<div class="doctor-detail-tab">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Product Specification</a></li>
								<li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Enquiry</a></li>
                               
							
								
							</ul>
							
							<!-- Tab Content Start -->
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab1">
									<div class="row">										
										<div class="col-md-12">
											<div class="content">
												<h2><?php echo $mname; ?></h2><br>
												<p>
                                                <?php echo $mdesc;?>

												<h2>Download PDF</h2>
												
                                                <a href="admin/uploads/pdf/<?php echo $pdf;?>" target="_blank">Click Here</a>
											</div>
										</div>
									</div>
								</div>
                                
                                
                                <div class="tab-pane fade" id="tab2">
									<div class="row">										
										<div class="col-md-12">
											<div class="content">
												<!--<h2>Highlights</h2>
												<p>
													<ul>
                                                    <li>Fully integrated system</li>
                                                     <li>Fast and easy to use</li>
                                                     <li>Grow your clinic</li>
                                                     </ul>

												</p>
												
												<div class="about-v1">
                                                
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            
                            
                            <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSIX">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSIX" aria-expanded="false" aria-controls="collapseSIX">
												 FEATURES
											</a>
										</h4>
										
									</div>
                                    
									<div id="collapseSIX" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSIX">
										<div class="panel-body">
                                        
											<p align="justify">
                                            
                                                    <img src="campion.png"/>
                                                    <img src="campions.png"/>
                                                    
                                                    
                                                         
                                            </p>
										</div>
									</div>
								</div>
                                </div>
                                </div>
                            -->
                                                

												
											</div>
										</div>
									</div>
								</div>
                                
                                
								<!--<div class="tab-pane fade" id="tab3">
									
											
											
                                            
                                            			
                        
                        
                        
                        
                        
                        
                        
								</div>-->

							

							

							
							</div>
							<!-- Tab Content End -->
						</div>
						<!-- Doctor Detail Tab End -->

					</div>
				</div>
			</div>
		</section>
		<!-- Doctor End -->


		<!-- Doctors Start -->
		<section class="doctor-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-normal">
							<h2>Our Related Products</h2>
						</div>
					</div>
				</div>
				<div class="gap-small"></div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- Doctor Carousel Start -->
						<div class="doctor-carousel">
<?php
$sql = "SELECT * FROM model_details where sub_cat1=$subcat1";
$result = mysqli_query($con, $sql);
while($row2 = mysqli_fetch_assoc($result)) {
$pname=$row2['model_name'];
$pid=$row2['model_id'];
$pcode=$row2['model_code'];
$mainimage=$row2['main_image'];
?>
							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="admin/uploads/mainimage/<?php echo $mainimage;?>" alt="">
								</div>
								<div class="text">
									<h3><a href="#"><?php echo $pname;?></a></h3>
									<p>Code:<?php echo $pcode;?></p>
									
								</div>
							</div>


<?php
}
?>							

							
						</div>
						<!-- Doctor Carousel End -->

					</div>
				</div>
			</div>
		</section>
		<!-- Doctors End -->



		<?php include('footer.php'); ?>
