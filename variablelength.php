<?php
    function variablelength(...$list){
        echo "Hello <br>";
        echo "<pre>";
        print_r($list);
    }
    variablelength(1,2,3,4,5,6,7,8,9,0);
?>
<!-- (...) => this is called spread operator -->