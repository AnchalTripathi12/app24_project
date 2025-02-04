<?php
    class Test{
        public $name;
        public function demo($name1){
            $this->name=$name1; //property setter
            echo "Hello Demo<br>";
        }
        public function demo1(){
            echo $this->name;
        }
    }
$obj= new Test;
$obj->demo("Anchal");
echo $obj->name."<br>"; //property getter
$obj->demo1();
?>