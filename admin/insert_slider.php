<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);


  $id = $_POST['id'];

   if (isset($_FILES['pdf'])) {
move_uploaded_file($_FILES["pdf"]["tmp_name"], "uploads/slidernew/".$_FILES["pdf"]["name"]);
$pdfname=$_FILES["pdf"]["name"];
 }
 else
 {
  $pdfname=$_POST['previmg'];
 }



// attempt insert query execution
  if($id>0)
  {
   $sql = "UPDATE slider set slider_image='$pdfname' where slider_id=$id";
  }
  else
  {
   $sql = "INSERT INTO slider (slider_image) VALUES ('$pdfname')";
}
if(mysqli_query($con, $sql)){
  //  echo "Records added successfully.";
    header('Location:list_slider.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>