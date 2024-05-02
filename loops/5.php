<?php

//Exercise #5
//
//Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on
//the game "Pig"). The player's goal is to accumulate as many points as possible without rolling a 1. Each turn, the
//player rolls the die; if they roll a 1, the game ends and they get a score of 0. Otherwise, they add this number to
//their running total score. The player then chooses whether to roll again, or end the game with their current point
//total.

class Piglet
{
    private int $score;

    function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {
        $this->score = 0;
    }

    public function play()
    {
        echo "Welcome to Piglet!\n";
        $this->playTurn();
    }

    private function playTurn()
    {
        $roll = rand(1, 6);
        echo "You rolled a $roll!\n";
        if ($roll == 1) {
            echo "You lost and got 0 points!\n";
            $this->promptPlayAgain();
        }
        $this->score += $roll;
        $this->promptUser();
    }

    private function promptPlayAgain()
    {
        while (true) {
            echo "0) Play again\n";
            echo "1) Quit\n";
            $action = readline("Action: ");

            if (!in_array($action, ["0", "1"])) {
                echo "Invalid choice!\n";
            }

            if ($action === "0") {
                echo "Starting new game!\n";
                $this->initialize();
                $this->play();
                break;
            }

            if ($action === "1") {
                echo "Goodbye!\n";
                exit();
            }
        }
    }

    private function promptUser()
    {
        while (true) {
            $input = strtolower(readline("Roll again? (y/n): "));
            if ($input === "n" || $input === "no") {
                $this->winScreen();
                break;
            }
            if ($input === "y" || $input === "yes") {
                $this->playTurn();
                break;
            }
            echo "Invalid input!\n";
        }
    }

    private function winScreen()
    {
        echo "You got $this->score points. Congratulations!\n";
        $this->promptPlayAgain();
    }
}


$piglet = new Piglet();
$piglet->play();