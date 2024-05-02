<?php

//Exercise 3
//Create a person object with name, surname and age. Create a function that will determine if the person has reached 18
//years of age. Print out if the person has reached age of 18 or not.

$person = (object)["name" => "John", "surname" => "Doe", "age" => 20];

function isAdult(object $person): bool
{
    return $person->age > 18;
}

echo isAdult($person) ? "{$person->name} is an adult.\n" : "{$person->name} is not an adult.\n";
