<?php
echo "\n1 -\n";
//Exercise 1
//Given variables (int) 10, string "10" determine if they both are the same.
$int = 10;
$str = "10";
if ($int === $str) {
    echo "They are both the same";
}

echo "\n2 -\n";
//Exercise 2
//Given variable (int) 50, determine if its in the range of 1 and 100.
$fifty = 50;
if ($fifty >= 1 && $fifty <= 100) {
    echo "Fifty is in range";
}

echo "\n3 -\n";
//Exercise 3
//Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".
$greeting = "hello";
if ($greeting === "hello") {
    echo "world";
}

echo "\n4 -\n";
//Exercise 4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.
$val = 333;
if ($val > 22 && $val < 50 && $val % 2 == 0) {
    echo "True";
}

echo "\n5 -\n";
//Exercise 5
//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.
$variable = 50;
$lowerBound = -23;
$upperBound = 50.32;
if ($variable >= $lowerBound && $variable <= $upperBound) {
    echo "Value is within bounds";
}

echo "\n6 -\n";
//Exercise 6
//Create a variable $plateNumber that stores your car plate number. Create a switch statement that prints out that its your car in case of your number.
$plateNumber = "AB-1234";
switch ($plateNumber) {
    case "AB-1234":
        echo "My car!!";
        break;
    default:
        echo "Not mine!!";
        break;
}

echo "\n7 -\n";
//Exercise 7
//Create a variable $number with integer by your choice. Create a switch statement that prints out text "low" if the value is under 50, "medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.
$number = 12345;
switch ($number) {
    case $number < 50:
        echo "low";
        break;
    case $number > 50 && $number < 100:
        echo "medium";
        break;
    case $number > 100:
        echo "high";
        break;
}


echo "\n";