<?php
    class Dada{
        function demo(){
            echo "I am dada ";
        }
    }
    class Papa extends Dada{
        function demo1(){
            echo "I am Papa ";
        }
    }
    class beta extends Papa{
        function demo2(){
            echo "I am Beta ";
        }
    }
    $obj= new beta;
        $obj-> demo1();
        $obj-> demo();
        $obj-> demo2();
    ?>