<?php

include 'classes/Car.php';
include 'classes/Person.php';

// create a new car 
$car1 = new Car('Honda', 'Accord', 'Red');
// $car1->setMake('Toyota');
echo $car1->getMake();
echo'<br>';
echo $car1->start();

// create a new person
$p = new Person('John', 'Teacher');
var_dump($p);
echo $p->communicate('telepathy');

// generic object - empty class
$person1 = new stdClass;
$person1->first = "John";
$person1->last = "Doe";
$person1->job = "Teacher";

echo "<br />" . $person1->first . ' ' . $person1->last;

$person2 = [
    'first' => "Stephen",
    'last' => 'O\'Connor'
];

var_dump($person2);

echo '<pre>';
print_r($person2);
echo '</pre>';

// cast array to an object
var_dump((object) $person2);

// cast array to an object
echo '<pre>';
print_r((object) $person2);
echo '</pre>';

echo $person2['first'] . "\n" . $person2['last'];
echo "<br />";

$o = (object) $person2;
echo $o->first . "\n" . $o->last;
echo "<br />";

// cast string to interger
echo gettype((int) '5');

