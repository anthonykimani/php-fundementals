<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo "Hello , I am Antony"; // used to avoid code repetition and allow for reusable pieces of code.
}

hello();
// Function with argument
function helloName($name){
    echo "Hello I am $name";
    return "Hello I am $name";
}

helloName("Antony");

// Create sum of two functions
function sum(){
    echo 2 + 3;
    return 2 + 3;
}

function sumNum($a,$b){
    echo $a + $b;
    return $a + $b;
}


// Create function to sum all numbers using ...$nums

// Arrow functions


