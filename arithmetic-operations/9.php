<?php

//Exercise #9
//Write a program that calculates and displays a person's body mass index (BMI). A person's BMI is calculated with the
//following formula: BMI = weight x 703 / height ^ 2. Where weight is measured in pounds and height is measured in
//inches. Display a message indicating whether the person has optimal weight, is underweight, or is overweight. A
//sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25. If the BMI is less than
//18.5, the person is considered underweight. If the BMI value is greater than 25, the person is considered overweight.
//Your program must accept metric units.

function calculateBMI(float $weight, float $height, string $unit): void
{
    $unit = strtolower($unit);
    if ($unit === "imperial") {
        $bmi = $weight * 703 / pow($height, 2);
    } elseif ($unit === "metric") {
        $bmi = $weight / pow($height, 2);
    } else {
        throw new InvalidArgumentException("Unsupported unit " . $unit);
    }

    $bmi = round($bmi, 2);
    if ($bmi > 25) {
        echo "Your BMI is $bmi, which is considered overweight.\n";
        return;
    }
    if ($bmi < 18.5) {
        echo "Your BMI is $bmi, which is considered underweight.\n";
        return;
    }
    echo "Your BMI is $bmi, which is considered optimal.\n";
}

calculateBMI(110, 6.06 * 12, "imperial");