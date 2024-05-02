<?php

//Write a program that asks the user to enter two words. The program then prints out both words on one line. The words
//will be separated by enough dots so that the total line length is 30:
//
//Enter first word:
//turtle
//Enter second word
//153
//turtle....................153
//
//This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.

while (true) {
    $firstWord = readline("Enter the first word: ");
    if ($firstWord === "") {
        echo "Word cannot be empty string.";
        continue;
    }
    break;
}

while (true) {
    $secondWord = readline("Enter the second word: ");
    if ($secondWord === "") {
        echo "Word cannot be empty string.";
        continue;
    }
    break;
}

echo $firstWord;
$wordLength = strlen($firstWord) + strlen($secondWord);
$dotCount = 30 - $wordLength;
for ($i = 0; $i < $dotCount; $i++) {
    echo ".";
}
echo $secondWord . "\n";