<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
////1/////
$students = array(
    array(
        "name" => "John",
        "age" => 18,
        "grade" => "A"
    ),
    array(
        "name" => "Emma",
        "age" => 17,
        "grade" => "B"
    ),
    array(
        "name" => "Michael",
        "age" => 19,
        "grade" => "A+"
    )
);

////2////
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
/////3/////
$students = array(
    array(
        "name" => "John",
        "age" => 18,
        "grade" => "A"
    ),
    array(
        "name" => "Emma",
        "age" => 17,
        "grade" => "B"
    ),
    array(
        "name" => "Michael",
        "age" => 19,
        "grade" => "A+"
    )
);

$students[] = array(
    "name" => "Sophia",
    "age" => 18,
    "grade" => "A-"
);

foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}


///4////
foreach ($students as &$student) {
    if ($student["name"] == "Emma") {
        $student["grade"] = "A";
    }
}
////5/////
removeStudentByName($students, "Michael");

foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
?>

</body>
</html>
