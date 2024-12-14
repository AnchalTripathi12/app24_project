<?php
    function prime($num){
        $count=0;
        if($num <=1){
            echo "Not Prime Number";
        
        for($i=2;$i<$num;$i++){     
            if($num % $i==0){
                echo "Not Prime Number";
            }
        }
    }
        echo "Prime Number"
        
    }
    prime(10);
?>