<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Post List</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-04">
           <h1><centre> List of Post<centre></h1> 
        <a href="addStudent.php" class="btn btn-primary">Add</a></header><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql="Select * from posts";
                $result=mysqli_query($conn,$sql);
                $i=0;
                while($row=mysqli_fetch_array($result)){
                    ?>
                   <tr> <td><?php echo ++$i; ?></td>
                    <td><?php echo $row["PostTitle"] ?></td>
                    <td><?php echo $row["PostTitle"] ?></td>
                    <td><?php echo $row["PostDate"] ?></td>
                    <td><a href="editPost.php?id= <?php echo $row["PostID"]; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletePost.php?id= <?php echo $row["PostID"]; ?>" class="btn btn-danger">Delete</a>
                </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>