<?php
    echo "Current Year is = ".date("Y")."<br>";    //        Current Year is = 2024
    echo "Current Year is = ".date("y")."<br>";    //     Current Year is = 24
    echo "Current Month Name is = ".date("M")."<br>";    //    Current Month is = Dec
    echo "Current Month is = ".date("m")."<br>";    //    Current Month is = 12
    echo "Current Date Name is = ".date("D")."<br>";    //    Current Date Name is = Wed
    echo "Current Date is = ".date("d")."<br>";    //     Current Date is = 18
    echo "Current hour is = ".date("H")."<br>";    //   Current hour is = 06
    echo "Current second is = ".date("s")."<br>";    //    Current second is = 47
    echo "Current Minute is = ".date("i")."<br>";    //   Current Minute is = 43
    echo "Current AM is = ".date("a")."<br>";    //  Current AM is = am
    echo "Current PM is = ".date("p")."<br>";    // Current PM is = +01:00
    echo date_default_timezone_get()."<br>";
    date_default_timezone_set("Asia/kolkata");
    echo "Current hour is = ".date("H")."<br>";    //   Current hour is = 11
    echo "Current second is = ".date("s")."<br>";    //    Current second is = 47
    echo "Current Minute is = ".date("i")."<br><br>";     ///Current Minute is = 24
    $a=mktime(11,52,40,12,18,2024 );
    echo date("y/m/d h:i:s a",$a)."<br><br>";             //24/12/18 11:52:40 am
    echo date("d/m/Y  h:i:s",strtotime("05/03/2004  12:10:20am"))."<br><br>";     //03/05/2004 12:10:20


    include_once('include.php');
    echo "<br><br>";
    require_once('include.php');

    ?>  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        h1{
            width:22%;
            color:teal;
            font-size:30px;
            font-family:roboto;
            border:2px double #000;
            padding: 0px 10px;
        }
        </style>

    <body>
          <h1>
            <?php
              echo date("d/m/Y h:i:s A");
            ?>
          </h1>
    </body>
    </html>

