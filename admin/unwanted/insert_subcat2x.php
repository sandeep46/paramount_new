<?php

include("config1.php");
// Escape user inputs for security
//$main_name = mysqli_real_escape_string($link, $_REQUEST['maincat']);

 $scat_name = $_POST['sname'];
 $scat2 = $_POST['sname1'];
 $mcatid=$_POST['scat'];
// attempt insert query execution
$sql = "INSERT INTO sub_cat (main_id_fk,Sub_cat,subcat1) VALUES ('$mcatid','$scat_name','$scat2')";


if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// close connection
mysqli_close($con);
?>