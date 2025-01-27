
<?php
    $con=mysqli_connect('localhost','root','','crud_data');
    session_start();
    if(isset($_SESSION['user'])){
        header('Location:read.php');
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select * from signup2 where email='$email' and password='$password'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['user']=$email;
            header('Location:read.php');
        }else{
            echo "<script>
            alert('email or password not match');
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .main-container{
        height:250px;
        width:300px;
        border:1px solid #000;
        margin:100px auto;
        text-align:center;
       }
       .reg-input{
        height:30px;
        width:180px;
        border:1px solid #000;
        margin-bottom:20px;
       }
       .reg-button{
        height:30px;
        width:90px;
        background:green;
        border:none;
        
       }
    </style>
</head>
<body>
<div class="main-container">
            <form action="" method="post">
                <h2 class="reg-heading">LOGIN</h2>
                <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">Email:</label> 
                        <input type="text" name="email" class="reg-input">
                    </div>
                    <div class="input-box">    
                        <label for="name" class="reg-label">Password</label>
                        <input type="password" name="password" class="reg-input">    
                    </div>
                    <div class="button">
                     <button type="submit" class="reg-button">Login</button>
                    </div> 
</div>
</div>
</body>
</html>