<?php

//Exercise 4
//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

function isAdult(object $person): bool
{
    return $person->age > 18;
}

$people = [
    (object)["name" => "John", "surname" => "Doe", "age" => 20],
    (object)["name" => "Jane", "surname" => "Doe", "age" => 27],
    (object)["name" => "Lisa", "surname" => "Doe", "age" => 7],
];

foreach ($people as $person) {
    echo isAdult($person) ? "{$person->name} is an adult.\n" : "{$person->name} is not an adult.\n";
}