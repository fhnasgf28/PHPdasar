<?php

$values = array(2,4,5,6,7,7);

var_dump($values);
//  carai pengentahuan mengenai operasi array

$values[0] = 10;
var_dump($values);
// menghapus data menggunakan unset

unset($values[0]);
var_dump($values);

// untuk menambahkan 

$values[] = "farhan assegaf";
var_dump($values);

// Map
$budi = [
    "name" => "budi",
    "age" => 20,
    "address" => "bandung",
    "hobby" => "coding"
];

var_dump($budi);

// ngambil data $budi
echo $budi["name"];
echo "\n";
echo $budi["age"];
echo "\n";
echo $budi["address"];
echo "\n";
echo $budi["hobby"];
echo "\n";

// array didalam array 