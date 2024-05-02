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

    public function getUserRange()
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
                echo "Max cannot be larger than min!\n";
                continue;
            }
            $this->max = (int)$max;
            break;
        }
    }

    private function draw()
    {
        for ($row = 1; $row <= $this->max - $this->min; $row++) {
            for ($col = $this->min; $col <= $this->max; $col++) {
                $value = $col + $row - 1;
                if ($value > $this->max) {
                    $value = $value - $this->max + $this->min - 1;
                }
                echo $value;
            }
            echo "\n";
        }
    }
}

$numberSquare = new NumberSquare();
$numberSquare->start();