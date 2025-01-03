<?php
    $con=mysqli_connect('localhost','root','','crud_data');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['username'])){
            echo "<script>
                alert('username field required');
            </script>";
        } elseif(empty($_POST['fname'])){
                echo "<script>
                    alert('Father name field required');
                    </script>";
            }elseif(empty($_POST['dob'])){
            echo "<script>
                alert('Date of birth field required');
                </script>";
        }elseif(empty($_POST['email'])){
            echo "<script>
                alert('Email field is required');
                </script>";
        }elseif(empty($_POST['address'])){
            echo "<script>
                alert('Address field is required');
                </script>";
        }
        elseif(empty($_POST['gender'])){
            echo "<script>
                alert('Gender field is required');
                </script>";
        }elseif(empty($_POST['subject'])){
            echo "<script>
                alert('Gender field is required');
                </script>";
        }else{
            $username=$_POST['username'];
            $fname=$_POST['fname'];
            $dob=$_POST['dob'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $subject=implode($_POST['subject']);
            $sql="insert into crud33(username,fname,dob,email,address,gender,subject) values('$username','$fname','$dob','$email','$address','$gender','$subject')";
            if(mysqli_connect($con,$sql)){
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
    <meta charset="UTF-">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        .body{
            height:100vh;
            width:100%;
        }
        .container{
            height: 474px;
            width:70%;
            margin:100px auto;
            box-shadow:1px 1px 1px 5px #f6d3ea;
        }h4{
            font-size:30px;
            font-family:roboto;
            color:purple;
            position:relative;
            text-align:center;
            line-height:40px;
        }h4::after{
            position:absolute;
            content:"";
            height:2px;
            width:10%;
            background:purple;
            top:90%;
            left:45%;
            animation:animate 2s infinite;
        }
        @keyframes animate{
            0%{
            background:purple;
            }
            25%{
            background:green;
            }
            50%{
            background:yellow;
            }
            75%{
            background:purple;
            }
            100%{
            background:green;
            }
        }
        .box{
            height:150%;
            width:100%;
            border:1px solid #000;
            display:flex;
            flex-wrap:wrap;
            align-items:center;
            justify-content:center;
            
}label{
            font-size:17px;
            color: hsl(308, 93.60%, 50.80%);
            padding-top:5px;
}input,textarea{
    height:29px;
    width:60%;
 
}
.inp{
    height:60px;
    width:50%;
    border:1px solid #000;
    display:flex;
    align-items:center;
    justify-content:space-evenly;
}
 </style>
</head>
<body>
    <div class="container">
        <h4>welcome</h4>
        <form action="" method="post">
            <div class="box">
                <div class="inp">
                    <label for="">Username: </label>
                    <input type="text" name="username">
                </div>
                <div class="inp">
                    <label for="">Father's name: </label>
                    <input type="text" name="fname">
                </div>
                <div class="inp">
                    <label for="">Date Of Birth: </label>
                    <input type="text" name="dob">
                </div>
                <div class="inp">
                    <label for="">Email : </label>
                    <input type="text" name="email">
                </div>
                <div class="inp">
                    <label for="">Address : </label>
                   <textarea name="address" id=""></textarea>
                </div>
                <div class="inp">
                    <label for="">gender : </label>
                  <input type="radio" name="gender" value="male">Male
                  <input type="radio" name="gender" value="Female">Female
                </div>
                <div class="inp">
                    <label for="name">Subject : </label>
                   <input type="checkbox" value="hindi" name="subject[]">Hindi
                   <input type="checkbox" value="physics" name="subject[]">Physics
                   <input type="checkbox" value="chemistry" name="subject[]">Chemistry
                   <input type="checkbox" value="sanskrit" name="subject[]">Hindi

                </div>
            </div>
            <div class="button">
                     <button type="submit" class="reg-button">CREATE ACCOUNT</button>
                    </div> 
</form>
    </div>
</body>
</html>