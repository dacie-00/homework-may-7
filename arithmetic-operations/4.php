<?php

//Exercise #4
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.
$startValue = 1;
$endValue = 10;
$product = $startValue;
for ($i = $startValue + 1; $i <= $endValue; $i++) {
    $product *= $i;
}
echo $product;
