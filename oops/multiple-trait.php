<?php
    trait Hello{
        public function demo(){
            echo "Hello Multiple Traits.";
        }
    }
    trait Second{
        public function hii(){
            echo "Hiii Multiple Traits.";
        }
    }
    class Join{
        use Hello,Second;
    }

    $obj=new Join;  
    $obj->hii();
    $obj->demo();



?>