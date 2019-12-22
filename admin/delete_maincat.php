<?php

include("config1.php");

  $id = $_GET['id'];

   $sql = "DELETE from main_cat where main_id=$id";

if(mysqli_query($con, $sql)){
  //  echo "Records added successfully.";
    header('Location:Mcat_list.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>