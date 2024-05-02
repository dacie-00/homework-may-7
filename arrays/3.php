<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$searchedValue = readline("Enter the value to search for: ");

$key = array_search($searchedValue, $numbers);

if ($key !== false) {
    echo "Value found at key $key.\n";
} else {
    echo "Value not found.\n";
}