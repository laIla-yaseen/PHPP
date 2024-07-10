
<?php

//task 1
$fruit = ["banana" , "apples" , "watemelon" , "orange" , "kiwi" , "melon"];

// echo '<pre>';
// print_r($fruit);
// echo '</pre>';



// $fruit[] = "mango";
// echo '<pre>';
// print_r($fruit);
// echo '</pre>';



// array_pop($fruit);
// echo '<pre>';
// print_r($fruit);
// echo '</pre>';


// $specific_fruit = "apples";
// if (in_array($specific_fruit, $fruit)) {
//     echo "$specific_fruit exists in the array.";
// } else {
//     echo "$specific_fruit does not exist in the array.";
// }


//task 2 
$people = [
    "lolo" => 22,
    "roro" => 19,
    "meme" => 15,
    "soso" => 30,
    "jojo" => 35
];

// echo '<pre>';
// print_r($people);
// echo '</pre>';



// $people ["ahmad"]= 40;

// echo '<pre>';
// print_r($people);
// echo '</pre>';



// unset($people["meme"]);

// echo '<pre>';
// print_r($people);
// echo '</pre>';


// $name ="roro";
// if (array_key_exists($name, $people)) {
//     echo "$name exists in the array";
// } else {
//     echo "$name does not exist in the array.";
// };



//task 3 

$students = [
    [
        "name" => "lolo",
        "age" => 20,
        "grade" => "A"
    ],
    [
        "name" => "ahmad",
        "age" => 21,
        "grade" => "B"
    ],
    [
        "name" => "janna",
        "age" => 19,
        "grade" => "C"
    ]
];


// echo '<pre>';
// print_r($students);
// echo '</pre>';


// $new_student = [
//     "name" => "David",
//     "age" => 22,
//     "grade" => "B+"
// ];

// array_push($students, $new_student);

// echo '<pre>';
// print_r($students);
// echo '</pre>';



// $update_student = "ahmad";
// $new_grade = "A-";

// foreach ($students as &$student) {
//     if ($student['name'] === $update_student) {
//         $student['grade'] = $new_grade;
//         break;
//     }
// }

// echo '<pre>';
// print_r($students);
// echo '</pre>';


// $remove_student = "lolo";

// foreach ($students as $key => $student) {
//     if ($student['name'] === $remove_student) {
//         unset($students[$key]);
//         break;
//     }
// }


// echo '<pre>';
// print_r($students);
// echo '</pre>';



// task 4 

$colors = ["red", "yallow", "green"];
//1  لإضافة عنصر إلى مصفوفة مؤشرة
// array_push($colors , "brown");

//2 إزالة العنصر الأخير من مصفوفة
// array_pop($colors);

// echo '<pre>';
// print_r($colors);
// echo '</pre>';

//3 حصول على جميع المفاتيح في مصفوفة
$age = [
    "A" => 10,
    "B" => 20,
    "C" => 30,
];

// $key = array_keys($age); 

// echo '<pre>';
// print_r($key); 
// echo '</pre>';

//4  لحصول على جميع القيم في مصفوفة
// array_values($age);

// echo '<pre>';
// print_r($age);
// echo '</pre>';

//5  للحصول على عدد العناصر في مصفوفة
// $gg =count($colors);

// echo '<pre>';
// print_r($gg);
// echo '</pre>';


//6  لدمج مصفوفتين

// $kk =array_merge($colors,$age );

// echo '<pre>';
// print_r($kk);
// echo '</pre>';


//7 للبحث عن قيمة محددة في مصفوفة


// $ll= array_search("green", $colors );

// echo '<pre>';
// print_r($ll);
// echo '</pre>';


















// task 5

$cities = ["Amman", "Aqaba", "Karak", "Zarqa", "Irbid", "Ajloun"];

// طباعة عناصر المصفوفة بترتيب عكسي
// $aa = array_reverse($cities);

//  echo '<pre>';
//  print_r($aa);
//  echo '</pre>';


//للبحث عن قيمة محددة

// $bb = "Karak";

// $cc = array_search($bb,$cities);
// // echo '<pre>';
// print_r($cc);
// // echo '</pre>';


// 

// $dd = "Z44arqa";
// $kay = array_search($dd,$cities );

// if ($kay) {
//     unset($cities[$kay]);
//     echo "The city $dd was removed successfully.";
// } else{
//     echo "The city $dd does not exist in the array.";
// };

// echo '<pre>';
// print_r($cities);
// echo '</pre>';



// استخراج جزء من المصفوفة للحصول على مصفوفة فرعية 

// $ee = array_slice($cities, 0,3);

// echo '<pre>';
// print_r($ee);
// echo '</pre>';



// task 6

// تعريف المصفوفة المرتبطة
$products = array(
    "Product1" => 10.50,
    "Product2" => 20.00,
    "Product3" => 15.75
);

// طباعة المصفوفة مرتبة حسب أسماء المنتجات
ksort($products);
echo "Sorted by Product Names:\n";
foreach ($products as $product => $price) {
    echo "$product: $price\n";
}

// طباعة المصفوفة مرتبة حسب الأسعار
asort($products);
echo "\nSorted by Prices:\n";
foreach ($products as $product => $price) {
    echo "$product: $price\n";
}

// حساب متوسط الأسعار
$averagePrice = array_sum($products) / count($products);
echo "\nAverage Price: $averagePrice\n";

// العثور على أغلى منتج
$mostExpensivePrice = max($products);
$mostExpensiveProduct = array_search($mostExpensivePrice, $products);
echo "Most Expensive Product: $mostExpensiveProduct - $mostExpensivePrice\n";


// task 7


// إنشاء مصفوفة متعددة الأبعاد لتخزين الكتب
$books = array(
    array("title" => "Book One", "author" => "Author A", "year" => 2015),
    array("title" => "Book Two", "author" => "Author B", "year" => 2008),
    array("title" => "Book Three", "author" => "Author C", "year" => 2020)
);

// طباعة تفاصيل الكتب التي نشرت بعد عام 2010
echo "Books published after 2010:\n";
foreach ($books as $book) {
    if ($book["year"] > 2010) {
        echo "Title: " . $book["title"] . ", Author: " . $book["author"] . ", Year: " . $book["year"] . "\n";
    }
}

// إضافة كتاب جديد
$newBook = array("title" => "Book Four", "author" => "Author D", "year" => 2022);
$books[] = $newBook;

// طباعة المصفوفة المحدثة
echo "\nUpdated Books Array:\n";
foreach ($books as $book) {
    echo "Title: " . $book["title"] . ", Author: " . $book["author"] . ", Year: " . $book["year"] . "\n";
}

// تحديث مؤلف "Book Two"
foreach ($books as &$book) {
    if ($book["title"] == "Book Two") {
        $book["author"] = "Updated Author";
    }
}

// طباعة المصفوفة المحدثة بعد تحديث المؤلف
echo "\nUpdated Books Array After Author Update:\n";
foreach ($books as $book) {
    echo "Title: " . $book["title"] . ", Author: " . $book["author"] . ", Year: " . $book["year"] . "\n";
}

// فرز الكتب حسب العنوان
usort($books, function($a, $b) {
    return strcmp($a["title"], $b["title"]);
});

// طباعة المصفوفة المرتبة حسب العنوان
echo "\nBooks Sorted by Title:\n";
foreach ($books as $book) {
    echo "Title: " . $book["title"] . ", Author: " . $book["author"] . ", Year: " . $book["year"] . "\n";
}










