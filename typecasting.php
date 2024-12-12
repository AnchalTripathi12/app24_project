<!-- typecasting -->
<?php
$var='100';
// $s='days';
// $p=$var+$s;
$s='10 days';
$p=$var.$s;
echo $p;
echo gettype($p);
?>