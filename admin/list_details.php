<?php  
include_once("header.php");
include("config1.php"); 

$id=$_GET['id'];
  $sql = "SELECT * FROM model_details where model_id=$id";
$result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		$mcode=$row['model_code'];
		$mname=$row['model_name'];
		$mdesc=$row['model_desc'];
		$pdf=$row['pdf_upload'];
		$img=$row['images_slider'];
	}
?>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Typography</a></li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span9">
					<div class="box-header">
						<h2><i class="halflings-icon white font"></i><span class="break"></span>Model Details</h2>
					</div>
					<div class="box-content">
						  <div class="page-header">
							  
                              <h2>Model Name: <?php echo $mname;?></h2>
                              <h2>Model Code:<?php echo $mcode;?></h2>
                              <h2>Model Description:<br><br><?php echo $mdesc;?></h2>
                               <h2>Download PDF</h2>
                              <a href="uploads/pdf/<?php echo $pdf;?>" target="_blank">Click Here</a>
                              
                             
          
						  </div>     
						  
						  	 
					  </div>
				</div><!--/span-->
				
				<div class="box span3">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Images</h2>
					</div>
					<div class="box-content">
						                     <?php
							  $docarray = explode(',', $img);
foreach ($docarray as &$value) {
    if($value!="")
        {
   ?>
 <img src="uploads/images/<?php echo $value; ?>">                            
      <?php
    }
}
?>      
					</div>
				</div><!--/span-->
				
				
				
				
				
				
			
			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<?php  
include_once("footer.php");

?>