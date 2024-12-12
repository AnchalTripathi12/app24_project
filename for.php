<?php
    // for($i=1;$i<=10;$i++):  
    //    if($i !=10) 
    //    echo $i ."-"; 
    // else{
    //     echo $i;
    // }
    // endfor;
    // $sum=0;
    // for($i=1;$i<=10;$i++){
    //     $sum=$sum+$i;
      
    //   }   
    //   echo $sum ."<br>";

    // $fact=1;
    // for($i=5;$i>=1;$i--)
    // {
    //     $fact+=$i;
    // }
    // echo $fact;
    
 for($i=0; $i<10; $i++){
   
        for($j=1; $j<=9; $j++){
            if($i==9 && $j==9){
                echo $i."".$j;
            }           
   else{
    echo $i."".$j.",";
   }
 }
 echo "<br>";
 }
  


?>
