<?php

//Exercise #10
//
//See calculate-area.php
//
//Design a Geometry class with the following methods:
//
//    A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//        Area = π * r * 2
//        Use Math.PI for π and r for the radius of the circle
//    A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the
//    following formula:
//        Area = Length x Width
//    A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return
//    the area of the triangle. Use the following formula:
//        Area = Base x Height x 0.5
//
//The methods should display an error message if negative values are used for the circle’s radius, the rectangle’s
//length or width, or the triangle’s base or height.
//
//Next write a program to test the class, which displays the following menu and responds to the user’s selection:
//
//Geometry calculator:
//
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):
//
//Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.

class Geometry
{
    public static function circleArea(float $radius): float
    {
        if ($radius < 0) {
            echo "Radius cannot be negative\n";
            exit();
        }
        return pi() * $radius * 2;
    }

    public static function rectangleArea(float $width, float $height): float
    {
        if ($width < 0) {
            echo "Width cannot be negative\n";
            exit();
        }
        if ($height < 0) {
            echo "Height cannot be negative\n";
            exit();
        }
        return $width * $height;
    }

    public static function triangleArea(float $base, float $height): float
    {
        if ($base < 0) {
            echo "Base cannot be negative\n";
            exit();
        }
        if ($height < 0) {
            echo "Height cannot be negative\n";
            exit();
        }
        return $base * $height * 0.5;
    }
}


while (true) {
    echo <<<END
    Geometry calculator:
    1) Calculate the Area of a Circle
    2) Calculate the Area of a Rectangle
    3) Calculate the Area of a Triangle
    4) Quit
    END;
    echo "\n";

    $choice = readline("Enter your choice (1-4): ");
    if (!is_numeric($choice)) {
        echo "Choice must be numeric!\n\n";
        continue;
    }
    $choice = (int)$choice;
    if ($choice < 1 || $choice > 4) {
        echo "Invalid choice!\n\n";
        continue;
    }
    break;
}

switch ($choice) {
    case 1:
        $radius = (float)readline("Enter the radius of the circle: ");
        echo "The area of the circle is " . round(Geometry::circleArea($radius), 2) . "!\n";
        exit;
    case 2:
        $width = (float)readline("Enter the width of the rectangle: ");
        $height = (float)readline("Enter the height of the rectangle: ");
        echo "The area of the rectangle is " . round(Geometry::rectangleArea($width, $height), 2) . "!\n";
        exit;
    case 3:
        $base = (float)readline("Enter the base of the triangle: ");
        $height = (float)readline("Enter the height of the triangle: ");
        echo "The area of the triangle is " . round(Geometry::triangleArea($base, $height), 2) . "!\n";
        exit;
    case 4:
        exit;
}