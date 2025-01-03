<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $con=mysqli_connect('localohost','root','','crud_data');
        $sql="Delete from users4 where id=$id";
        if(mysqli_connct($con,$sql)){
            echo "<script>
                alert('Record Deleted Successfully');
                window.location.href='read.php';
            <script>";
        }
    }else{
        header('Location:read.php');
    }
?>