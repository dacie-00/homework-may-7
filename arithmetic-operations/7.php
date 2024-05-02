<?php

//Exercise #7
//
//Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position
//in meters.
//
//Note: The correct value is -490.5m.

function applyGravity(float $initialPosition, float $initialVelocity, float $time, float $acceleration): float
{
    return 0.5 * $acceleration * pow($time, 2) + $initialVelocity + $initialPosition;
}


$ball = (object)["y" => 0];

echo "The ball's y position is $ball->y\n";
$ball->y = applyGravity($ball->y, 0, 10, 9.81);
echo "After 10 seconds of falling the ball's y position is $ball->y\n";