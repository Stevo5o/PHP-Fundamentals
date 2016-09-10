<?php
$month = 'December';
?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Conditionals</title>      
      <link href="../style.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <h2>Conditionals</h2>
      <?php
      switch ($month) {
         case 'January':
            echo "Switch: It is Jan! <br />";
            break;

         case 'Febuary':
            echo "It is Feb!";
            break;

         case 'March':
            echo "It is Mar!<br>";
            break;

         default:
            echo "Not the right month<br>";
            break;
      }

      // look-up
      $months = [
          'January' => 'This is January',
          'December' => 'This is December',
          'Feburary' => 'This is Febuary',
          'March' => 'This is March'
      ];

      echo "Look-up: " . $months[$month] . "<br />";
      echo "Ternary: ";
      echo isset($months[$month]) ? $months[$month] : 'Not the right month!';
      echo "<br />";
      // two AND conditionals
      if ($month !== 'January' && $month !== 'June') {
         echo "It's not Jan or June";
      } else {
         echo "It is one of those";
      }
      echo "<br />";
      // two OR conditionals
      if ($month === 'May' || $month === 'June') {
         echo "It is one of those";
      } else {
         echo "It is not May or June<br>";
      }

      // regular expressions http://webcheatsheet.com/php/regular_expressions.php
      if (preg_match("/ell/", "Hello World!", $matches)) {
         echo "Match was found <br />";
         echo $matches[0];
      }
      ?>
   </body>
</html>
