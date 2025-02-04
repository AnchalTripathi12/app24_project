<?php
// this is a method overloading class.-->
    class Base{
        public function demo($a){
            echo "hello base class";
        }
    }
    class Child extends Base{
        public function demo($a,$b){
            echo "hello i am child ";
        }
    }
    $child= new Child;
    $child->demo(10,20);
?>