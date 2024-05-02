<?php

//Exercise #6
//
//Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.
//
//////////////////\\\\\\\\\\\\\\\\
//////////////********\\\\\\\\\\\\
//////////****************\\\\\\\\
//////************************\\\\
//********************************
//
//Then, modify your program using an integer class constant so that it can create a similar figure of any size. For
//instance, the diagram above has a size of 5. For example, the figure below has a size of 3:
//
//////////\\\\\\\\
//////********\\\\
//****************

class AsciiFigure
{
    const SIZE = 6;

    public static function draw()
    {
        for ($row = 0; $row < self::SIZE; $row++) {
            $starCount = $row * 8;
            $slashCount = (self::SIZE - 1) * 4 - $starCount / 2;

            for ($col = 0; $col < $slashCount; $col++) {
                echo "/";
            }
            for ($col = 0; $col < $starCount; $col++) {
                echo "*";
            }
            for ($col = 0; $col < $slashCount; $col++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}

AsciiFigure::draw();