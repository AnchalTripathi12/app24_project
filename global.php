<?php
    $a=10;
    $b=20;
    function globleVar(){
        global $a,$b;
        echo $a,$b;
    }
    globleVar();
    echo "this is the global variable :".$a+++++
?>