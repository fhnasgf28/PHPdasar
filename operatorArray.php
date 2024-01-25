<?php

$first = [
    "first_name" => "Farhan"
];

$last = [
    "last_name" => "Assegaf"
];

$full = $first + $last;
var_dump($first + $last);

// membandingkan data array

$a = [
    "name" => "Farhan",
    "age" => 20
];

$b = [
    "age" => 20,
    "name" => "Farhan"
    
];

var_dump($a === $b);