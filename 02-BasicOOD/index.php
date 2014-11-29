<?php

class Person {

   public $name;
   public $job;

   public function __construct($name, $job) {
      $this->name = $name;
      $this->job = $job;
   }

   public function communicate($style = 'voice') {
      return 'communicating ' . $style;
   }

}

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
