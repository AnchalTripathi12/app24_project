<?php
    class Base{
        function demo(){
            echo "This is base class";
        }
    }
    class Child extends Base{
        function test(){
            echo "This is first child";
        }
    }
    $obj= new Child;
    $obj-> test();
    $obj-> demo();

    class Second extends Child{
        function hello(){
            echo "I am Anchal ";
        }
    }
    $second= new Second;
    $second-> test();
?>