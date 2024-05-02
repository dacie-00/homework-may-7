<?php

//Exercise 7**
//Imagine you own a gun store. Only certain guns can be purchased with license types. Create an object (person) that
//will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash. Guns are
//objects stored within an array. Each gun has license letter, price & name. Using PHP in-built functions determine if
//the requester (person) can buy a gun from the store.

$person = (object)["name" => "John", "licenses" => ["P", "S"], "cash" => 274];

$guns = [
    "pistol" => (object)["name" => "pistol", "license" => "P", "price" => 150],
    "rifle" => (object)["name" => "rifle", "license" => "R", "price" => 280],
    "shotgun" => (object)["name" => "shotgun", "license" => "S", "price" => 300]
];

function canPurchase(object $person, string $gun, array $guns): void
{
    $hasLicense = in_array($guns[$gun]->license, $person->licenses);
    $canAfford = $person->cash >= $guns[$gun]->price;
    if (!$hasLicense || !$canAfford) {
        echo "$person->name cannot buy the {$guns[$gun]->name}.\n";
        if (!$hasLicense) {
            echo "Doesn't have license {$guns[$gun]->license}.\n";
        }
        if (!$canAfford) {
            echo "Doesn't have enough cash.\n";
        }
        return;
    }
    echo "$person->name can buy the {$guns[$gun]->name}.\n";
}

canPurchase($person, "rifle", $guns);