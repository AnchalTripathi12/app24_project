<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        print_r($id);
        $con=mysqli_connect('localhost','root','','crud_data');
        $sql="delete from fileupload where id=$id";
            if(mysqli_query($con,$sql)){
            echo "<script>
                alert ('Record deleted successfully');
                window.location.href='read.php';
            </script>";

        }
    }else{
        header('location:read.php');
    }
?>