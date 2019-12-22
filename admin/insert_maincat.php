<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);

 $main_name = $_POST['maincat'];
  $id = $_POST['id'];
// attempt insert query execution
  if($id>0)
  {
   $sql = "UPDATE main_cat set main_cat='$main_name' where main_id=$id";
  }
  else
  {
   $sql = "INSERT INTO main_cat (main_cat) VALUES ('$main_name')";
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