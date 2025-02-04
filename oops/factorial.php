<?php
    class Factorial{
        function facto($n){
            $fac=1;
            for($a=1;$a<=$n;$a++){
                $fac=$fac*$a;          
            }
            return $fac;         
        }                                                                                                              
    }
    $obj=new Factorial;
   echo $obj->facto(5);
?>