<?php
    // echo str_word_count("Hello world,hey?oh.oho");

    $a="Hello World";
    // $string="";
    // for($i=strlen($a)-1;$i>=0;$i--){
    //    $string.=$a[$i];
    // }
    // echo $string;


    // string reversed------------->

//    echo strrev("hello world");

    $string=" ";
    for($i=strlen($a)-1;$i>=5;$i--){
        $ay[]=$a[$i];
        $string.=$ay[$i];
    }
    echo $string;
?>