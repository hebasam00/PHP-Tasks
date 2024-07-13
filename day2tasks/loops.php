<?php
/////1//////
$numbers = range(1, 10);

$numbers_string = implode('-', $numbers);

echo $numbers_string; 

///////2///////

$original_sentence = 'The quick brown fox';

$words = explode(' ', $original_sentence);

$first_word = $words[0];

echo $first_word; // الناتج: 'The'

/////3///////

// استخدام حلقتين متداخلتين لطباعة المربع
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        echo '* ';
    }
    echo "<br>"; // إضافة فاصل بين الصفوف
}
?>













?>









