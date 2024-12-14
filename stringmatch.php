<?php
    function num($name){
        $count=0;
        for($i=0;$i<=strlen($name)-1;$i++){
            if(ord("a")<=ord("$name[$i]") && ord("z")>=ord("$name[$i]")){

                $count++;
           
        }
    }
    if($count==$i){
        echo"lowercase";
    }

else{
    echo"upercase";
}
}
    num("abchudh");
?>