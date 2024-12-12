<?php
    $a=11;
    $b=20;
    $c=$a || $b; // 1
    $c=$a && $b; // 1
    $c=$a>10 || $b<10; // false
    $c=$a>10 && $b<10; // false

    $c=!$a;
    $c=$a !=10;  //not euqual of 10
    echo $c;                                      
?>