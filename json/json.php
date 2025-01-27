<?php
    $arr=["hello"=>"name","name"=>"anchal","email"=>"phone",];
    $json=json_encode($arr,JSON_PRETTY_PRINT);
    echo  $json;




    $decode=json_decode($json,true);
    print_r($decode);
    echo $decode['hello'];
    // var_dump($json);
    // echo $decode->hello;
?>