<?php
    // function fun(){
    //     $a=9;
    //     $b=2;
    //     $c=$a+$b;
    //     echo $c;
    // }
    // fun();



    // function fun($a,$b){
    //    echo $c=$a+$b;
    // }
    // fun(10,20);

    function fun(){
        // $b=10;
        // $s=12;
        // $c=$b+$s;
        // echo $c;

        for($i=0;$i<=10;$i++){
             $a[]= $i."<br>";
        }
        return $a;
    }
    print_r(fun()) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
    fun();
    ?>
</body>
</html>