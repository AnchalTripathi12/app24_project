<?php
    // switch(expression){
    //     case condition:
    //         // statement
    //     case condition:
    //         // statement
    // }

    $age= 20;
    switch($age){
        case 0:
            echo "Invalid Number";
            break;
        case $age >=18:
            echo "Eligible for vote";
            break;
        case $age <18:
            echo "Not eligible for vote";
            break;
        default:
            echo "No data match";
            break;

    }
?>