<?php

//Exercise #5
//Write a program that picks a random number from 1-100. Give the user a chance to guess it. If they get it right, tell them so. If their guess is higher than the number, say "Too high." If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)
$correctAnswer = rand(1, 100);
$userResponse = (int)readline("Guess the number: ");
if ($userResponse > $correctAnswer) {
    echo "Too high! The correct answer is $correctAnswer.";
} elseif ($userResponse < $correctAnswer) {
    echo "Too low! The correct answer is $correctAnswer.";
} else {
    echo "Correct answer!";
}
