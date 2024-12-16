<?php
    $fact=function($n){
        $functo=1;
        for($a=1;$a<=$n;$a++){
            $functo=$functo*$a;
        }
        echo $functo;
    };
    $fact(4);
?>