<?php

//Exercise #5
//
//On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.

$keyMap = [
    "a" => 2,
    "b" => 22,
    "c" => 222,
    "d" => 3,
    "e" => 33,
    "f" => 333,
    "g" => 4,
    "h" => 44,
    "i" => 444,
    "j" => 5,
    "k" => 55,
    "l" => 555,
    "m" => 6,
    "n" => 66,
    "o" => 666,
    "p" => 7,
    "q" => 77,
    "r" => 777,
    "s" => 7777,
    "t" => 8,
    "u" => 88,
    "v" => 888,
    "w" => 9,
    "x" => 99,
    "y" => 999,
    "z" => 9999
];

$userString = readline("Enter a string: ");
$characters = str_split($userString);
$digits = [];
foreach ($characters as $character) {
    if (key_exists($character, $keyMap)) {
        $digits[] = $keyMap[$character];
    }
}
$digits = implode(" ", $digits);

echo "The keypad representation of the string is -\n";
echo "$digits\n";