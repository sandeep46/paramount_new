<?php  
include_once("header.php");
include("config1.php"); 
?>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">List</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>View List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Gallery</th>
								  
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  $sql = "SELECT * FROM gallery";
$result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		?>
						<tr>
								<td><img style="width:300px;height:100px"src="uploads/gallery/<?php echo $row['g_image'];?>"></td>
								
                              
								
									<td>
         
									<a class="btn btn-danger" href="delete_gallery.php?id=<?php echo $row['g_id'];?>">
										<i class="halflings-icon white trash"></i> 
									</a>
      </td>
									
							
							</tr>
					
							<?php
	}
	?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
		
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
	
	<?php  include_once("footer.php");?>