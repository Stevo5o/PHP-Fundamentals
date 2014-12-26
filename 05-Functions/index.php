<?php

// basic PHP OOD

function say_hello($name = 'buddy') {
	return "Hi, there $name.";
}

function pp($value) {
echo '<pre>';
print_r($value);
echo '</pre>';
}

function array_pluck($toPluck, $arr) {
	$ret = [];

	foreach ($arr as $item) {
		$ret[] = $item[$toPluck];
	}

	return($ret);
}

function array_pluck2($toPluck, $arr) {
	return array_map(function($item) use($toPluck){
		return $item[$toPluck];
	}, $arr);
}

$greeting = say_hello('Ste');

echo $greeting;

$arr = ['name' => 'Ste', 'age' => '38', 'occupation' => 'Web Developer'];

pp($arr);

$people = [
    ['name' => 'Ste', 'age' => '38', 'occupation' => 'Web Developer'],
    ['name' => 'John', 'age' => '40', 'occupation' => 'Teacher'],
    ['name' => 'Jane', 'age' => '30', 'occupation' => 'Marketing']    
    ];

$plucked = array_pluck('name', $people); // array = ['Ste', 'John', 'Jane'];

print_r($plucked);
echo "<br />";

$names = array_pluck2('name', $people);
	foreach($names as $name) {
		echo "$name\n";
	}
   
   // common functions
   echo '<br>';
   $phrase = 'I like to eat apples';
   $phrase = str_replace('apples', 'oranges', $phrase);
   echo $phrase;
   
   echo '<br>';
   $name_array = ['Brad', 'Bob', 'Mike', 'Sarah', 'Michelle'];
   print_r($name_array);
   echo'<br>';
   $name_array = implode('<br>', $name_array);
   echo $name_array;
   
   echo '<br>';
   $car_string = 'Toyota,Ford,nissan,Kia,Mazda';
   $car_string = explode(',', $car_string);
   print_r($car_string);   
   echo 'How many cars: '. count($car_string);
   