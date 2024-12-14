<?php
    function sum($a,$b,$op){
            // echo 'Sum  of the '.$a.' and '.$b.' =>'.$a+$b;    
            switch($op){
                case '+':
                    echo $a+$b;
                break;
                case '-':
                    echo $a-$b;
                break;
                case '*':
                    echo $a*$b;
                break;
                case '/':
                    echo $a/$b;
                break;
    }
}
    sum(2,3,'/');
?>
