<?php

// Create simple string

$string = "Hello Kimani";
$string2 = "Hello Liz";

$concat = "Hello I am".$string.", I am 22 years old";

$interpolation = "Hello I am $string, a 22 year old man ";
$single = 'Hello I am $string , a 22 year old man';

echo $concat. ' <br> ';
echo $interpolation. ' <br> ';
echo $single. ' <br> ';

// String concatenation

echo "Hello"."World"."and PHP";

// String functions

$hello = "      Hello World     ";

echo "1- ". strlen($hello). ' <br> '; //prints length of the string
echo "2- ". trim($hello). ' <br> '; // removes white spaces from the string
echo "3- ". ltrim($hello). ' <br> '; // removes white space from the left side of the string
echo "4- ". rtrim($hello). ' <br> '; // removes white space from the right side of the string
echo "5- ". str_word_count($hello). ' <br> '; // counts the number of words in a string
echo "6- ". strrev($hello). ' <br> '; // reverses the word
echo "7- ". strtoupper($hello). ' <br> '; // prints an uppercased string
echo "8- ". strtolower($hello). ' <br> '; // prints a lowercased string
echo "9- ". ucfirst('hello'). ' <br> '; //makes a strings first letter uppercase
echo "10- ". lcfirst('HELLO'). ' <br> '; // makes a string's first letter lowercased
echo "11- ". ucwords("hello world and php"). ' <br> '; // uppercases the first letter in any word on the string
echo "12- ". strpos($string, "kimani"). ' <br> '; // finds a match of the word in the first argument
echo "13- ". stripos($hello, "world"). ' <br> '; // finds a match of the word and prints out its string , even if it lowercased
echo "14- ". substr($hello, 8, 3). ' <br> '; // prints the string from line 8 and 3 letters
echo "15- ". str_replace("World", "PHP", $hello). ' <br> '; // searches and replaces the word World with PHP , in the string $hello
echo "16- ". str_ireplace("World", "php", $hello). ' <br> '; // searches , replaces words in string ignoring case sensitivity



// Multiline text and line breaks

$long_text = "
Hello, my name is Kimani
I am 22, 
I love writing eloquent php
";

echo $long_text. ' <br> ';
echo nl2br($long_text). ' <br> ';

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php