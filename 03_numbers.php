<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo $a + $b. ' <br> ';
echo $a - $b. ' <br> ';
echo $a * $b. ' <br> ';
echo $a / $b. ' <br> ';
echo $a % $b. ' <br> ';

// Assignment with math operators

// $a += $b. ' <br> ';
// $a -= $b. ' <br> ';
// $a *= $b. ' <br> ';

// Increment operator

echo $a++. ' <br> ';

// Decrement operator

echo $b--. ' <br> ';
// Number checking functions

is_float(1.25); //true
is_double(2.34); //true
is_int(4); //true
is_numeric("3.45"); //true

// Conversion

$strNumber = "12.405";
$number = (float)$strNumber;
//$number = intval($strNumber);
var_dump($number);

// Number functions

echo "abs(-15)". abs(-15). ' <br> '; // prints absolute value;
echo "pow(2,3)". pow(2,3). ' <br> '; // raises the value of 2 to the power of 3
echo "sqrt(16)". sqrt(16). ' <br> '; // finds the sqrt of a number 16 to be 4
echo "max(2, 9, 3)". max(2, 9, 3). ' <br> '; // finds the maximum value of a number to be 9
echo "min(2, 3)". min(2, 3). ' <br> '; // finds the minimum value of a number to be 2
echo "round(2.4)". round(2.4). ' <br> '; // rounds the number up to the nearest whole number which is 2
echo "round(2.6)". round(2.6). ' <br> '; // rounds the number to the nearest value 3
echo "floor(2.6)". floor(2.6). ' <br> '; // rounds a value down to the nearest whole number
echo "ceil(2.4)". ceil(2.4). ' <br> '; // rounds a value up to the nearest whole number

// Formatting numbers
$number = 23452345652.3456523345; 
echo number_format($number, 2, ",", '');

// https://www.php.net/manual/en/ref.math.php
