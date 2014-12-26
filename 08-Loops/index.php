<?php

$arr = ['Linda', 'Sandra', 'Barry', 'Sean'];

$arr1 = [
    'ceo' 		 => 'Sean',
    'manager' 	 => 'Barry',
    'instructor' => 'SteJ'];

   foreach ($arr1 as $key => $value) {
      echo "<b>" .ucwords($key).":</b> " . "$value<br>";
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

   $jsondata = file_get_contents("films.json");
   $json = json_decode($jsondata, true);
   
   foreach ($json['films'] as $key => $value) {
      echo "<h4>". $value['title']. "</h4>";
      echo "<li>". $value['year']. "</li>";
      echo "<li>". $value['genre']. "</li>";
      echo "<li>". $value['director']. "</li>";
   }