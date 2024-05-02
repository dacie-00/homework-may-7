<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: \n";
print_r($numbers);

echo "Sorted numeric array: \n";
sort($numbers);
print_r($numbers);


$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: ";
print_r($words);

echo "Sorted string array: ";
sort($words);
print_r($words);