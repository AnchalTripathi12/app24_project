<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['validate'])){
            if(empty($_POST['name'])){
                header('Location:validationtest1.php?nameerror=Name field is required');
            }
            if(empty($_POST['email'])){
                header('Location:validationtest1.php?emailerror=Email field is required');
            }
           if(empty($_POST['number'])){
                header('Location:validationtest1.php?numerror=Number field is required');
            }
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) ){
                echo "my name is ".$_POST['name']."and email is ".$_POST['email']."and number is ".$_POST['number'];

            }
            
        }
    }
    else{
        echo "Invalid Request";
    }
?>