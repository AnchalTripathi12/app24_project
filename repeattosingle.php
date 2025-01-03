<?php
 $data=[1,2,3,4,2,4];
    // $a=array_unique($data);
    // print_r($a) ;

    $output=[];
    foreach($data as $val){
        if(! in_array($val,$output)){
            $output[]=$val;
        }
    }
    echo "<pre>";
    print_r($output);
 
?>