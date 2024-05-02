<?php

function validate(string $input): bool
{
    return is_numeric($input);
}

while (true) {
    $base = readline("Input a base number: ");
    if (!validate($base)) {
        echo "Please input a numeric value!\n";
        continue;
    }
    break;
}

while (true) {
    $terms = readline("Input number of terms: ");
    if (!validate($terms)) {
        echo "Please input a numeric value!\n";
        continue;
    }
    break;
}

$result = 1;
for ($i = 1; $i <= $terms; $i++) {
    $result *= $base;
}

echo "The result is $result.\n";