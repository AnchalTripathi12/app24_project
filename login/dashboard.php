<?php
    session_start();
    if(!isset($_SESSION['logindata'])){
        header('Location:login.data');
    }
?>
<style>
    .box{
        height:200px;
        width:400px;
        margin:100px auto;
        display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
    }
    h1{
        color:red;

    }
    .logindata{
        color:hsl(123, 84.10%, 27.10%);
        font-size:20px;
    }
    a{
        height:20px;
        width:100px;
        display:flex;
            justify-content:center;
            align-items:center;
            border:1px solid #000;
    }
</style>
<div class="box">
<h1>Welcome to dashboard,</h1>
<p class="logindata"><?= $_SESSION['logindata'] ?></p>
<a href="logout.php">Logout</a>
</div>