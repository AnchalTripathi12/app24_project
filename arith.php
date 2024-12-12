<?php
    $a=10;
    $b=20;
    echo $a+$b."<br>";
    echo $a-$b."<br>";
    echo $a*$b."<br>";
    echo $a/$b."<br>";
    echo $a%$b."<br>";
    echo $a**$b."<br>"; // 1.0E+20
    // echo $a^$b."<br>";Warning: A non-numeric value encountered in C:\xampp\htdocs\Appren-php\arith.php on line 10 30

    // Assignment Operator
    $a +=10; //$a= $a+10;
    echo $a."<br>"; //20

    $b *=10; //$b= $b*10;
    echo $b."<br>";  //2001

    $name="Anchal";
    $second="Tripathi";
    echo $name." ".$second."<br>"; // Anchal Tripathi
    $c=$a==$b;
    // echo $c;
    var_dump($c); ///bool(false)
    echo "<br>";
    $c=$a>=10;
   echo $c."<br>"; // 1
    var_dump("Anchal"); //string(6) "Anchal"
    echo "<br>";
    var_dump($c."Anchal"); //string(7) "1Anchal"
    echo "<br>";
    var_dump([1,"Hello",true,1.2,null]); //array(5) { [0]=> int(1) [1]=> string(5) "Hello" [2]=> bool(true) [3]=> float(1.2) [4]=> NULL }
?>