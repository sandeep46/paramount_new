<?php include('header.php'); 
include("admin/config1.php"); 

?>

		
		<!-- Slider Start -->
		<section class="main-slider">
			<div class="slider">
				<ul class="bxslider">
			<?php
  $sql = "SELECT * FROM slider";
$result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)) {
    	$img=$row['slider_image'];
	
	?>					<li style="background-image:url('admin/uploads/slidernew/<?php echo $img;?>');">
						<div class="overlay"></div>
						<div class="content">
							
						</div>
					</li>
	<?php
}
?>				
				</ul>
			</div>
		</section>
		<!-- Slider End -->


		<!-- Service Start -->
		<section class="service-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2><font color="#0BA997"><b>PARAMOUNT HEALTHCARE </b></font> - "A Commitment of Technology"</h2>
							
							<div class="sep"></div>
						</div>
					</div>
				</div>
                
                <!--
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInLeft">
							<div class="icon">
								<span class="icon-i-oncology"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Control and reduce your Service Cost</h3>
									
								</div>
							</div>
						</div>
					</div>
					<!--<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInUp">
							<div class="icon">
								<span class="icon-i-physical-therapy"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Diagnostic & Therapeutic Equipment</h3>
									<p> Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>
								</div>
							</div>
						</div>
					</div>-->
                    
                    
                    
 
                                   
                    
                    
					<!--<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInRight">
							<div class="icon">
								<span class="icon-i-dental"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Improve uptime and peak Equipment Performance</h3>
									
								</div>
							</div>
						</div>
					</div>
					<!--<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInLeft">
							<div class="icon">
								<span class="icon-i-laboratory"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Laboratory Equipment</h3>
									<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>
								</div>
							</div>
						</div>
					</div>-->
					<!--<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInUp">
							<div class="icon">
								<span class="icon-i-ear-nose-throat"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Meet High Standard of Patient Care </h3>
									
								</div>
							</div>
						</div>
					</div>
					<!--<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInRight">
							<div class="icon">
								<span class="icon-i-family-practice"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Calibration & Safety Check-up’s</h3>
									<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>
								</div>
							</div>
						</div>
					</div>-->
                    
                   <!-- <div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInLeft">
							<div class="icon">
								<span class="icon-i-administration"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Annual Maintenance Contract</h3>
									<p> Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>
								</div>
							</div>
						</div>
					</div>
                    
                                          


 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInUp">
							<div class="icon">
								<span class="icon-i-medical-library"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>Comprehensive Maintenance Contract</h3>
									<p> Eum aperiri definiebas concludaturque.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="item wow fadeInRight">
							<div class="icon">
								<span class="icon-i-text-telephone"></span>
							</div>
							<div class="text">
								<div class="inner">
									<h3>On Call Services</h3>
									<p> Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>
								</div>
							</div>
						</div>
					</div>-->
                    <div class="col-md-12" style="padding-left:60px;">
                    <img src="images/authors/certifications2.png"/>
                    </div>
              </div>      
			</div>
		</section>
		<!-- Service End -->

		
		<!-- Department Start -->
		<section class="department-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Our Products</h2>
							<p>We have All Major Products to Serve Customers</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						
						<!-- Department Tab Start -->
						<div class="department-tab">

							<ul class="nav nav-tabs col-md-4">

<?php		
$i=1;
$k=1;								
$sql = "SELECT * FROM main_cat order by main_id";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
$maincatname=$row['main_cat'];
$mainid=$row['main_id'];
if($i==1)
{
$status="class='active'";
}
else
{
$status="";
}
?>




								<li <?php echo $status;?>>
                                <a href="#tab<?php echo $mainid;?>" data-toggle="tab" aria-expanded="true">
                               
                                <?php echo $maincatname;?></a></li>

<?php
$i++;
}
?>
								
                                                            
                                                            			
							</ul>
							
							<!-- Tab Content Start -->
							<div class="tab-content col-md-8">
<?php	
							
$sql = "SELECT * FROM main_cat order by main_id";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
$maincatname=$row['main_cat'];
$mainid=$row['main_id'];
if($k==1)
{
$statusactive="active in";
}
else
{
$statusactive="";
}
$k++;
?>
								<div class="tab-pane fade <?php echo $statusactive; ?>" id="tab<?php echo $mainid;?>">
									<div class="row">										
										<div class="col-md-7">
											<div class="department-content">
												<h2><?php echo $maincatname;?></h2>
												<p>
													
												</p>
												<h3></h3>
												<div class="row">
													<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
														<ul>
	<?php
