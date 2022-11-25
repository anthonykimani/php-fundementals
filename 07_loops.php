<?php

// while
$counter = 0;
while($counter < 10){
    echo "Counter less than ten"."<br>";
    $counter++;
}

// Loop with $counter

// do - while
do {
    # code...
    echo "Counter less than 40"."<br>";
    $counter++;
} while ($counter < 40);

// for

for ($i=0; $i < 100; $i++) { 
    # code...
    echo "This is a for loop in php . print for the $i time"."<br>";
}

// foreach
$fruits = ["apple", "banana", "cucumber"];
foreach ($fruits as $fruit){
    echo $fruit;
}

// Iterate Over associative array.