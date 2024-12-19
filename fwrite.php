<?php
    $res=fopen("demo.txt","w");
    $data="fwite function used to create a file and 
    write some text inside created file <br>";
    fwrite($res,$data);
    fclose($res);
?>