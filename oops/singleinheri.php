<?php
    class Base{
        function demo(){
            echo "This is the base class <br/>";
        }
    }
    class Derived extends Base{
        function __construct(){
            echo "This is the derived class <br/>";
        }
    }
    $derived = new Derived;
    $derived-> demo();
?>