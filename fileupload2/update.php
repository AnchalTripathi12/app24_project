
<?php
$con=mysqli_connect('localhost','root','','crud_data');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
        
    if(empty($_FILES['file']['name'])){
        $filename=$_POST['oldimg'];
    }else{
        $mg=$_FILES['file']['name'];
        foreach($mg as $key=>$val){
            move_uploaded_file($_FILES['file']['tmp_name'][$key],"images/$val");
        }
    }
    $filename=implode(',',$mg);
    $sql="update multiplefile set images='$filename' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Upload Successfully');
        window.location.href='read.php';
    </script>";
    }
}
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="select * from multiplefile where id=$id";
        $multi=mysqli_query($con,$sql);
        if(mysqli_num_rows($multi)>0){
            while($data=mysqli_fetch_assoc($multi))
    
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
        <input type="hidden" value="<?= $data['id']?>" name="id">
            <input type="hidden" name="oldimg" value="<?= $data['image']?>">
        File: <input type="file" multiple name="file[]" id="">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
        }
    }else{
        header('Location:read.php');
    }
?>