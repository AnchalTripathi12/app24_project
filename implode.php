<?php
    $arr=["It","is","implode","function","for","array","to","string","conversion"];
    echo implode(" ",$arr)."<br>";

    // str_split(string):- it is convert string to array format and it returns array.
    $var="Anchal Tripathi";
    // print_r(str_split($var)); 
    for($i=0;$i<strlen($var);$i++){
        $ary[]=$var[$i];
    }
    print_r($ary);
?>