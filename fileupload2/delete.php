<?php
    $con=mysqli_connect('localhost','root','','crud_data');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="delete from multiplefile where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert ('File deleted Successfully');
                window.location.href='read.php';
            </script>";
        }
    }
?>