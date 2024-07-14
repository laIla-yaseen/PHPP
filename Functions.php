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
    echo "$input is a prime number";
} else {
    echo "$input is not a prime number";
}
echo "<hr>";

// task 2 


function reverseString($input) {
    return strrev($input);
}

$input = "remove";
echo reverseString($input);  

echo "<hr>";

// task 3

function isAllLowerCase($str) {
    if (ctype_lower($str)) {
        return "Your string is correct";
    } else {
        return "Your string is not all lowercase";
    }
}


$input = "remove";
echo isAllLowerCase($input);


echo "<hr>";

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


echo "<hr>";

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
    echo "$input is Armstrong number";
} else {
    echo "$input is not an Armstrong number";
}



echo "<hr>";

// task 6


function isPalindrome($str) {
    $str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    return $str === strrev($str);
}

$input = "Eva, can I see bees in a cave?";
if (isPalindrome($input)) {
    echo "Yes, it's Palindrome.";
} else {
    echo "No, not Palindrome.";
}




echo "<hr>";

// task 7


function removeDuplicates($array) {
    return array_unique($array);
}


$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);
print_r($array1);  

