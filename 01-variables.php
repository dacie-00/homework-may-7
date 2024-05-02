<?php

echo "\n1 -\n";
//Exercise 1
//Create variable that prints out an integer 10, float 10.10, string "hello world"
$foo = 10;
$floatBar = 10.10;
$greeting = "hello world";
echo "$foo, $floatBar, $greeting";

echo "\n2 -\n";
//Exercise 2
//Dump the same values that should display both data type & its value. (Note, usage of var_dump)
var_dump($foo);
var_dump($floatBar);
var_dump($greeting);

echo "\n3 -\n";
//Exercise 3
//Concatenate your name, surname and integer of your age.
$full = "Daniels " . "Ciemiņš " . 23;
echo $full;


echo "\n";