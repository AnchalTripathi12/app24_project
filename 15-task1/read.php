<?php
       session_start();
       if(!isset($_SESSION['user'])){
           header('Location:login.php');
       }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>batch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
.admin-batch-container {
    min-height: 300px;
    width: 80%;
    background: #f5f0ed;
    margin: 50px auto;
    padding-bottom: 50px;
}
.admin-batch-text {
    font-size: 20px;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
.admin-batch-button {
    width: 100%;
    min-height: 50px;
    padding: 15px;
}
.admin-batch-bLink {
    text-decoration: none;
    font-size: 12px;
    letter-spacing: 0.5px;
    word-spacing: -2px;
    padding: 6px;
    color: #fff;
    background: #389af0;
    border: none;
    float: right;
}
.admin-batch-bLink:hover {
    outline: 2px solid #389af0;
    background: #fff;
    color: #389af0;
    transition: all ease-in-out 0.3s;
}
.admin-batch-tableOuter {
    width: 98%;
    padding: 20px;
    border-collapse: collapse;
    margin: auto;
}
.admin-batch-tableHead {
    border: 1px solid rgb(83, 82, 82);
    padding: 10px;
    background: #153450;
    color: #fff;
}
.admin-batch-tableData {
    border: 1px solid rgb(83, 82, 82);
    padding: 30px;
    color: #000;
}
.admin-batch-img {
    width: 60px;
    height: 60px;
}
.admin-batch-tdText {
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
}
.admin-batch-actionLink {
    display: flex;
    justify-content: space-evenly;
    text-decoration: none;
    color: #000;
    word-spacing: 5px;
    font-size: 20px;
}
.admin-batch-buttonIcon {
    padding: 2px 10px;
    background: #153450;
    border: 1px solid #ccc;
    color: #fff;
}
    </style>
</head>
<body>
    <a href="create.php">Create Data</a>
    <a href="logout.php">Logout</a>

    <div class="admin-batch-container">
        <h2 class="admin-batch-text"><i class="fa fa-file"></i> MANAGE BATCH</h2>
        <table class="admin-batch-tableOuter">
            <thead>
                <tr>
                <th class="admin-batch-tableHead">S.No</th>
                    <th class="admin-batch-tableHead" colspan="3" >Username</th>
                    <th class="admin-batch-tableHead" colspan="3" >DOB</th>
                    <th class="admin-batch-tableHead"  colspan="3" >gender</th>
                    <th class="admin-batch-tableHead" colspan="3" >country</th>
                    <th class="admin-batch-tableHead" colspan="3" >subject</th>
                    <th class="admin-batch-tableHead" colspan="3" >description</th>
                    <th class="admin-batch-tableHead" colspan="3" >Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $con=mysqli_connect('localhost','root','','crud_data');
                        $sql="select * from curdsl1";
                        
                        $result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($record=mysqli_fetch_assoc($result)){
                    ?>
                <tr>
                    <td class="admin-batch-tableData">
                        <div class="admin-batch-containImg">
                        <?= $record['id']?>
                        </div>
                    </td>               
                    <td class="admin-batch-tableData"  colspan="3">
                    <?= $record['username']?>
                    </td>
                    <td class="admin-batch-tableData"  colspan="3">
                    <?= $record['dob']?>
                    </td>
                    <td class="admin-batch-tableData"  colspan="3">
                    <?= $record['gender']?>
                    </td>
                    <td class="admin-batch-tableData"  colspan="3">
                    <?= $record['country']?>
                    </td>
                    <td class="admin-batch-tableData"  colspan="3">
                    <?= $record['subject']?>
                    </td>
                    <td class="admin-batch-tableData"  colspan="3">
                    <?= $record['description']?>
                    </td>
                    <td class="admin-batch-tableData"  colspan="3">
                    <a href="delete.php?id=<?= $record['id']?>">Delete</a>
                    <a href="Update.php?id=<?= $record['id']?>">Update</a>
                    </td>
                </tr>

            <?php              
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>