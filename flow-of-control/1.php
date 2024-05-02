<?php

function promptNumberCount(): int
{
    while (true) {
        $numberCount = readline("How many numbers do you wish to input?: ");
        if (is_numeric($numberCount)) {
            return (int)$numberCount;
        }
        echo "Invalid input.\n";
    }
}

// https://stackoverflow.com/questions/3109978/display-numbers-with-ordinal-suffix-in-php
function ordinal(int $number): string
{
    $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
    if ((($number % 100) >= 11) && (($number % 100) <= 13))
        return $number . 'th';
    else
        return $number . $ends[$number % 10];
}

function getNumbers(int $count): array
{
    $numbers = [];
    for ($i = 1; $i <= $count; $i++) {
        $ordinal = ordinal($i);
        while (true) {
            $number = readline("Input the $ordinal number: ");
            if (!is_numeric($number)) {
                echo "Invalid input.\n";
                continue;
            }
            $numbers[] = (int)$number;
            break 1;
        }
    }

    return $numbers;
}

$numberCount = promptNumberCount();
$numbers = getNumbers($numberCount);
sort($numbers);
$largestNumber = end($numbers);
echo "The largest number is $largestNumber\n!";