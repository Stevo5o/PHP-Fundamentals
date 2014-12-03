<?php

/* Create a db
 * Create a table posts
 * Connect to the DB
 * Fetch all posts
 * Filter through the posts
 */ 
   
require 'functions.php';
use Blog\DB; 

$conn = DB\connect($config);

// change to 404
if (!$conn) die('Problem connecting to the DB');

if ($conn) {
   $users = DB\get('users', $conn);
} else {
die('could not connect');   
}

$posts = DB\get('posts', $conn);

// var_dump($posts);

foreach ($posts as $post) {
   print_r($post);
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
