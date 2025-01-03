<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>File</th>
            <th>Action</th>
        </tr>
        <?php
            $con=mysqli_connect('localhost','root','','crud_data');
            $sql="Select * from fileupload";
            $result=mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){

            
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><img src="../upload/<?= $row['file']?>" alt="" height="50px" width="50px"></td>
            <td>
                <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                <a href="upload.php?id=<?= $row['id'] ?>">Update</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>