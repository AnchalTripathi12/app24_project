<?php
    $con=mysqli_connect('localhost','root','','crud_data');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['username'])){
            echo "<script>
                alert('Name field required');
            </script>";
        }else{
            $name=$_POST['username'];
            $sql="insert into singlefield(name) values('$name')";
            if(mysqli_query($con,$sql)){
                echo "<script>
                alert('Data inserted successfully');
                window.location.href='read.php';
            </script>";
            }
        }
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
                    <label for="">Username: </label>
                    <input type="text" name="username">
                </div>
                <button>Create Account</button>
  </form>
</body>
</html>