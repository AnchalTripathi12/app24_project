<!-- SUPERGLOBLE VARIABLE : ---- ---- It is predefined variable which accessible of any regardless scape (Anywhere like- inside of the function and class, outside of the function and class)  -->
<!------1. $GLOBALS ------>
<?php
   $x=10;
   function demo(){
    echo $GLOBALS['x'];
    $GLOBALS['y']=20;
   } 
   demo();
   echo $y;
?>