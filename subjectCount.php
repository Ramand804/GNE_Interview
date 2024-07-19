<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add New Comments</title>
    <script>
          function getBranchcode(course_code){
            var str='<option value="">--Select--</option>';
            $("#Coursecode").html('');
            
            <?php
            include("connect.php");
            $course_code=1;
               $sql="SELECT * FROM branch_code where course_code=$course_code";
                $result=mysqli_query($conn,$sql);
                $i=0;
                while($row=mysqli_fetch_array($result)){
                    ?>                  
                    str+='<option value="<?php echo $row["branch_code"] ?>"><?php echo $row["branch_name"] ?></option>';
                    <?php
                }
                ?>
                $("#Coursecode").html(str);
          }

        </script>
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
            <h3>Add New Comments</h3><br>
        </header>
        <form action="process.php" method="post">
        <div class="form-element my-04">
        <select class="form-control" name="Coursecode" placeholder="select Course Code" onchange="getBranchcode(this.value);">
            <option value="">--Select--</option>
        <?php
                include("connect.php");
                $sql="SELECT * FROM course_code";
                $result=mysqli_query($conn,$sql);
                $i=0;
                while($row=mysqli_fetch_array($result)){
                    ?>                  
                    <option value="<?php echo $row["course_code"] ?>"><?php echo $row["course_name"] ?></option>
                    <?php
                }
                ?>
            </select>
            </div>
            <br>
            <div class="form-element my-04">
        <select class="form-control" name="Coursecode" id="Coursecode" placeholder="select Course Code">
            <option value="">--Select--</option>
        
            </select>
            </div>
            <br>
            <div class="form-element" my-04>
                <input type="text" class="form-control" name="CommentContent" placeholder="Enter Comment Content">
            </div><br>
            <div class="form-element" my-04>
                <input type="date" class="form-control" name="CommentDate" placeholder="Enter Post Date">
            </div><br>
            <div class="form-element" my-04>
                <input type="submit" class="btn btn-success" name="submitComment" value="Add Comments" >
            </div>
        </form>
    </div>
        
</body>
</html>