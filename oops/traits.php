<?php
    trait Hello{
        public function demo(){
            echo "Hello Anchal 
            ";
        }
        public function hii(){
            echo "Hiiiii ";
        }
    }
    
    class Demo{
        use Hello;
        function test(){
            $this->hii();
        }
    }
    $obj= new Demo;
    $obj-> demo();
    $obj->test();

    class ferzy{
        use Hello;

    }
    $fr=new Ferzy;
    $fr-> demo();
    $fr->hii();
?>