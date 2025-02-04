<?php
    include 'namespace.php';
    $f= new First\Hello;
    $f->demo();
    $s= new Second\Hello;
    $s->demo();

    use Second\Demo\Test\Hello as hii;
    $bj = new hii;
    $bj -> demo();

?>