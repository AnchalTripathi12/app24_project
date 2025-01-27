<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $con=mysqli_connect('localhost','root','','crud_data');
        $sql="Delete from curdsl1 where id=$id";
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