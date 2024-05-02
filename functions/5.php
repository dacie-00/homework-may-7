<?php

//Exercise 5
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping costs per
//weight. Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro. Using foreach loop
//print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    ["fruit" => "bananas", "weight" => 15],
    ["fruit" => "apples", "weight" => 8],
    ["fruit" => "pears", "weight" => 27],
    ["fruit" => "oranges", "weight" => 3],
];

$shippingCosts = [
    "light" => 1,
    "heavy" => 2,
];

function isHeavy(array $fruit): bool
{
    if ($fruit["weight"] > 10) {
        return true;
    }
    return false;
}

foreach ($fruits as $fruit) {
    $pricePerKg = isHeavy($fruit) ? $shippingCosts["heavy"] : $shippingCosts["light"];
    $price = $pricePerKg * $fruit["weight"];
    echo "{$fruit["weight"]}kg of {$fruit["fruit"]} would cost $price euro to ship.\n";
}