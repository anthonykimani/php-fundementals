<?php

require_once "Person.php";
require_once "Student.php";

// What is class and instance 
// class Person{
//     public string $name; // public methods belong to the object created
//     public string $surname;
//     private ?int $age;
//     public static int $counter = 0; // public static methods belongs to the instance created by the object

//     public function __construct($name, $surname)
//     {
//         $this->name = $name;
//         $this->surname = $surname;
//         self::$counter ++;
//     }

//     public function setAge($age) // this is a setter function
//     {
//         $this->age = $age;
//     }

//     public function getAge() // this is a getter function
//     {
//         return $this->age;
//     }

//     public static function getCounter()
//     {
//         return self::$counter;
//     }
// }

// $person = new Person("Joe", "Schmow");
// // $person->name = "Anthony";
// // $person->surname = "Kimani";


// echo "<pre>";
// var_dump($person);
// echo "</pre>";

// $person->setAge(40);
// echo $person->getAge()."<br>";

// $person2 = new Person("Thor", "Odinson");

// echo "<pre>";
// var_dump($person2);
// echo "</pre>";

// echo Person::$counter;
// // Create Person class in Person.php

// // Create instance of Person

// // Using setter and getter

$student = new Student('James', 'john', '4224');
$student->setAge(12);

echo "<pre>";
var_dump($student);
echo "</pre>";


