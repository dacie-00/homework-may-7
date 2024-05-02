<?php

//Exercise 6
//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string. Create a for loop that
//iterates non-associative array using php in-built function that determines count of elements in the array. Create a
//function that doubles the integer number. Within the loop using php in-built function print out the double of the
//number value (using your custom function).

function double(int $value): int
{
    return $value * 2;
}

$elements = [1, 2, 3, 0.25, "text"];

$elementCount = 0;
foreach ($elements as $element) {
    if (is_integer($element)) {
        echo double($element) . "\n";
    }
    $elementCount += 1;
}