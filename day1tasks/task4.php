<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//////1//////
$fruits = array("Apple", "Banana", "Orange", "Grapes", "Pineapple");

array_push($fruits, "Mango");
//////////2////////
array_push($fruits, "Mango");
/////////3///////
$keys = array_keys($fruits);
////4//////
$values = array_values($fruits);
/////5////
$numberOfFruits = count($fruits);
////6////
$array1 = array("a" => "welcome", "b" => "in", "c" => "php");

$array2 = array("d" => "in", "e" => "first ", "f" => "week");

$combinedArray = array_merge($array1, $array2);

echo "<pre>";
print_r($combinedArray);
echo "</pre>";
////7/////
$arr = array("A", "B", "O", "G", "P");

$searchResult = array_search("p", $fruits);

if ($searchResult !== false) {
    echo "The value 'p' is found at index: " . $searchResult;
} else {
    echo "The value 'p' is not found in the array.";
}
/////8////
$arr = array(4, 2, 8, 1, 6);

sort($arr);

foreach ($numbers as $number) {
    echo $number . " ";
}
/////9/////
$fruits = array(
    "Orange" => "orange",
    "Banana" => "yellow",
    "Apple" => "red",
    "Grapes" => "green",
    "Pineapple" => "yellow"
);

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " -> " . $value . "<br>";
}
/////10/////
$fruits = array(
    "Orange" => "orange",
    "Banana" => "yellow",
    "Apple" => "red",
    "Grapes" => "green",
    "Pineapple" => "yellow"
);

asort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " -> " . $value . "<br>";
}

?>


 
</body>
</html>