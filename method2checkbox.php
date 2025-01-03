<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['validatecheck'])){
        if(empty($_POST['subject'])){
        //    echo "Please select atleast one subject";
        // this msg show in alert box-------------------->
        echo "<script>
        alert ('Please select atleast one subject');
        </script>";
        }
        else{
            print_r($_POST['subject']);
        }
        }
    }
   
    
?>

<form action="" method="post">
    Select Qualification :
        <input type="checkbox" name="subject[]" value="math">Math<br>
        <input type="checkbox" name="subject[]" value="phy">Physics<br>
        <input type="checkbox" name="subject[]" value="che">Chemistry<br>
        <input type="checkbox" name="subject[]" value="hindi">Hindi<br>
       
        <input type="submit" name="validatecheck">     
</form>