<?php
    class Test{
        private $a=10;
        private $b=20;
        private function demo(){
            echo "Hello Anchal<br>";
                          
        }
        public function demo1(){
            echo $this->a+$this->b."<br>";
            echo $this->demo();
        }
    }
    $test= new Test;
    $test->demo1();

    // class Child extends Test{
    //     echo $this->a;
    // }
    // $tst= new Child;
    // echo $tst->a;
?>