<?php
    $var=100;
    if($var != '100' && $var ===100){
        echo "Equal";
    }
    elseif(!$var){
        echo "Again Equal";
    }
    elseif($var >10 || $var <10){
        echo "Hello";
    } 
    else{
        echo "Not equal";
    }
    // echo "All the best";             
?>