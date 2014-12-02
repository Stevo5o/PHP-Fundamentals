<?php

require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);

if ($conn) {
   $users = DB\get('users', $conn);
} else {
die('could not connect');   
}
?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <?php 
         if ($users) {
            foreach ($users as $user) {
               echo "<li>{$user['first_name']}</li>";
            }
         } else {
            echo 'no rows';
         }
      ?>
   </body>
</html>
