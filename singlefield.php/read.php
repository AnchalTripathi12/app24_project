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
        <th>Sr. No</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
   <?php
        $con=mysqli_connect('localhost','root','','crud_data');
        $sql="select * from singlefield";
        $data=mysqli_query($con,$sql);
        if(mysqli_num_rows($data)>0){
            while($record=mysqli_fetch_assoc($data)){
   
   ?>
    <tr>
    <td><?= $record['id']?></td>
        <td><?= $record['name']?></td>
        <td><?= $record['created']?></td>
        <td>
            <a href="delete.php?id=<?= $record['id']?>">Detete</a>
            <a href="update.php?id=<?= $record['id']?>">Update</a>
        </td>
    </tr>
    <?php   
     }
        }
        ?>
    </table>
</body>
</html>