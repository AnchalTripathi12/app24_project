<?php
   session_start();
   if(!isset($_SESSION['user'])){
       header('Location:login.php');
   }
    if(isset($_GET['S.No'])){
        $id=$_GET['S.No'];
        $con=mysqli_connect('localohost','root','','crud_data');
        $sql="Delete from use4 where S.No=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('Record Deleted Successfully');
                window.location.href='read.php';
                <script>";
        }
    }else{
        header('Location:read.php');
    }
?>