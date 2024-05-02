<?php

//Exercise #8
//Foo Corporation needs a program to calculate how much to pay their hourly employees. The US Department of Labor
//requires that employees get paid time and a half for any hours over 40 that they work in a single week. For example,
//if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay. The State of Massachusetts
//requires that hourly employees be paid at least $8.00 an hour. Foo Corp requires that an employee not work more than
//60 hours in a week.

function calculatePay($hours, $rate)
{
    if ($hours > 60) {
        return "Error - hours cannot be more than 60 per week";
    }
    if ($rate < 8) {
        return "Error - pay rate cannot be less than 8";
    }

    $overtimeHours = 0;
    if ($hours > 40) {
        $overtimeHours = $hours - 40;
        $hours = 40;
    }

    return ($hours * $rate) + ($overtimeHours * $rate * 1.5);
}

$employees = [
    (object)["name" => "John", "rate" => 7.50, "hours" => 35],
    (object)["name" => "Jane", "rate" => 8.20, "hours" => 47],
    (object)["name" => "Maria", "rate" => 10.00, "hours" => 73],
];

foreach ($employees as $employee) {
    $pay = calculatepay($employee->hours, $employee->rate);
    echo "$employee->name - $pay\n";
}