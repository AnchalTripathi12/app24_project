<?php
    interface Test{
        // public $name="Anchal";
        public function demo();
        public function hello();
    }
    interface Test1{
        public function who();
    }
    class Demo implements Test,Test1{
        public function hii(){
            echo "I am Hii<br>";
        }
        public function demo(){
            echo "i am demo interface<br>";
        }
        public function hello(){
            echo "i am hello interface<br>";
        }
        public function who(){
            echo "i am who interface<br>";
        }
    }
    $obj=new Demo;
    $obj->hii();
    $obj->demo();
    $obj->hello();
    $obj->who();

   
?>