<?php
include("connect.php");
if(isset($_POST["submitLogin"])){
    $userId=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);
    $sql="Select * from users where userid='$userId' and userpassword='$password'";
    $result=mysqli_query($conn, $sql);
    if($result==NULL || $result==''){
        die("Something went Wrong");
    }else{
        echo "login successfully";
        header("Location: http://localhost/gne_interview/post.php");
    }
}
if(isset($_POST["submitPost"])){
    $postTitle=mysqli_real_escape_string($conn,$_POST["postTitle"]);
    $postContent=mysqli_real_escape_string($conn,$_POST["postContent"]);
    $postdate=mysqli_real_escape_string($conn,$_POST["postdate"]);
        $sql="INSERT INTO posts(UserID, PostTitle, PostContent, PostDate) VALUES ('Ramand','$postTitle','$postContent','$postdate')";
        if(mysqli_query($conn, $sql)){
        header("Location: http://localhost/gne_interview/post.php");
    }else{
        die ("Something went wrong");
    }
}

if(isset($_POST["submitEditPost"])){
    $postTitle=mysqli_real_escape_string($conn,$_POST["postTitle"]);
    $postContent=mysqli_real_escape_string($conn,$_POST["postContent"]);
    $postdate=mysqli_real_escape_string($conn,$_POST["postdate"]);
    $id=mysqli_real_escape_string($conn,$_POST["id"]);
        $sql="update posts set PostTitle='$postTitle', PostContent='$postContent', PostDate='$postdate' where PostID='$id'";
        if(mysqli_query($conn, $sql)){
            header("Location: http://localhost/gne_interview/post.php");
    }else{
        die ("Something went wrong");
    }
}

if(isset($_POST["submitComment"])){
    $PostID=mysqli_real_escape_string($conn,$_POST["PostID"]);
    $CommentContent=mysqli_real_escape_string($conn,$_POST["CommentContent"]);
    $CommentDate=mysqli_real_escape_string($conn,$_POST["CommentDate"]);
        $sql="INSERT INTO comments(PostId, UserId, CommentContent, CommentDate) VALUES ('$PostID','Ramand','$CommentContent','$CommentDate')";
        if(mysqli_query($conn, $sql)){
        header("Location: http://localhost/gne_interview/comments.php");
    }else{
        die ("Something went wrong");
    }
}

?>