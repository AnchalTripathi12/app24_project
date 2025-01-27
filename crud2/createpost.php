<?php
$anch=mysqli_connect('localhost','root','','crud_data');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['fname'])){
        echo "<script>
        alert('Please Enter your First Name ');
        window.location.href='create.php';
        </script>"; 
    }
    elseif(empty($_POST['lname'])){
        echo "<script>
        alert('Please Enter your Last Name ');
        window.location.href='create.php';
        </script>";
    }
    elseif(empty($_POST['phone'])){
        echo "<script>
        alert('Please Enter your Phone Number');
        window.location.href='create.php';
        </script>";
    }
    elseif(empty($_POST['email'])){
        echo "<script>
        alert('Please Enter your Email Id');
        window.location.href='create.php';
        </script>";
}
else{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
}
$sql="Insert into users2(fname,lname,phone,email) values('$fname','$lname','$phone','$email')"; 
if(mysqli_query($anch,$sql)){
    echo "<script>
        alert('Data inserted Successfully');
        window.location.href='read.php';
    </script>";
}
}
?>