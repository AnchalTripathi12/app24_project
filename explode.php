<?php
    $str="It is explode function, for string to array conversion";
    $arr=explode(" ",$str);
    print_r( $arr);
    echo "<br>";
    echo $arr[1];
    echo "<br>";

    $a="hello world";
    $ay=explode(" ",$a);
    $strr=strrev($ay[1]);
    echo $ay[0].$strr;

?>