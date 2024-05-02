<?php

//Exercise #1
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.
$firstNumber = (int)readline("Enter a number: ");
$secondNumber = (int)readline("Enter another number: ");
if (($firstNumber === 15 || $secondNumber === 15) || ($firstNumber + $secondNumber === 15 || ($firstNumber - $secondNumber) === 15)) {
    echo "True";
}
