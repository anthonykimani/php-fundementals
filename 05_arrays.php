<?php

// Create array

// $fruits = ["Banana", "Apple", "Orange"];

// // Print the whole array

// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Get element by index

// echo $fruits[2].'<br>';

// // Set element by index

// $fruits[0] = "Peach";
// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Check if array has element at index 2

// isset($fruits[3]); //false

// // Append element
// $fruits[] = "Banana";

// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Print the length of the array

// echo count($fruits).'<br>';

// // Add element at the end of the array

// array_push($fruits, "Strawberry");

// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Remove element from the end of the array

// echo array_pop($fruits);

// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Add element at the beginning of the array

// echo array_unshift($fruits, "Mango");

// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';


// // Remove element from the beginning of the array

// echo array_shift($fruits);

// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';


// // Split the string into an array

// echo $string = "Avocado, Mango, Passion";

// echo '<pre>';
// var_dump(explode(",",$string));
// echo '<pre>';


// // Combine array elements into string

// echo implode(",", $fruits);

// // Check if element exist in the array

// echo '<pre>';
// var_dump(in_array("Mango", $fruits));
// echo '<pre>';


// // Search element index in the array

// echo '<pre>';
// var_dump(array_search("Apple", $fruits));
// echo "</pre>";

// // Merge two arrays

// $vegetables = ["potato", "cucumber"];

// $legumes = ["beans", "peas"];

// echo "<pre>";
// var_dump(array_merge($vegetables, $legumes));
// var_dump([...$vegetables, ...$legumes]); // spreads the array
// echo "</pre>";

// // Sorting of array (Reverse order also)

// echo "</pre>";
// var_dump($fruits);
// echo "</pre>";
// sort($fruits); // sorts aphlabetically acsending
// echo "</pre>";
// rsort($fruits); // sort alphabetically descending
// echo "</pre>";
// var_dump($fruits);

// $numbers = [3,4,5,2,5,2,4];
// echo "</pre>";
// var_dump($numbers);
// echo "</pre>";
// sort($numbers);
// echo "</pre>";
// var_dump($numbers);
// echo "</pre>";


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    "name" => "Antony",
    "surname" => "Kimani",
    "age" => 29,
    "hobbies" => ["Racing", "Bantering", "Swimming"]
];

echo '<pre>';
var_dump($person);
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
echo $person['name'] = "Priest".'<br>';
echo $person['profession'] = "Software Engineer"."<br>";

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

$person['address'] ??= 'unknown';

// Check if array has specific key

// Print the keys of the array
echo "</pre>";
var_dump(array_keys($person)).'<br>';
echo "</pre>";

// Print the values of the array

echo "</pre>";
var_dump(array_values($person)).'<br>';
echo "</pre>";


// Sorting associative arrays by values, by keys

ksort($person); // sorts the associative array by keys
asort($person); // sorts by values


// Two dimensional arrays

$todos = [
    ["title" => "todo title 1", "completed"],

];