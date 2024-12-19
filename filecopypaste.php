<?php
    $data=file_get_contents("images/img.jpg");
    file_put_contents("images/new.jpg",$data);
?>