$sql2 = "SELECT * FROM sub_cat where main_id_fk=$mainid";
$result2 = mysqli_query($con, $sql2);
while($row2 = mysqli_fetch_assoc($result2)) {
$subcatname=$row2['Sub_cat'];
$subid=$row2['scat_id'];
?>      														<li><?php echo $subcatname;?></li>
															
<?php } ?>
                                                          
														</ul>
													</div>
													
												</div>
												<p class="button">
													<a href="subcategory.php?id=<?php echo $mainid;?>">See Details</a>
												</p>											
											</div>
										</div>
										<div class="col-md-5">
											<div class="thumb">
												<img class="img-fullwidth" src="images/departments/w1.jpg" alt="">
											</div>
										</div>
									</div>
								</div>


<?php } $k++; ?>






								
                                
                                
                                


					</div>
				</div>
			</div>
		</section>
		<!-- Department End -->



		<!-- Doctors Start 
		<section class="doctor-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Our Qualified Doctors</h2>
							<p>Meet with All Our Qualified Doctors</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- Doctor Carousel Start 
						<div class="doctor-carousel">

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/1.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Robin Cook</a></h3>
									<p>Neurosurgeon</p>
								</div>
							</div>


							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/2.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Bob Smith</a></h3>
									<p>Dentist</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/3.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Erica Frank</a></h3>
									<p>Cardiologist</p>
								</div>
							</div>


							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/4.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Emily Stowe</a></h3>
									<p>Gynecologist</p>
								</div>
							</div>


							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/1.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Robin Cook</a></h3>
									<p>Neurosurgeon</p>
								</div>
							</div>


							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/2.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Bob Smith</a></h3>
									<p>Dentist</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/3.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Erica Frank</a></h3>
									<p>Cardiologist</p>
								</div>
							</div>


							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/doctors/4.jpg" alt="">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">Dr. Emily Stowe</a></h3>
									<p>Gynecologist</p>
								</div>
							</div>

							
						</div>
						<!-- Doctor Carousel End 

					</div>
				</div>
			</div>
		</section>
		<!-- Doctors End -->


		
		<!-- Quote Start -->
		<section class="quote-v1 parallax parallax-1">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-6">
						<div class="quote-text wow fadeInLeft">
							One point contact for all your Medical Equipment Service needs…...
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="quote-button wow fadeInRight">
							<a href="#">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Quote End -->



		<!-- Pricing Start
		<section class="pricing-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Pricing</h2>
							<p>We are Offering Special Discounts Now</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="pricing-item wow fadeInLeft">
							<div class="title">BASIC PLAN</div>
							<div class="subtitle">30 Days Free Trial</div>
							<div class="price">
								<div class="hexa">
									<div class="amount"><span>$</span>29</div>
									<div class="time">per month</div>
								</div>
							</div>
							<div class="offer">
								<ul>
									<li>6 Specialties</li>
									<li>30 Tests and Treatments</li>
									<li>1 Medical Consultation</li>
									<li>1 Home Visit</li>
									<li>No Pregnancy Care</li>
									<li>No Assistance</li>
								</ul>
							</div>
							<div class="button">
								<a href="#">Select</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-item wow fadeInUp">
							<div class="title">GOLD PLAN</div>
							<div class="subtitle">Payable in every 6 month</div>
							<div class="price">
								<div class="hexa">
									<div class="amount"><span>$</span>69</div>
									<div class="time">per month</div>
								</div>
							</div>
							<div class="offer">
								<ul>
									<li>12 Specialties</li>
									<li>90 Tests and Treatments</li>
									<li>2 Medical Consultation</li>
									<li>2 Home Visit</li>
									<li>Available Pregnancy Care</li>
									<li>24 Hours Assistance</li>
								</ul>
							</div>
							<div class="button">
								<a href="#">Select</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-item wow fadeInRight">
							<div class="title">DIAMOND PLAN</div>
							<div class="subtitle">Payable in every year</div>
							<div class="price">
								<div class="hexa">
									<div class="amount"><span>$</span>99</div>
									<div class="time">per month</div>
								</div>
							</div>
							<div class="offer">
								<ul>
									<li>24 Specialties</li>
									<li>160 Tests and Treatments</li>
									<li>4 Medical Consultation</li>
									<li>4 Home Visit</li>
									<li>Available Pregnancy Care</li>
									<li>24 Hours Assistance</li>
								</ul>
							</div>
							<div class="button">
								<a href="#">Select</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Pricing End -->



		<!-- Testimonial Start
		<section class="testimonial-v1">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Testimonial</h2>
							<p>Our Happy Clients Tell About Us</p>
							<div class="sep sep-white"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- Testimonial Carousel Start 
						<div class="testimonial-carousel wow fadeInUp">
							<div class="item">
								<div class="testimonial-wrapper">								
									<div class="content">
										<div class="comment">
											<p>
												“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.”
											</p>
											<div class="icon"></div>
										</div>
										<div class="author">
											<div class="photo">
												<img src="images/testimonial/2.jpg" alt="">
											</div>
											<div class="text">
												<h3>JOHN DOE </h3>
												<h4>Managing Director <span>(ABC Inc.)</span></h4>
											</div>
										</div>										
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-wrapper">								
									<div class="content">
										<div class="comment">
											<p>
												“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.”
											</p>
											<div class="icon"></div>
										</div>
										<div class="author">
											<div class="photo">
												<img src="images/testimonial/3.jpg" alt="">
											</div>
											<div class="text">
												<h3>JOHN DOE </h3>
												<h4>CEO <span>(XYZ Ltd.)</span></h4>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						<!-- Testimonial Carousel End

					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial End -->




		<!-- News Start -->
		<section class="news-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Latest News</h2>
							<p>See All Our Updated and Latest News</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- News Carousel Start -->
						<div class="news-carousel">

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/news/1.jpg" alt="">
									<div class="date">
										<div class="day">25</div>
										<div class="month">Sep</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">News Title Here</a></h3>
									<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>
									<p>
										In pede quis wisi accumsan, et posuere ac, lectus morbi hendrerit auctor aliquet sed orci, in condimentum faucibus congue vel.
									</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/news/2.jpg" alt="">
									<div class="date">
										<div class="day">11</div>
										<div class="month">Aug</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">News Title Here</a></h3>
									<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>
									<p>
										In pede quis wisi accumsan, et posuere ac, lectus morbi hendrerit auctor aliquet sed orci, in condimentum faucibus congue vel.
									</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/news/3.jpg" alt="">
									<div class="date">
										<div class="day">28</div>
										<div class="month">Jun</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">News Title Here</a></h3>
									<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>
									<p>
										In pede quis wisi accumsan, et posuere ac, lectus morbi hendrerit auctor aliquet sed orci, in condimentum faucibus congue vel.
									</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/news/1.jpg" alt="">
									<div class="date">
										<div class="day">25</div>
										<div class="month">Sep</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">News Title Here</a></h3>
									<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>
									<p>
										In pede quis wisi accumsan, et posuere ac, lectus morbi hendrerit auctor aliquet sed orci, in condimentum faucibus congue vel.
									</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/news/2.jpg" alt="">
									<div class="date">
										<div class="day">11</div>
										<div class="month">Aug</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">News Title Here</a></h3>
									<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>
									<p>
										In pede quis wisi accumsan, et posuere ac, lectus morbi hendrerit auctor aliquet sed orci, in condimentum faucibus congue vel.
									</p>
								</div>
							</div>

							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="images/news/3.jpg" alt="">
									<div class="date">
										<div class="day">28</div>
										<div class="month">Jun</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="#">News Title Here</a></h3>
									<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>
									<p>
										In pede quis wisi accumsan, et posuere ac, lectus morbi hendrerit auctor aliquet sed orci, in condimentum faucibus congue vel.
									</p>
								</div>
							</div>
							
						</div>
						<!-- News Carousel End -->

					</div>
				</div>
			</div>
		</section>
		<!-- News End -->

			

		<!-- Partner Start -->
		<section class="partner-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Our Partners</h2>
							<p>All Our Company Partners are Listed Below</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
							
						<div class="partner-carousel">
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/1.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/2.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/3.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/4.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/5.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/6.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/7.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/1.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/2.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/3.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/4.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/5.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/6.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/7.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/1.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/2.png" alt=""></a>
								</div>
							</div>
                            
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/3.png" alt=""></a>
								</div>
							</div>
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/4.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/5.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/6.png" alt=""></a>
								</div>
							</div>
                            <div class="item wow fadeInUp">
								<div class="inner">
									<a href="#"><img src="images/partner/7.png" alt=""></a>
								</div>
							</div>
                            
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Partner End -->

<?php include('footer.php'); ?>
