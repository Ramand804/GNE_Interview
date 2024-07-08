<?php
include("connect.php");
if(isset($_POST["submitLogin"])){
    $userId=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);
    $sql="Select * from users where userid='$userId' and userpassword='$password'";
    $result=mysqli_query($conn, $sql);
    if($result==NULL){
        die("Something went Wrong");
    }else{
        require("post.php");
    }
}

?>