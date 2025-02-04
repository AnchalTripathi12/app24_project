<?php   
    class Demo{
        function __destruct(){
            echo "Hello destruct last me run hoga ";
        }
        function __construct(){
            echo " hello construct pahle run hoga ";
        }
        function demo(){
            echo " I am demo ";
        }
    }
    $obj= new Demo;
    $obj-> demo();

?>