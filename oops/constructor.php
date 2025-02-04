<?php
    class demo{
        function demo(){
            echo "hello demo";
        }
        function __construct($name,$num){
            echo "$name Constructor $num";
        }
       
    }
    $demo = new Demo("Hello",12);
?>