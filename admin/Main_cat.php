<?php  
include_once("header.php");
include("config1.php"); 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql = "SELECT * FROM main_cat where main_id=$id";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
$catname=$row['main_cat'];
}
}
else
{
	$catname="";
	$id="";
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
					<a href="#">Main Category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create Main Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="insert_maincat.php" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Main Category </label>
							  <div class="controls">
							  	<input type="hidden" name="id" value="<?php echo $id;?>">
							<input type="text" class="span6 typeahead" value="<?php echo $catname;?>" id="maincat" name="maincat"  data-provide="typeahead" data-items="4" /> <!--data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block">Start typing to activate auto complete!</p>-->
							  </div>
							</div>
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
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