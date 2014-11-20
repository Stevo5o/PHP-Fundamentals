<?php

$month ='January';

?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Conditionals</title>
   </head>
   <body>
   <h2>Conditionals</h2>
      <?php
      switch ($month) {
      	case 'January':
      		# code...
      	echo "It is Jan!";
      		break;

      		case 'Febuary':
      		echo "It is Feb!";
      		break;

      		case 'March':
      		echo "It is Mar!";
      	
      	default:
      		# code...
      	echo "Not the right month";
      		break;
      }
      ?>
   </body>
</html>
