<?php   
    class ClassName{
       public $name= "Anchal"; // Property 
        function demo(){ //////////////   method
            $name1 ="Hello";      //////////////  variable
            return $name1;
        }
    }
    $obj = new ClassName; // object
    $abc= new ClassName; 
    // var_dump($obj);
    echo $obj->name;
    echo $abc-> name;
    echo $obj-> demo()
?>