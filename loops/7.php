<?php

//Exercise #7
//
//Write a console program in a class named RollTwoDice that prompts the user for a desired sum, then repeatedly rolls
//two six-sided dice (using a Random object to generate random numbers from 1-6) until the sum of the two dice values is
//the desired sum. Here is the expected dialogue with the user:
//
//Desired sum: 9
//4 and 3 = 7
//3 and 5 = 8
//5 and 6 = 11
//5 and 6 = 11
//1 and 5 = 6
//6 and 3 = 9

class RollTwoDice
{
    private int $desiredSum;

    public function play()
    {
        $this->promptUser();
        $this->rollUntil($this->desiredSum);
    }

    private function promptUser()
    {
        echo "Please enter a number in the range of 2 and 12!\n";
        while (true) {
            $desiredSum = readline("Desired sum: ");
            if (!is_numeric($desiredSum)) {
                echo "Please enter a numberic value!\n";
                continue;
            }
            $desiredSum = (int)$desiredSum;
            if ($desiredSum > 12 || $desiredSum < 2) {
                echo "Input value is not in range of 2 and 12!\n";
                continue;
            }
            $this->desiredSum = $desiredSum;
            break;
        }
    }

    private function rollUntil($number)
    {
        while (true) {
            $firstDie = rand(1, 6);
            $secondDie = rand(1, 6);
            $sum = $firstDie + $secondDie;
            echo "$firstDie + $secondDie = $sum\n";
            if ($sum === $this->desiredSum) {
                break;
            }
        }
    }
}

$rollTwoDice = new RollTwoDice();
$rollTwoDice->play();