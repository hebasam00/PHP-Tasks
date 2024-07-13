<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
////1////
$cities = array("aqabaa", "amman", "madaba", "karak")
////2/////
$reversedCities = array_reverse($cities);

foreach ($reversedCities as $city) {
    echo $city . "<br>";
}
///3///
$cities = array("aqabaa", "amman", "madaba", "karak");
$searchCity = "madaba";

$index = array_search($searchCity, $cities);

if ($index !== false) {
    echo "The index of $searchCity is: " . $index;
} else {
    echo "$searchCity is not found in the array.";
}
///4///
$cities = array("aqabaa", "amman", "madaba", "karak");
$removeCity = "madaba";

$index = array_search($removeCity, $cities);

if ($index !== false) {
    unset($cities[$index]);
    $cities = array_values($cities);
}

print_r($cities);
///5///

$cities = array("aqabaa", "amman", "madaba", "karak");
$subArray = array_slice($cities, 0, 3);

print_r($subArray);

    ?>
</body>
</html>