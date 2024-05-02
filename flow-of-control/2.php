<?php

while (true) {
    $number = readline("Enter the number: ");
    if (!is_numeric($number)) {
        echo "Invalid input.\n";
        continue;
    }
    $number = (float)$number;
    break;
}

if ($number == 0) {
    $sign = "neither positive or negative";
} else {
    $sign = $number > 0 ? "positive" : "negative";
}

echo "The number is $sign!\n";