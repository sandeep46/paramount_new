<?php include('header.php'); ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
		
		<!-- Banner Start -->
		<div class="page-banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							<h1>Gallery</h1>
							<ul>
								<li><a href="home-layout-1.html">Home</a></li>
								<li><i class="fa fa-angle-right"></i></li>
								<li>Gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		
		<div class="container gallery-container">

    <h1>Gallery</h1>

    <p class="page-description text-center">Thumbnails With Title And Description</p>
    
    <div class="tz-gallery">

        <div class="row">

            <?php
  $sql = "SELECT * FROM gallery";
$result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)) {
        $img=$row['g_image'];
    
    ?>    
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="admin/uploads/gallery/<?php echo $img;?>">
                        <img src="admin/uploads/gallery/<?php echo $img;?>" alt="Park">
                    </a>
                 
                </div>
            </div>

        <?php
    }
        ?>    
           
        </div>

    </div>

</div>
<?php include('footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>