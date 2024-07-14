<?php
// task 1
$result = " ";

for($i = 1; $i <= 10 ; $i++){
    $result .= $i;

    if($i < 10){
        $result .= "_";
    }
}

echo $result;

echo "<br>";

//task 2 

$total = 0;

for($a = 0; $a <=30; $a++){
    
    $total += $a;
}

echo $total;

echo "<br>";

// task 3

$size = 5;
for($o =0 ; $o< $size; $o++){
    for($j=0 ; $j<$size ; $j++ ){
        echo "*";
    }
    echo "<br>";
}


// task4

$nom = 5; 

$fa = 1 ;

for($v = 1; $v<=$nom; $v++){
    $fa *= $v;
}

echo $fa;
echo "<br>";

// task 5 

// عدد العناصر في تسلسل فيبوناتشي
$count = 10;

// تعريف المتغيرات الأولى
$a = 0;
$b = 1;

// طباعة أول عددين في التسلسل
echo $a . ", " . $b;

// حساب باقي الأعداد
for ($i = 2; $i < $count; $i++) {
    $c = $a + $b; // حساب الرقم التالي
    echo ", " . $c; // طباعة الرقم التالي
    $a = $b; // تحديث الرقم الأول
    $b = $c; // تحديث الرقم الثاني
}

echo "<br>";

// task 6

$tas = "oarnge coding Academy";

$count =0 ; 

for ($i= 0; $i< strlen($tas); $i++) {
   
    if ($tas[$i] === 'c'){
        $count++;
    }
}
echo $count;

// task 7

echo '<table cellpadding="3px" cellspacing="0px" border"1">';

for ($i = 1; $i<= 5; $i++){
    echo '<tr>';
    for ($j = 1; $j<= 5 ; $j++){
        $result = $i * $j ;

        echo '<td>' . $i . ' * ' . $j . ' * ' . $result .'</td>';

    }
    echo '</tr>';

}
   echo '</table>';


   echo '<br>';

   // task 8

   

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}

echo '<br>';

// 9 


function printFloydTriangle($n) {
    $number = 1; 

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++; 
        }
        echo "<br>"; 
    }
}
        printFloydTriangle(5);





