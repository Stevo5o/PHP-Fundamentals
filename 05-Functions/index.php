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