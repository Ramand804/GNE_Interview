<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Comments List</title>
</head>
<body>
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
           <h3><u><centre> List of Comments<centre></u></h3> 
        <a href="addComments.php" class="btn btn-primary">Add</a></header><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>User Name</th>
                    <th>Post Title</th>
                    <th>Comment Content</th>
                    <th>Comment Date</th>
                    <th>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql="SELECT c.CommentId,c.CommentContent,c.CommentDate,p.PostTitle,u.UserName FROM comments c
inner join posts p on p.PostID=c.PostId
inner join users u on u.UserId=p.UserID";
                $result=mysqli_query($conn,$sql);
                $i=0;
                while($row=mysqli_fetch_array($result)){
                    ?>
                   <tr> <td><?php echo ++$i; ?></td>
                    <td><?php echo $row["UserName"] ?></td>
                    <td><?php echo $row["PostTitle"] ?></td>
                    <td><?php echo $row["CommentContent"] ?></td>
                    <td><?php echo $row["CommentDate"] ?></td>
                    <td><a href="editComment.php?id= <?php echo $row["CommentId"]; ?>" class="btn btn-warning">Edit</a>
                    <a href="deleteComment.php?id= <?php echo $row["CommentId"]; ?>" class="btn btn-danger">Delete</a>
                </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>