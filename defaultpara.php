<?php
    function defaultPara($age=19){
        if($age>18){
            return "Eligible For Vote";

        }else{
            return "Not eligible for vote";
        }
    }
   echo defaultPara(11);
?>