<?php  
include_once("header.php");
include("config1.php"); 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql = "SELECT * FROM slider where slider_id=$id";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {

$catimg=$row['slider_image'];
}
}
else
{
	$catname="";
	$id="";
	$catimg="";
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
				<li>
					<i class="icon-edit"></i>
					<a href="#">Slider</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create Slider</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="insert_slider.php" enctype="multipart/form-data" method="post">
						  <fieldset>
						<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="hidden" name="previmg" value="<?php echo $catimg;?>">
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Upload slider(1920px*700px)</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="pdf" name="pdf" type="file">
							  </div>
							</div>
				
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

<?php  
include_once("footer.php");
?>