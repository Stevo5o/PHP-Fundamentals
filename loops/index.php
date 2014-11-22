<?php

$arr = ['Linda', 'Sandra', 'Barry', 'Sean'];

$arr1 = [
    'ceo' 		 => 'Sean',
    'manager' 	 => 'Barry',
    'instructor' => 'SteJ'];

   foreach ($arr1 as $name) {
      echo "<li><b>$name</b></li>";
	}
		echo "<br />";
	for($i = 0; $i < count($arr); $i++) {
		echo "<li><b>" . $arr[$i] . "</b></li>";
	}

	$counter = 1;
	while($counter < 10) {
		$answer = 3 * $counter;
		echo "3 * $counter = $answer <hr />";
		$counter++;
	} 

	$c = 0;
	while($c < 4) {		
		echo "$arr[$c] <hr />";
		$c++;
	} 
