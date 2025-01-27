<?php
$con=mysqli_connect('localhost','root','','crud_data');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    if(empty($_FILES['imag']['name'])){
        $filename=$_POST['oldimg'];
    }else{
        $filename=time().$_FILES['imag']['name'];
        $tmpname=$_FILES['imag']['tmp_name'];
        move_uploaded_file($tmpname,"../upload1/$filename");
    }
    $sql="update fileupload1 set name='$name', file='$filename' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
                 alert('Upload Successfully');
                 window.location.href='read.php';
                </script>";
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
   $sql="select * from fileupload1 where id=$id";
   $data=mysqli_query($con,$sql);
   if(mysqli_num_rows($data)>0){
    $record=mysqli_fetch_assoc($data);
   } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $record['id'] ?> " name="id">
        Name: <input type="text" name="name" value="<?= $record['name']?>">
        <input type="hidden" name="oldimg" value="<?= $record['file']?>">
        File: <input type="file" name="imag" >
        <img src="../upload1/<?= $record['file']?>" alt="" height="50px" width="50px">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
