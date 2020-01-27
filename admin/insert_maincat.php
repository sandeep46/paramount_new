<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);

 $main_name = $_POST['maincat'];
  $id = $_POST['id'];

   if (isset($_FILES['pdf'])) {
move_uploaded_file($_FILES["pdf"]["tmp_name"], "uploads/maincat/".$_FILES["pdf"]["name"]);
$pdfname=$_FILES["pdf"]["name"];
 }
 else
 {
  $pdfname="";
 }



// attempt insert query execution
  if($id>0)
  {
   $sql = "UPDATE main_cat set main_cat='$main_name' where main_id=$id";
  }
  else
  {
   $sql = "INSERT INTO main_cat (main_cat,main_image) VALUES ('$main_name','$pdf')";
}
if(mysqli_query($con, $sql)){
  //  echo "Records added successfully.";
    header('Location:Mcat_list.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>