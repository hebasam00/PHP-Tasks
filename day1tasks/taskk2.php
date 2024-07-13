<?php
///1///
$products = array(
    "a" => 1200,
    "b" => 800,
    "c" => 400,
    "d" => 150,
    "e" => 250
);

print_r($products);
///2///
$products = array(
    "a" => 1200,
    "b" => 800,
    "c" => 400,
    "d" => 150,
    "e" => 250
);
ksort($products);

foreach ($products as $product => $price) {
    echo $product . ": " . $price . "<br>";
}
///3///
$products = array(
    "a" => 1200,
    "b" => 800,
    "c" => 400,
    "d" => 150,
    "e" => 250
);

asort($products);

foreach ($products as $product => $price) {
    echo $product . ": " . $price . "<br>";
}
///4///
$products = array(
    "a" => 1200,
    "b" => 800,
    "c" => 400,
    "d" => 150,
    "e" => 250
);
$totalPrice = array_sum($products);

$numberOfProducts = count($products);


$averagePrice = $totalPrice / $numberOfProducts;

echo "The average price of all products is: " . $averagePrice;

///5///
$products = array(
    "a" => 1200,
    "b" => 800,
    "c" => 400,
    "d" => 150,
    "e" => 250
);
$maxPrice = max($products);

$mostExpensiveProduct = array_search($maxPrice, $products);

echo "The most expensive product is: " . $mostExpensiveProduct . " with a price of " . $maxPrice;
?>