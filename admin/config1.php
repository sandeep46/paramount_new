<?php

$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "paramcmn_pmtdb";

//connection to the database
$con = mysqli_connect($hostname, $username, $password, $database);
// Make sure we connected successfully
/*if(!$con)
{
    die('Connection Failed'.mysql_error());
}
else
{

//echo "connected";
}
*/
?>