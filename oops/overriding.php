<?php
    class Base{
        public function firstMethod(){
            echo "This is the base method ";
        }
    }
    class Child extends Base{
        public function firstMethod(){
            parent::firstMethod();
            echo "This is the child method";   
         }
    }
    // $obj=new Child;
    // $obj->firstMethod();

    class Secondchild extends Child{
        public function firstMethod(){
            parent::firstMethod();
            Base::firstMethod();
            echo "This is second child";
        }
    }
    $obj=new Secondchild;
    $obj->firstMethod();
?>