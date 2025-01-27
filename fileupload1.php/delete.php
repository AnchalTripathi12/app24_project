<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $con=mysqli_connect('localhost','root','','crud_data');
        $sql="delete from fileupload1 where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert ('Record deleted successfully');
            window.location.href='read.php';
        </script>";
        }
    }else{
        header('Location:read.php');
    }
?>