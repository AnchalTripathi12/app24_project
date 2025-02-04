<?php
    class Test{
            public $name="Anchal Tripathi";
            public $age="21";
            public function demo(){
                echo $this->name."<br/>";
                return "Public Method and Property<br>";
            }
    }
    $obj=new Test;
    $obj->demo();

   echo $obj-> name,$obj->age."<br/>";

   class Derived extends Test{
    public function tst(){
        echo $this->name."<br/>";
    }
   }
   $object=new Derived;
   $object->tst();
?> 