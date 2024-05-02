<?php
echo "\n1 -\n";
//Exercise 1
//Create a non-associative array with 3 integer values and display the total sum of them.
$nonAssociativeArray = [1, 2, 333];
echo $nonAssociativeArray[0] + $nonAssociativeArray[1] + $nonAssociativeArray[2];

echo "\n2 -\n";
//Exercise 2
//Given array
//
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
//
//Using dump method, dump out all 3 values.
var_dump($person["name"]);
var_dump($person["surname"]);
var_dump($person["age"]);

echo "\n3 -\n";
//Exercise 3
//Given object
//
//<?php
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
//
//Using dump method, dump out all 3 values.
var_dump($person->name);
var_dump($person->surname);
var_dump($person->age);

echo "\n4 -\n";
//Exercise 4
//Given array
//
//<?php
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//
//Program should display concatenated value of - Jane Doe 41
echo "{$items[0][1]["name"]} {$items[0][1]["surname"]} {$items[0][1]["age"]}";

echo "\n5 -\n";
//Exercise 5
//Given array
//
//<?php
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//
//Program should display concatenated value of - John & Jane Doe`s
echo "{$items[0][0]["name"]} {$items[0][0]["surname"]} {$items[0][0]["age"]} & {$items[0][1]["name"]} {$items[0][1]["surname"]} {$items[0][1]["age"]}";


echo "\n";