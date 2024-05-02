<?php

echo "\n1 -\n";
//Exercise 1
//Create an array with integers (up to 10) and print them out using foreach loop.
$integersUpToTen = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($integersUpToTen as $integer) {
    echo $integer . "\n";
}

echo "\n2 -\n";
//Exercise 2
//Create an array with integers (up to 10) and print them out using for loop.
$numbers = [1232, -531, 333, 404, 418];
for ($i = 0; $i < count($numbers); $i++) {
   echo $numbers[$i] . "\n";
}

echo "\n3 -\n";
//Exercise 3
//Given variable $x = 1 while $x is lower than 10, print out text "codelex". (Note: To avoid infinite looping, after each print increase the variable $x by 1)
$x = 1;
while ($x < 10) {
    echo "codelex";
    $x++;
}

echo "\n4 -\n";
//Exercise 4
//Create a non associative array with integers and print out only integers that divides by 3 without any left.
$integers = [3, 31, 10, 25, 15, 332, 3333, 33334, 333335, 27, 63];
foreach ($integers as $integer) {
    if ($integer % 3 === 0) {
        echo $integer . "\n";
    }
}

echo "\n5 -\n";
//Exercise 5
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.
$people = [
    [
        "name" => "John",
        "surname" => "Smith",
        "age" => 25,
        "birthday" => "1998-07-3"
    ],
    [
        "name" => "Barbara",
        "surname" => "Johnson",
        "age" => 26,
        "birthday" => "1997-09-24"
    ],
    [
        "name" => "Sidney",
        "surname" => "Stralia",
        "age" => 27,
        "birthday" => "1996-11-12"
    ],
];
foreach ($people as $person) {
    echo "Name: {$person['name']}, Surname: {$person['surname']}, Age: {$person['age']}, Birthday: {$person['birthday']}\n";
}

echo "\n";
