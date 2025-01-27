<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="create.php">Created File</a>
    <table border=1>
            <tr>
                <th>id</th>
                <th>images</th>
                <th>created_at</th>
                <th>Action</th>
                
            </tr>
            <?php
                $con=mysqli_connect('localhost','root','','crud_data');
                $sql="select * from multiplefile";
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0){
                    while($record=mysqli_fetch_assoc($result)){

                  
            ?>
            <tr>
                <td><?= $record['id']?></td>
                <td>
                    <?php
                    $ig=explode(',',$record['images']);
                    foreach($ig as $val){
                        ?>
                        <img src="images/<?=$val?>" height="50px" width="50px" alt="">
                        <?php
                          }
                        ?>               
                </td>
                <td><?= $record['created_at']?></td>
                <td>
                    <a href="delete.php?id=<?= $record['id']?>">Delete</a>
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