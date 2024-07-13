<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /////1//////
$fruits= array("apple","orange","grapes","banana");

    ///////2/////
for($i=0;$i< count($fruits);$i++){
    echo $fruits[$i]
}
     ////3///////
array_push($fruits, "Pineapple");

   /////4///////
    echo $fruit 

   ////5///////
array_pop($fruits);
echo $fruit

   ////6//////
if (in_array("orange", $fruits)) {
    echo "orange exists in the array.";
} else {
    echo "orange does not exist in the array.";
}

?>

</body>
</html>