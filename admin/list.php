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
								  <th>Model Code</th>
								  <th>Model Name</th>
								  
								  <th>PDF</th>
								  <th>VIEW</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  $sql = "SELECT * FROM model_details";
$result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		?>
						<tr>
								<td><?php echo $row['model_code'];?></td>
								<td><?php echo $row['model_name'];?></td>
							
								<td><?php echo $row['pdf_upload'];?></td>
                              
								<td class="center">
									<a class="btn btn-success" href="list_details.php?id=<?php echo $row['model_id'];?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									 <a class="btn btn-info" href="Model_page.php?id=<?php echo $row['model_id']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="Model_page.php?id=<?php echo $row['model_id'];?>">
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