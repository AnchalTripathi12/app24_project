<?php
    $name = ["anchal","sandhya","sanju","123"];
    $age = ["anchal"=>21,"sandhya"=>22,"sanju"=>23];
    // print_r($name);
    // print_r($age);
    foreach($name as $val){
        echo $val."<br>";
    }
    foreach($age as $key=>$val){
        echo $key." ka age =".$val ."<br>";
    }
?>