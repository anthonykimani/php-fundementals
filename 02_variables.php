<?php

// What is a variable

// Variable types

// Declare variables
$name = "Antony";
$age = 32;
$isMale = true;
$height = 1.85;
$salary = 500000;

// Print the variables. Explain what is concatenation
echo $name .'<br>';
echo $age . '<br>';
echo $isMale . '<br>';
// Print types of the variables
echo gettype($name) . ' <br> ';
echo gettype($age) . ' <br> ';
echo gettype($isMale) . ' <br> ';
echo gettype($height) . ' <br> ';
echo gettype($salary) . ' <br> ';

// Print the whole variable

var_dump($name, $age, $isMale). ' <br> ';

// Change the value of the variable

$name = false;

// Print type of the variable

echo gettype($name);

// Variable checking functions

echo is_string($name);
echo is_int($age);
echo is_bool($isMale);
echo is_double($height);

// Check if variable is defined

isset($name);
isset($address);

// Constants
define("PI", 3.14);
echo PI. '<br>';

// Using PHP built-in constants

echo SORT_ASC. ' <br> ';
echo PHP_INT_MAX. ' <br> ';
