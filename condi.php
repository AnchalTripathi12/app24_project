<?php
    $a=10;
if($a++ == 10 && ++$a != 12):
        echo "Equal";
// elseif($a-- + ++$a >20):
elseif(--$a + $a++ ==24):
        echo $a."<br>";
        echo "it is possible";
elseif($a - $a++ + --$a ==25):
      
        echo "kuchh nhi aa rha hai";
else:
        echo $a;
endif;
?>