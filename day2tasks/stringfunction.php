<?php
//////////////tasl 1///////////////


///////////1///////////

$x="welcome in orange";
$upper=strtoupper($x);
echo "".$upper
///////2/////////////
$x="welcome in orange";
$lower=strtolower($x);
echo "".$lower
//////3///////////////
$x="welcome in orange";
$upp=ucfirst($x);
echo "".$upp
///////4///////////
$x="welcome in orange";
$cc=ucwords($x);
echo "".$cc
////////////////task 2 //////////////////


$numeric_string = '085119';

$hours = substr($numeric_string, 0, 2);     
$minutes = substr($numeric_string, 2, 2);   
$seconds = substr($numeric_string, 4, 2);   

echo $hours.":".$minutes.":".$seconds;

//////////task3////////////
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';

$sentence_lower = strtolower($sentence);
$word_lower = strtolower($word);

if (strpos($sentence_lower, $word_lower) !== false) {
    echo 'Word Found!';
} else {
    echo 'Word Not Found!';
}
///////////////task 4///////////////
$url = 'www.orange.com/index.php';

$filename = basename($url);

echo $filename; 


/////////task 5///////////


$email = 'info@orange.com';

$username = strstr($email, '@', true); 

echo $username; 
//////////6///////////////
$string = 'info@orange.com';

$last_three = substr($string, -3);

echo $last_three;



////////7///////////
     ما عرفت احله
///////////8///////////


$sentence = 'That new trainee is so genius.';
$new_word = 'Our';

$words = explode(' ', $sentence);

$words[0] = $new_word;

$new_sentence = implode(' ', $words);

echo $new_sentence; 




//////////9//////////
مافهمته

//////////10//////////

$string = "Twinkle, twinkle, little star.";

$array = explode(', ', $string);

var_dump($array);

//////////11/////////
ما فهمته

///////////12///////

$original_string = 'The brown fox';

$insert_string = 'quick';

$insert_position = strpos($original_string, 'brown');

if ($insert_position !== false) {
    $modified_string = substr_replace($original_string, $insert_string . ' ', $insert_position, 0);
    
    echo $modified_string; 
} else {
    echo "Position not found!";
}









