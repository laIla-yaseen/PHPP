<?php

// task 1

$a = "Life is beautiful" ;

// 1 تحويل النص ألى حرف كبير  

$b = strtoupper($a) ;
echo $b ;

echo '<br>'  ; 

// 2 تحويل النص الى احرف صغير 

$c = strtolower($a) ; 
echo $c ; 

echo '<br>' ; 

//  
$d =  ucfirst(strtolower($a));
echo $d ;


echo '<br>' ; 
//  4 تحويل اول حرف في الكل ألى صغير
 $e =  ucwords(strtolower($a)); 
 echo $e ; 

echo '<hr>' ; 


// task 2

// اظهار الرقم ألى وفت 
$numericString = '085119';

if (strlen($numericString) == 6) {
    
    $hours = substr($numericString, 0, 2);
    $minutes = substr($numericString, 2, 2);
    $seconds = substr($numericString, 4, 2);

    
    $formattedTime = $hours . ':' . $minutes . ':' . $seconds;

    echo  $formattedTime;
} 
echo '<hr>' ; 
// task 3
// تتحقق من وجود كلمة 

$sentence = 'I am a full stack developer at orange coding academy';

$searchWord = 'Orange';

if (stripos($sentence, $searchWord) !== false) {
    echo "The word has been found!";
} else {
    echo "Word not found.";
}

echo '<hr>' ; 

// task 4
$uel = 'www.orange.com/index.php' ;

$fil = basename($uel);
echo $fil;

echo '<hr>' ; 


// task 5 

$email = 'info@orange.com';

$parts = explode('@', $email);

$username = $parts[0];

echo  $username;

echo '<hr>' ; 
 

// task 6 
// قطع الحرف
$text = 'info@orange.com';

$lastThreeChars = substr($text, -3);

echo  $lastThreeChars;

echo '<hr>' ;

// task 7 

$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';


$passwordLength = 8;

$password = substr(str_shuffle($characters), 0, $passwordLength);

echo  $password;
echo '<hr>' ;

// task 8
// استبدال الاكلمة 
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';

$words = explode(' ', $sentence);

$words[0] = $newWord;

$newSentence = implode(' ', $words);

echo "الجملة المعدلة: " . $newSentence;

echo '<hr>' ;

// task 9
// البحث عن الختلاف 

$string1 = 'dragonball';
$string2 = 'dragonboll';


$length = min(strlen($string1), strlen($string2));

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo "أول اختلاف بين السلسلتين في الموضع " . ($i + 1) . ": \"" . $string1[$i] . "\" vs \"" . $string2[$i] . "\"";
        exit;
    }
} ;

echo '<hr>' ;

// task 10 

$text = "Twinkle, twinkle, little star.";

$array = [
    substr($text, 0, 9),    
    substr($text, 9, 8),    
    substr($text, 17, 7),   
    substr($text, 24)       
];

var_dump($array);


echo '<hr>' ;


// task 11 

$char = 'a';

$nextChar = chr(ord($char) + 1);

if ($char === 'z') {
    $nextChar = 'a';
}
echo "الحرف التالي: " . $nextChar;

echo '<hr>' ;


// task 12

$originalString = 'The brown fox';
$insertString = 'quick';

$position = strpos($originalString, 'brown');
$newString = substr_replace($originalString, $insertString . ' ', $position, 0);


echo  $newString;


echo '<hr>' ;


// task 13 

$number = '0000657022.24';

$cleanedNumber = ltrim($number, '0');

echo "الرقم المعدل: " . $cleanedNumber;

echo '<hr>' ;


// task 14 

$originalString = 'The quick brown fox jumps over the lazy dog';
$removeString = 'fox';

$newString = str_replace($removeString, '', $originalString);

echo "النص المعدل: " . $newString;


echo '<hr>' ;


// task 15 

$originalString = 'The quick brown fox jumps over the lazy dog---';

$cleanedString = rtrim($originalString, '-');

echo "النص المعدل: " . $cleanedString; 

echo '<hr>' ;


// task 16


$text = '\"\1+2/3*2:2-3/4*3';

$cleanedText = preg_replace('/[^0-9\s]/', ' ', $text);

echo "النص المعدل: " . $cleanedText;

echo '<hr>' ;


// task 17


$text = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $text);

$firstFiveWords = implode(' ', array_slice($words, 0, 5));

echo "أول 5 كلمات: " . $firstFiveWords;

echo '<hr>' ;

// task 18

$number = '2,543.12';

$cleanedNumber = str_replace(',', '', $number);

echo "الرقم المعدل: " . $cleanedNumber;

echo '<hr>' ;

// task 19


for ($char = 'a'; $char <= 'z'; $char++) {
    echo $char . ' ';
}


echo '<hr>' ;