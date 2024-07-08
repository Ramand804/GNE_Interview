<?php
$dbhost="localhost";
$dbUser="root";
$dbPass="";
$dbName="gne_interview";
$conn=mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Something went wrong");
}
?>