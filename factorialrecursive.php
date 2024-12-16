<?php
       function fact($n){
        $facto=1;
        if($n<=5){
            echo $facto=$facto*$n;
            return fact($n+1);
        }
     
    }
 fact(1);




//  function factorial($num){
//     if($num==0){
//         return 1;
//     }
//     return $num*factorial($num-1);
//  }
//  echo factorial(5);
?>