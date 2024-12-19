<?php
    $res=fopen('demo.txt','a');
    fwrite($res," It is demo file.");
    fclose($res);
?>