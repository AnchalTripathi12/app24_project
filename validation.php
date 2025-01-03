<?php
    $nameerror=$emailerror='';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['validate'])){
            if(empty($_POST['name'])){
                $nameerror= "Name field is required";
            }
            if(empty($_POST['email'])){
                $emailerror=  "Email field is required";
            }
            if(!empty($_POST['name']) && !empty($_POST['email'])){
                echo $_POST['name'];
                echo $_POST['email'];
            }
        }
    }
?>
<form action="" method="post">
    Name: <input type="text" name="name"/>
    <small style="color:red"><?=  $nameerror?></small>
    Email: <input type="text" name="email"/>
    <small style="color:red"><?= $emailerror?></small>
<input type="submit" value="validation" name="validate">

</form>
