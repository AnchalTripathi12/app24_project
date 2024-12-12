<?php

    // for indexing----------------------------->
    // $arr=[
    // [    [1,2,3], //Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) )
    //     [2,3,4]]
    // ];
    // print_r($arr[0][1][1]);  

    // for associative----------------------->

    $arr=["name"=>[ "age"=>1,2,"anc"=>3,5]
];
// print_r($arr);                 //Array ( [name] => Array ( [age] => 1 [0] => 2 [anc] => 3 [1] => 5 ) ) 
// print_r($arr['name'][0]);      //2

foreach($arr as $val):
    foreach($val as $v):
        echo $v;
    endforeach;
endforeach;
?>