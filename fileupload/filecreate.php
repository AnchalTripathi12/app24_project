<?php
    $con=mysqli_connect('localhost','root','','crud_data');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            echo "<script>
                alert('Name field required');
            </script>";
        }elseif(empty($_FILES['image']['name'])){
            echo "<script>
            alert('File field required');
        </script>";
        }else{
            $name=$_POST['name'];
            $filename=time().$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,"../upload/$filename");
            $sql="insert into fileupload(name ,file) values('$name','$filename')";
            if(mysqli_query($con,$sql)){
                echo "<script>
                alert('Upload Successfully');
                window.location.href='read.php';
            </script>";
            }
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
        Name : <input type="text" name="name" value="">
        File : <input type="file" name="image">
        <button type="submit">Submit</button>
    </form>
</body>
</html>