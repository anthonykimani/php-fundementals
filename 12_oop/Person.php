<?php

class Person{
    public $name; // public methods belong to the object created
    public $surname;
    private ?int $age;
    public static int $counter = 0; // public static methods belongs to the instance created by the object

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter ++;
    }

    public function setAge($age) // this is a setter function
    {
        $this->age = $age;
    }

    public function getAge() // this is a getter function
    {
        return $this->age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}
