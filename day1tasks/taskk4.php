<?php


$orange = array("hello", "welcome");

$uppercaseColors = array_map('strtoupper', $orange);

print_r($uppercaseOrange);

///////////////////////////////////////////////

$numbers = array(23, 5,78, 76, 1);

$filteredNumbers = array_filter($numbers, function($num) {
    return $num > 20;
});

print_r($filteredNumbers);


//////////////////////////////////////////////

$numbers = array(1, 2, 3, 4, 5);

$total = array_reduce($numbers, function($carry, $num) {
    return $carry + $num;
}, 0);

echo "Sum of numbers: " . $total;



/////////////////////////////////////////////

$names = array("moh'd", "ahmad", "mahmoud");

array_walk($names, function(&$name) {
    $name = "Welcome, " . $name;
});

print_r($names);



////////////////////////////////////////////
$array1 = array("a", "b", "c", "d");
$array2 = array("b", "d", "e");

$diff = array_diff($array1, $array2);

print_r($diff);



///////////////////////////////////////////

$array1 = array("a", "b", "c", "d");
$array2 = array("b", "d", "e");

$intersect = array_intersect($array1, $array2);

print_r($intersect);


//////////////////////////////////////////
$keys = array("a", "b", "c");
$values = array(1, 2, 3);

$combined = array_combine($keys, $values);

print_r($combined);



/////////////////////////////////////////

$users = array(
    array("id" => 1, "name" => "heba"),
    array("id" => 2, "name" => "roaa"),
    array("id" => 3, "name" => "yasmeen")
);

$names = array_column($users, "name");

print_r($names);



////////////////////////////////////////

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9,);

$slice = array_slice($numbers, 3, 5);

print_r($slice);
///////////////////////////////////////

$fruits = array("apple", "banana", "cherry");

if (in_array("banana", $fruits)) {
    echo "Found banana in the array";
} else {
    echo "Banana not found in the array";
}


















?>