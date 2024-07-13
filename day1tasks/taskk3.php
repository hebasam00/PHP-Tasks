<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
///1///
$books = array(
    array(
        "title" => "php introduction",
        "author" => "heba",
        "year" => 2010
    ),
    array(
        "title" => "php function",
        "author" => "osama",
        "year" => 2020
    ),
   
);

foreach ($books as $book) {
    echo "Title: " . $book["title"] . "<br>";
    echo "Author: " . $book["author"] . "<br>";
    echo "Year: " . $book["year"] . "<br><br>";
}
///2///
$books = array(
    array(
        "title" => "php introduction",
        "author" => "heba",
        "year" => 2010
    ),
    array(
        "title" => "php function",
        "author" => "osama",
        "year" => 2020
    )
);

foreach ($books as $book) {
    if ($book["year"] > 2010) {
        echo "Title: " . $book["title"] . "<br>";
        echo "Author: " . $book["author"] . "<br>";
        echo "Year: " . $book["year"] . "<br><br>";
    }
}
///3///
$books = array(
    array(
        "title" => "php introduction",
        "author" => "heba",
        "year" => 2010
    ),
    array(
        "title" => "php function",
        "author" => "osama",
        "year" => 2020
    )
);

$books[] = array(
    "title" => "HTML Basics",
    "author" => "John Doe",
    "year" => 2015
);

print_r($books);

///4///
$books = array(
    array(
        "title" => "php introduction",
        "author" => "heba",
        "year" => 2010
    ),
    array(
        "title" => "php function",
        "author" => "osama",
        "year" => 2020
    )
);

$books[0]["author"] = "Ahmed"; 

print_r($books);

///5///
$books = array(
    array(
        "title" => "php introduction",
        "author" => "heba",
        "year" => 2010
    ),
    array(
        "title" => "php function",
        "author" => "osama",
        "year" => 2020
    ),
    array(
        "title" => "HTML Basics",
        "author" => "John Doe",
        "year" => 2015
    )
);

function sortByTitle($a, $b) {
    return strcmp($a['title'], $b['title']);
}

usort($books, 'sortByTitle');

print_r($books);
?>

</body>
</html>