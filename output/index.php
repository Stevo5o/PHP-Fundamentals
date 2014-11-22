<?php 

$name = "Ste";
$houseNumber = 10;

printf("printf: My name is %s and my house number is:%d<br />", $name, $houseNumber);

$greeting = sprintf("sprintf: My name is %s and my house number is:%d<br />", $name, $houseNumber);

echo $greeting;

$posted = sprintf("Today is %s, %s, %d<br />", 'June','7th', '2012');

echo $posted;

list($month, $day, $year) = sscanf("Nov 7th, 2014", "%s %[^,], %d");

echo "$month\n $day\n $year";

$results = sscanf("Nov 7th, 2014", "%s %[^,], %d");

echo "<pre>";
print_r($results);
echo "</pre>";

list($month, $day, $year) = array("Nov", "7th", "2014");

echo "$month\n $day\n $year<br />";

sscanf("Nov 7th, 2014", "%s %[^,], %d", $month, $day,$year);

echo "$month\n $day\n $year";