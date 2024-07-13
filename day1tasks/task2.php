<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/////1/////
$people = array(
    "Heba" => 24,
    "roaa" => 21,
    "yasmeen" => 20,
    "sara" => 28,
    "hala" => 22
);
/////2///////
foreach ($people as $name => $age) {
    echo "<li>$name is $age years old</li>";
}
//////3//////
$people["amro"] = 27;

//////4//////
unset($people["yasmeen"]);
//////5/////
$keyToCheck = "heba";
if (isset($people[$keyToCheck])) {
    echo "$keyToCheck exists in the array.e";
} else {
    echo "$keyToCheck does not exist in the array.\n";
}


?>
</body>
</html>