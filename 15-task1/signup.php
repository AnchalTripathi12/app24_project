<?php
    session_start();
    $con=mysqli_connect('localhost','root','','crud_data');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['email'])){
            echo "<script>
                alert('Email is requird');
            </script>";
        }elseif(empty($_POST['password'])){
            echo "<script>
                alert('Password is requird');
            </script>";
        }elseif(empty($_POST['c_password'])){
            echo "<script>
                alert('Confirm Password is requird');
            </script>";
        }else{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $c_pass=$_POST['c_password'];
            if(!empty($email)){
                $sql="select * from signup2 where email='$email'";
                $data=mysqli_query($con,$sql);
                if(mysqli_num_rows($data)>0){
                    echo "<script>
                    alert('Your given email already exist');
                </script>";
                }elseif($password!=$c_pass){
                    echo "<script>
                        alert('Password and Confirm Password not matched');
                    </script>";
                }else{
                    $sql="insert into signup2(email,password) values('$email','$password')";
                    if(mysqli_query($con,$sql)){
                        echo "<script>
                             alert('Account created Successfully');
                            window.location.href='login.php';
                            </script>";
                    }
                }
            }
        }
    }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
*{
    margin: 0px;
    padding: 0px;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
} 
.main-container{
    min-height: 400px;
    width:500px;
    background-color: #eeeeee;  
    border-radius: 20px; 
    align-items: center; 
    margin-top: 70px;
}
.reg-heading{
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 800;
    line-height: 24px;
    font-weight: 500;
    letter-spacing: 3px;
    background-color:#49103e;
    padding-top:20px;
    padding-bottom: 20px;
    color: #ffffff;
    border-radius: 10px 10px 0px 0px;
}
.main-container:hover{
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.input-row {
    display: flex;
    flex-direction:column;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 5px;
    margin-right:30px;  
}
.input-box{
    display: flex;
    flex-direction: column;
    width: 100%;
    margin-bottom: 5px;
}
.reg-label{
    font-size: 18px;
    font-weight: 500;
    padding-left: 20px;  
    color: #002233;
}
.reg-input{
    box-sizing: border-box;
    padding: 10px 5px;
    margin-left: 20px;
    margin-bottom: 5px;  
    font-size: 17px;
    outline: none;
    font-weight: 500;
    border-top: none;
    border-left: none;
    border-right: none;
    background: none;
}
.reg-input:hover{
    transform: translate(3px, 1px);
}
.button{
    text-align: center;
    margin-top: 40px; 
    margin-bottom: 40px;   
}
.reg-button{
    width: 60%;
    padding: 13px 20px;
    border-radius: 20px;
    font-weight: 400;
    font-size: 16px;
    background-color: #002233;
    color: #ffffff;    border: none;
    letter-spacing: 2px;
}
.reg-button:hover{
    cursor: pointer;
    background-color: #45a049;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.reg-link{
    background: #002233;
    padding-bottom: 20px;
    border-radius: 0px 0px 10px 10px;
}
.reg-h5{
    text-align: center;
    margin-top: 30px;
    font-size: 17px;
    font-weight: 400;
    color: #ffffff;
    letter-spacing: 2px;
    padding-top: 20px;
}
.reg-link a{
    color: #ffffff;
    letter-spacing: 2px;
}
@media (max-width: 600px) {
    .main-container{
        width: 90%;
    }
    .input-row {
        width: 90%;
    }
    .input-box {
        width: 100%;
        margin-left: 10px;
    }
    .reg-input {
        margin-left: 10px;
    }
    .reg-button {
        width: 98%;
        margin-left: 0px;
        margin-right: 0px;
    }
    #male{
        accent-color:yellow;
    }
}
    </style>
</head>
<body>
   <div class="main-container">
            <form action="" method="post">
                <h2 class="reg-heading">Signup </h2>
                <div class="input-row">
                
                    <div class="input-box">    
                        <label for="name" class="reg-label">email:</label>
                        <input type="text" name="email" class="reg-input">    
                    </div>
                </div>    
                <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">Password:</label> 
                        <input type="text" name="password" class="reg-input">
                    </div>
                    <div class="input-box">    
                        <label for="name" class="reg-label">Confirm Password:</label>
                        <input type="text" name="c_password" class="reg-input">    
                    </div>
                </div>  
                    <div class="button">
                     <button type="submit" class="reg-button">CREATE ACCOUNT</button>
                    </div>      
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have an Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
    </div>
</body>
</html>