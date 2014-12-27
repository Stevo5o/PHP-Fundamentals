<?php
// namespace

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
      <link href="styley.css" rel="stylesheet">
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
      <form method="post" action="process.php">
         <ul>
            <li>
               <label>First Name: </label>
               <input type="text" name="fname">
            </li>
            <li>
               <label>Last Name: </label>
               <input type="text" name="lname">
            </li>
            <li>
               <label>Email: </label>
               <input type="email" name="email">
            </li>
            <li>
               <input type="submit" name="submit">
            </li>
         </ul>
      </form>
   </body>
</html>
