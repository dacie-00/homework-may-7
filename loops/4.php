<?php

//Exercise #4
//
//Write a console program in a class named FizzBuzz that prompts the user for an integer, then prints all of the numbers
//from one to that integer, separated by spaces.
//
//Use a loop to print the numbers.
//
//But for multiples of three, print "Fizz" instead of the number, and for the multiples of five print "Buzz".
//
//For numbers which are multiples of both three and five print "FizzBuzz".

class FizzBuzz
{
    public function __construct()
    {
    }

    public static function fizzBuzz(int $count)
    {
        for ($i = 1; $i <= $count; $i++) {
            $fizz = $i % 3 === 0;
            $buzz = $i % 5 === 0;

            if (!$fizz && !$buzz) {
                echo "$i";
            } else {
                if ($fizz) {
                    echo "Fizz";
                }
                if ($buzz) {
                    echo "Buzz";
                }
            }
            echo " ";
            if ($i % 20 === 0) {
                echo "\n";
            }
        }
    }
}

function promptUser(): int
{
    while (true) {
        $input = readline("Enter an integer: ");
        if (!is_numeric($input)) {
            echo "Non-numeric input!\n";
            continue;
        }
        return (int)$input;
    }
}

$count = promptUser();
FizzBuzz::fizzBuzz($count);