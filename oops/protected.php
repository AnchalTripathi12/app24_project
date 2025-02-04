<?php
    class Test{
        protected $name = "Anchal Tripathi";
        protected function demo(){
            echo "Hello this is protected property";
        }
        public function demo1(){
            echo $this-> name;
            echo $this->demo();
        }
    }
    $obj=new Test;
    echo $obj->demo1();

    class Child extends Test{
        function hello(){
            echo "Hii";
            echo $this->demo();
        }
    }
    $object= new Child;
    $object->hello();
?>