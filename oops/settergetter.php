<?php
    class Test{
        public $name;
        public function demo(){
            echo $this -> name; // property getter
            echo "Hello Demo";
        }
    }
    $test= new Test;
    $test->name="Anchal";
    $test->demo();
?>