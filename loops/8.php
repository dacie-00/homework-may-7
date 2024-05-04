<?php

//Write a console program in a class named NumberSquare that prompts the user for two integers, a min and a max, and
//prints the numbers in the range from min to max inclusive in a square pattern. Each line of the square consists of a
//wrapping sequence of integers increasing from min and max. The first line begins with min, the second line begins with
//min + 1, and so on. When the sequence in any line reaches max, it wraps around back to min. You may assume that min is
//less than or equal to max. Here is an example dialogue:
//
//Min? 1
//Max? 5
//12345
//23451
//34512
//45123
//51234

class NumberSquare
{
    private int $min;
    private int $max;

    public function __construct()
    {
        $this->min = 0;
        $this->max = 0;
    }

    public function start()
    {
        $this->getUserRange();
        $this->draw();
    }

    private function getUserRange()
    {
        while (true) {
            $min = readline("Min: ");
            if (!is_numeric($min)) {
                echo "Please enter a valid number!\n";
                continue;
            }
            $this->min = (int)$min;
            break;
        }
        while (true) {
            $max = readline("Max: ");
            if (!is_numeric($max)) {
                echo "Please enter a valid number!\n";
                continue;
            }
            if ($this->min >= $max) {
                echo "Max cannot be smaller than min!\n";
                continue;
            }
            $this->max = (int)$max;
            break;
        }
    }

    private function draw()
    {
        $delta = $this->max - $this->min + 1;
        for ($row = 0; $row < $delta; $row++) {
            for ($col = 0; $col < $delta; $col++) {
                echo ($col + $row) % $delta + $this->min;
                echo " ";
            }
            echo "\n";
        }
    }
}

$numberSquare = new NumberSquare();
$numberSquare->start();