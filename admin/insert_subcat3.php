<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);
 $scat3=$_POST['scat3'];
 $scat_name = $_POST['scat_name'];
 $scat2 = $_POST['sname'];
 $mcatid=$_POST['scat'];
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
$sql = "INSERT INTO sub_cat3 (maincat_id,sub_cat1,sub_cat2,sub_cat3_name,image_subcat3) VALUES ('$mcatid','$scat2','$scat_name','$scat3','$pdfname')";


if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>