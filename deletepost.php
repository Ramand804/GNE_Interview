<?php

include("connect.php");
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql="delete from posts where postid=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: http://localhost/gne_interview/post.php");
    }else{
        die ("Something went wrong");
    }
}
?>