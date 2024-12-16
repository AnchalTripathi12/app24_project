<?php
    function calculator($a,$b,$operator){
            switch($operator){
                case '+':
                    return $a+$b;
                case '-':
                    return $a-$b;
                case '*':
                    return $a*$b;
                case '/':
                    return $a/$b;
            }
    }
    echo calculator(10,20,'+');
?>