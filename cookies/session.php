<?php
    session_start();
    $_SESSION['user']='Hello';
    $_SESSION['pass']=['name'=>'ram','pass'=>'12345'];

    print_r($_SESSION);
?>