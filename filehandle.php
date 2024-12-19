<?php
    $res=fopen("blog-2.jpg",'r');
    $photo =fread($res,filesize("blog-2.jpg"));
    $dest =fopen("img.jpg",'w');
    fwrite($dest,$photo);
    fclose($dest);
    fclose($res);
?>