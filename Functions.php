<?php
// task 1 

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num == 2) {
        return true;
    }
    if ($num % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$input = 3;
if (isPrime($input)) {
    echo "$input هو عدد أولي";
} else {
    echo "$input ليس عدد أولي";
}
echo "<br>";

// task 2 


function reverseString($input) {
    return strrev($input);
}

$input = "remove";
echo reverseString($input);  

echo "<br>";

// task 3

function isAllLowerCase($str) {
    if (ctype_lower($str)) {
        return "سلسلتك النصية صحيحة";
    } else {
        return "سلسلتك النصية ليست كلها أحرف صغيرة";
    }
}


$input = "remove";
echo isAllLowerCase($input);


echo "<br>";

// task 4


function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;
swap($x, $y);
echo "x = $x, y = $y";  


echo "<br>";

// task 5


function isArmstrongNumber($num) {
    $sum = 0;
    $temp = $num;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = (int)($temp / 10);
    }
    
    return $sum == $num;
}

$input = 407;
if (isArmstrongNumber($input)) {
    echo "$input هو عدد أرمسترونغ";
} else {
    echo "$input ليس عدد أرمسترونغ";
}



echo "<br>";

// task 6


function isPalindrome($str) {
    $str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    return $str === strrev($str);
}

$input = "Eva, can I see bees in a cave?";
if (isPalindrome($input)) {
    echo "نعم، إنها باليندروم";
} else {
    echo "لا، ليست باليندروم";
}




echo "<br>";

// task 7


function removeDuplicates($array) {
    return array_unique($array);
}


$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);
print_r($array1);  

