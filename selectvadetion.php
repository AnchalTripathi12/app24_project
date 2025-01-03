<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['validate'])){
            if(empty($_POST['name'])){
                header('Location:selectvadetion1.php?nameerror=Name field is required');
            }
            if(empty($_POST['email'])){
                header('Location:selectvadetion1.php?emailerror=Email field is required');
            }
            if(empty($_POST['number'])){
                header('Location:selectvadetion1.php?numerror=Number field is required');
            }
            if(empty($_POST['country'])){
                header('Location:selectvadetion1.php?countryerror=Please select a country');
            }
            if(empty($_POST['gender'])){
                header('Location:selectvadetion1.php?gendererror=Gender field is required');
            }
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number'])  && !empty($_POST['country'])){
                echo "my name is ".$_POST['name']."and email is ".$_POST['email']."and number is ".$_POST['number']."my country is ".$_POST['country']."my gender is ".$_POST['gender'];

            }
        }
    }
    else{
        echo "Invalid Request";
    }
?>