<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['validatecheck'])){
        if(empty($_POST['subject'])){

            echo "<script>
                alert('Please select atleast one subject');
                window.location.href='checkbox.php';
            </script>";
            // header('Location:checkbox.php?checkerror=Please select atleast one subject');
        }
        else{
            print_r($_POST['subject']);
        }
        }
    }
    else{
        echo "Invalid Request";
    }
    
?>
