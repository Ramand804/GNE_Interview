<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Existing Post</title>
</head>
<body><br>
<div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/gne_interview/post.php">Posts</a>
      <a class="navbar-brand" href="http://localhost/gne_interview/comments.php">Comments</a>
      <a class="navbar-brand" href="http://localhost/gne_interview/categories.php">Categories</a>
    </div>
</div>
</nav>
        <header class="d-flex justify-content-between my-04">
            <h3><u>Edit Existing Post</u></h3><br>
        </header>
        <?php
      if(isset($_GET["id"])){
        $id=$_GET["id"];
        include("connect.php");
        $sql="select * from posts where PostID=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        ?>
        <form action="process.php" method="post">
            <div class="form-element my-04">
            <input type="text" style="display:none" class="" name="id" value="<?php echo $row["PostID"]; ?>">
                <input type="text" class="form-control" value="<?php echo $row["PostTitle"]; ?>" name="postTitle" placeholder="Enter Post Title">
            </div>
            <br>
            <div class="form-element" my-04>
                <input type="text" class="form-control" value="<?php echo $row["PostContent"]; ?>"  name="postContent" placeholder="Enter Post Content">
            </div><br>
            <div class="form-element" my-04>
                <input type="date" class="form-control" value="<?php echo $row["PostDate"]; ?>" name="postdate" placeholder="Enter Post Date">
            </div><br>
            <div class="form-element" my-04>
                <input type="submit" class="btn btn-success" name="submitEditPost" value="Edit Post" >
            </div>
        </form>
        <?php
      }
      ?>
    </div>
        
</body>
</html>