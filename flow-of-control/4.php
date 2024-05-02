<?php

//Exercise #4
//
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
//respectively. Otherwise, it shall print "Not a valid day".

$dayNumber = 3;

if ($dayNumber < 0 || $dayNumber > 6) {
    echo "Not a valid day.\n";
    exit();
}

switch ($dayNumber) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
}

echo "\n";