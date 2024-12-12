<?php
    $str="Hello World";
    echo lcfirst($str)."<br>";
    $stri="hello world";
    echo ucfirst($stri)."<br>";
    $upword="hello world";
    echo ucwords($upword)."<br>";

    // strtoupper(string):-> it convert string lower to upper case.
    $stru="hello world";
    echo strtoupper($stru)."<br>";

    $strl="HELLO WORLD";
    echo strtolower($stru)."<br>";

    echo substr($str,3)."<br>";  // substr((string $string , int $start [, int $length ]));
    echo strpos($str,"l")."<br>";       


    $ss ="Hello World";
    $aa ="Hello world";
    if($ss === $aa){
        echo 0;
    }
    else{
        echo 1;
    }


?>