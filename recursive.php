<?php
    function number($num){
        if($num<=10){
           echo $num."<br>";
           return number($num+1);

        }
    }
    echo number(1);


 
?>

