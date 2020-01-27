<?php

include("config1.php");

  $id = $_GET['id'];

   $sql = "DELETE from model_details where model_id=$id";

if(mysqli_query($con, $sql)){
  //  echo "Records added successfully.";
    header('Location:list.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>