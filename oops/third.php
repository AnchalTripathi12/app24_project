<?php
    class Fruit{
        function mango(){
            echo "Aha mango";
        }
        function apple(){
            echo "This is apple";
        }
    }
    $fruit = new Fruit;
    $fruit -> mango();
    $fruit -> apple();
?>