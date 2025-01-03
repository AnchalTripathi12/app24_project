<?php
    $con=mysqli_connect('localhost','root','','crud_data');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['id'];
        $username=$_POST['username'];
        $sql="update singlefield set username='$username' where id='$id'";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('Record Update successfully');
                window.location.href='read.php';
            </script>";
        }
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="select * from singlefield where id='$id'";
        $single=(mysqli_query($con,$sql));
        if(mysqli_num_rows($single)>0){
            $result=mysqli_fetch_assoc($single);
        }
        
    }else{
        header('Location:read.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method="post">
  <div class="inp">
    <input type="hidden" value="<?= $result['id']?>">
                    <label for="">Username: </label>
                    <input type="text" name="username" value="<?= $result['username']?>">
                </div>
                <button>Create Account</button>
  </form>
</body>
</html>