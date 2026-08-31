<?php

// Full Name: M.baqir hussaini
// Student ID: 28


// Task 1: Class Constant

class Library
{
    // MAX_BOOKS is a constant because the maximum number of books must remain fixed.
    const MAX_BOOKS = 3;
}

echo "Maximum books allowed: " . Library::MAX_BOOKS;

echo "<br><br>";


// Task 2: Static Property and Static Method

class StudentCounter
{
    public static $count = 0;

    public static function addStudent()
    {
        self::$count++;
    }
}

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count;

echo "<br><br>";


// Task 3: Abstract Class and Abstract Method

abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();

echo "<br>";

$bike->start();

?>
