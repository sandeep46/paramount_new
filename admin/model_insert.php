<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);

$modelcode = $_POST['modelcode'];
$modelname=$_POST['modelname'];
$modeldesc = $_POST['modeldesc'];
$subcat3=$_POST['subcat3'];
$subcat2=$_POST['subcat2'];
$subcat1=$_POST['subcat1'];
$maincat=$_POST['maincat'];
$status=$_POST['status'];
//image upload
 if (isset($_FILES['RA'])) {
                $myFile= $_FILES['RA'];
                $filecount = count($myFile["name"]);
                $RA_name="";
                for ($i = 0; $i < $filecount; $i++) 
{
 move_uploaded_file($myFile["tmp_name"][$i],'uploads/images/'.$myFile["name"][$i]);
                if($RA_name=="")
                  {
                      $RA_name=$myFile["name"][$i];
                  }
                  else {
                   $RA_name=$RA_name.",".$myFile["name"][$i];
                   }
                }
                
            }            
//$RA_name;
 if (isset($_FILES['pdf'])) {
move_uploaded_file($_FILES["pdf"]["tmp_name"], "uploads/pdf/".$_FILES["pdf"]["name"]);
$pdfname=$_FILES["pdf"]["name"];
 }
 else
 {
	$pdfname="";
 }

// attempt insert query execution
$sql = "INSERT INTO model_details (maincat_id,sub_cat1,sub_cat2,sub_cat3,model_code,model_name,model_desc,pdf_upload,images_slider,active) VALUES ('$maincat', '$subcat1', '$subcat2', '$subcat3', '$modelcode', '$modelname', '$modeldesc', '$pdfname', '$RA_name', '1')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>