<?php
    function rev(){
        $a="Anchal";
        $revered="";
        for($i=strlen($a)-1;$i>=0;$i--){
            echo $revered=$a[$i];
        }
    }
    rev();
?>
