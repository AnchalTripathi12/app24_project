<?php
    // setcookie('user','anchal',time()+3600);
    // print_r($_COOKIE['user']);

    setcookie('user',$_SERVER['REMOTE_ADDR'],time()+3600);
    print_r($_COOKIE);
?>