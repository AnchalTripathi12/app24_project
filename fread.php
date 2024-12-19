<?php
    $data =fopen("test.txt","r");
    echo fread($data,filesize('test.txt'))."<br>";
    echo fgets($data)."<br>";
    echo fgetc($data)."<br>";
    while (!feof($data)){
        echo fgetc($data);
    }
    fclose($data);
?>