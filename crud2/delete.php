<?php
    // print_r($_GET);

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $con=mysqli_connect('localhost','root','','crud_data');
        $sql= "Delete from users1 where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('Your Data deleted Successfully');
            window.location.href='read.php';
            </script>";
        }

    }
else{
    header('Location:read.php');
}
?>