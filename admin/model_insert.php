<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);

$modelcode = $_POST['modelcode'];
$modelname=$_POST['modelname'];
$modeldesc = mysqli_real_escape_string($con,$_POST['modeldesc']);
$subcat3=$_POST['subcat3'];
$subcat2=$_POST['subcat2'];
$subcat1=$_POST['subcat1'];
$maincat=$_POST['maincat'];
$status=$_POST['status'];
//echo $modeldesc;exit;
$id=$_POST['id'];
$mainimage="";
//Main image
if (isset($_FILES['MA'])) {
move_uploaded_file($_FILES["MA"]["tmp_name"], "uploads/mainimage/".$_FILES["MA"]["name"]);
$mainimage=$_FILES["MA"]["name"];
}
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

if($id>0)
{
$sql = "UPDATE model_details set maincat_id='$maincat',sub_cat1='$subcat1',sub_cat2='$subcat2',model_code='$modelcode',model_name='$modelname',model_desc='$modeldesc',pdf_upload='$pdfname',main_image='$mainimage',images_slider='$RA_name' where model_id=$id";

if(mysqli_query($con, $sql)){
     header('Location:list.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

}
else
{
$sql = "INSERT INTO model_details (maincat_id,sub_cat1,sub_cat2,sub_cat3,model_code,model_name,model_desc,main_image,pdf_upload,images_slider,active) VALUES ('$maincat', '$subcat1', '$subcat2', '$subcat3', '$modelcode', '$modelname', '$modeldesc', '$mainimage','$pdfname', '$RA_name', '1')";

if(mysqli_query($con, $sql)){
      header('Location:list.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

} 

 
// close connection
mysqli_close($con);
?>