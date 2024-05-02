<?php

//Exercise #3
//
//Write a program that reads a positive integer and count the number of digits the number has.

while (true) {
    $number = readline("Enter the number: ");
    if (!is_numeric($number)) {
        echo "Invalid input.\n";
        continue;
    }
    if ($number <= 0) {
        echo "Only numbers greater than zero are allowed.\n";
        continue;
    }
    break;
}

$digits = count(str_split($number));
$s = $digits > 1 ? "s" : "";
echo "The number has $digits digit{$s}.\n";