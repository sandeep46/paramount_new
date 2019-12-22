<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);

 $subcat_name = $_POST['subcat_name'];
 $mcatid=$_POST['maincat'];
 //$RA_name;
 if (isset($_FILES['pdf'])) {
move_uploaded_file($_FILES["pdf"]["tmp_name"], "uploads/cat/".$_FILES["pdf"]["name"]);
$pdfname=$_FILES["pdf"]["name"];
 }
 else
 {
	$pdfname="";
 }
// attempt insert query execution
$sql = "INSERT INTO sub_cat (main_id_fk,Sub_cat,image_subcat) VALUES ('$mcatid','$subcat_name','$pdfname')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>