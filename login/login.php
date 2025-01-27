<?php
session_start();
if(isset($_SESSION['logindata'])){
    header('Location:dashboard.php');
}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username=='ram@gmail.com' && $password=12345){
            $_SESSION['logindata']=$username;
            header('Location:dashboard.php');
        }else{
            echo "<script>
                alert('username or password is not matched');
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
        .container{
            height:240px;
            width:300px;
            /* border:1px solid #000; */
            box-shadow:0px 0px 10px #818181;
            margin:100px auto;
           border-radius:15px;
        }
        form{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            gap:20px;
        }
        input{
            height:30px;
            width:240px;
            border:none;
            border-bottom:2px solid hsl(321, 80.40%, 50.00%);
            padding:1px 10px;
            font-size:15px;
            color:#818181;
        }
        button{
            height:30px;
            width:170px;
            background:rgb(14, 228, 24);
            border:none;
           border-radius:10px;

        }
        h3{
            font-size:30px;
            line-height:7px;
            
        }
    </style>
</head>
<body>

   <div class="container">       
        <form action="" method="post">
            <h3>Login</h3>
            <input type="text" name="username">
            <input type="password" name="password">
    

            <button type="submit">Login</button>
        </form>
   </div>
</body>
</html>