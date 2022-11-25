<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20){
    echo "1"."<br>";
}

// Without circle braces
if ($age === 20) echo "3"."<br>";


// Sample if-else
if($age > 20){
    echo "greater than 20"."<br>";
}else{
    echo "less than 20"."<br>";
}
// Difference between == and ===

if($age == "20"){
    echo "loosely equals 20"."<br>";
}

if($age === 20){
    echo "strictly equals 20"."<br>";
}else{
    echo "loosely equals 20"."<br>";
}

// if AND

if($age > 20 && $salary === 300000){
    echo "Do Something"."<br>";
}else{
    echo "Cant Do anything"."<br>";
}

// if OR

if($age > 20 || $salary === 300000){
    echo "Do Something"."<br>";
}else{
    echo "Cant Do anything"."<br>";
}

// Ternary if

echo $age < 22 ? "Antony the Younger" : "Antony the Elder"."<br>";

// Short ternary

$age?: "18";

// Null coalescing operator

// switch

$userRole = "admin";
switch($userRole){
    case "admin":
        echo "admin"."<br>";
        break;
    case "editor":
        echo "editor"."<br>";
        break;
    case "user":
        echo "user"."<br>";
        break;
    default:
        echo "Invalid role"."<br>";
}
