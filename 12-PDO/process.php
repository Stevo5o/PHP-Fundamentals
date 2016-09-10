<?php

// print_r($_POST);
require 'functions.php';

use Blog\DB;

$conn = DB\connect($config);

if ($conn) {
   $users = DB\get('users', $conn);
} else {
   die('could not connect');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


   $fname = trim($_POST["fname"]);
   $lname = trim($_POST["lname"]);
   $email = trim($_POST["email"]);

   $stmt = $conn->prepare("INSERT INTO users (first_name,last_name,email_address) VALUES (?,?,?)");
   $stmt->bindParam(1, $fname);
   $stmt->bindParam(2, $lname);
   $stmt->bindParam(3, $email);

   if (empty($fname) || empty($lname) || empty($email)) {      
      echo'Please provide a name and valid email address.';
   } else {
      $stmt->execute();
      echo'<b><p><font color="green">Thank you, I will contact you soon!</font></p></b>';
   }
}



